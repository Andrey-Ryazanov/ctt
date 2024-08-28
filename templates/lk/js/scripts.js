var SITE_TEMPLATE_PATH = "/bitrix/templates/lk",
xhr, cons = 0;

$(document).on('click', '#info input', function() {
	$(this).select();
});

$(document).on('click', '.show_pwd', function() {
	if ($(this).hasClass('active')) {
		$(this).prev().attr('type', 'password');
		$(this).removeClass('active');
	}
	else {
		$(this).prev().attr('type', 'text');
		$(this).addClass('active');
	}
});


$(document).on('click', '.clear', function() {
	var name = $(this).parents('.inp').find('.i_title').text(),
	password = $(this).parent().find('input').val(),
	user_id = $('#user_id').val(),
	$this = $(this);
	$.ajax({
		type: "POST",
		url: SITE_TEMPLATE_PATH + "/inc/ajax/pwds_operations/remove.php",
		data: ({
			"name" : name,
			"password" : password,
			"user_id" : user_id
		}),
		success: function(a){
			if (a) {
				$this.parents('.inp').remove();
			}
		}
	});
});

$(document).on('click', '.remove', function(e) {
	e.preventDefault();
	var file_id = $(this).parents('.item').data("id"),
	user_id = $('#user_id').val(),
	$this = $(this);
	if (!cons) {
		$.ajax({
			type: "POST",
			url: SITE_TEMPLATE_PATH + "/inc/ajax/docs_operations/remove.php",
			data: ({
				"file_id" : file_id,
				"user_id" : user_id
			}),
			success: function(a){
				if (a) {
					$this.parents('.item').remove();
					if ($('.docs .items .item').length == 0) {
						$('label.add_more').text("Добавить");
					}
				}
			}
		});
	} else {
		if(xhr && xhr.readyState != 4){
			xhr.abort();
			cons = 0;
			$this.parents('.item').remove();
			if ($('.docs .items .item').length == 0) {
				$('label.add_more').text("Добавить");
			}
			$(".docs .add_more").css("display", "inline");
		}
	}
	
});

$(document).on('click', '.ok', function() {
	$.fancybox.close();
});

$(document).on('click', '.add_new_pwd', function(e) {
	e.preventDefault();
	$('#add_pwd').addClass('active');
	$(this).removeClass('active');
});

$(document).on('click', '#add_pwd .add_more', function(e) {
	e.preventDefault();
	$('#add_pwd').find('input').val('');
});

$(document).on('click', '.cancel', function(e) {
	e.preventDefault();
	$('#add_pwd').find('input').val('');
	$('#add_pwd').removeClass('active');
	$('.add_new_pwd').addClass('active');
});

$(document).on('click', '.copy_pwd', function() {
	var $temp = $("<input>");
	var element = $(this).prev().find('input');
	$("body").append($temp);
	$temp.val($(element).val()).select();
	document.execCommand("copy");
	$temp.remove();
	element.select();
});

$(document).on("submit", 'form#refresh_pwd', function(e) {
	e.preventDefault();
	var email = $(this).find('input[name=email]'),
	mist = 0;

	if (!email.val()) {
		email.addClass('error');
		mist++;
	}
	else {
		email.removeClass('error');
	}

	if (!mist) {
		$.ajax({
			type: "POST",
			url: SITE_TEMPLATE_PATH + "/inc/ajax/claim_password.php",
			data: ({
				"email" : email.val()
			}),
			success: function(a){
				if (a == "2") {
					email.addClass("error");
					$(".errortext").removeClass('dis');
				}
				else {
					$('.popup .inner').html(a);
				}
			}
		});
	}
});

$(document).ready(function() {
	$('form#login').on('submit', function(e) {
		e.preventDefault();
		var login = $(this).find('input[name=login]'),
		password = $(this).find('input[name=password]'),
		remember = $(this).find('input#remember'),
		mist = 0;

		if (!login.val()) {
			login.addClass('error');
			mist++;
		}
		else {
			login.removeClass('error');
		}

		if (!password.val()) {
			password.addClass('error');
			mist++;
		}
		else {
			password.removeClass('error');
		}

		if (remember.is(':checked')) {
			remember = "Y";
		}
		else {
			remember = "N";
		}

		if (!mist) {
			$.ajax({
				type: "POST",
				url: SITE_TEMPLATE_PATH + "/inc/ajax/login.php",
				data : ({
					"password" : password.val(),
					"login" : login.val(),
					"remember" : remember
				}),
				success: function(a){
					if (a == "auth_complete") {
						window.location.href = "https://bauma-ctt.ru/exhibitors/lk/";
					}
					else {
						$("form#login .line").after(a);
						login.addClass('error');
						password.addClass('error');
					}
				}
			});
		}
	});

	$(".forget").on('click', function(e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: SITE_TEMPLATE_PATH + "/inc/ajax/popup_forget.php",
			success: function(a){
				$.fancybox.open({
					src: a,
					type: 'html'
				});
			}
		});
	});

	$('form#add_pwd').on('submit', function(e) {
		e.preventDefault();
		var name = $(this).find('input[name=name]'),
		password = $(this).find('input[name=password]'),
		user_id = $('#user_id').val(),
		mist = 0;

		if (!name.val()) {
			name.addClass('error');
			mist++;
		}
		else {
			name.removeClass('error');
		}

		if (!password.val()) {
			password.addClass('error');
			mist++;
		}
		else {
			password.removeClass('error');
		}

		if (!mist) {
			$.ajax({
				type: "POST",
				url: SITE_TEMPLATE_PATH + "/inc/ajax/pwds_operations/add.php",
				data : ({
					"password" : password.val(),
					"name" : name.val(),
					"user_id" : user_id
				}),
				success: function(a){
					if (a) {
						var key = $('#pwd_list .inp').length - 1;
						if (key < 0) {
							$('#pwd_list .add_new_pwd').before(a);
						}
						else {
							$('#pwd_list .inp').eq(key).after(a);
						}
						
					}
				}
			});
		}

	});

	$('#file').on('change', function() {
		if ($('#file')[0].files[0]) {
			var formData = new FormData(),
			filename = $('#file')[0].files[0].name,
			filesize = getReadableFileSizeString($('#file')[0].files[0].size),
			key = $('.docs .items .item').length - 1;

			var file_ext = filename.split('.').pop();
			filename = filename.replace(/\.[^/.]+$/, "");

			formData.append("file", $('#file')[0].files[0]);
			formData.append("user_id", $('#user_id').val());
			formData.append("key", key);
			$('.docs .items').append('<a href="#" data-id="' + key + '" class="item"><div class="it"><div class="name">' + filename + '</div><div class="remove"><div class="spin active"></div></div></div><div class="attr">' + file_ext + ', ' + filesize + '</div></a>');
			$(".docs .add_more").css("display", "none");
			cons++;
			xhr = $.ajax({
				type: "POST",
				url: SITE_TEMPLATE_PATH + "/inc/ajax/docs_operations/add.php",
				data: formData,
				contentType: false,
				processData: false,
				success: function(a){
					if (a) {
						var result = a.split(' ; ');
						var link = result[0],
						id = result[1];
						key++;
						cons = 0;
						$('.docs .items .item').eq(key).attr("data-id", id);
						$('.docs .items .item').eq(key).attr("href", link);
						$('.docs .items .item').eq(key).find(".spin").removeClass('active');
						if ($('.docs .items .item').length > 0) {
							$('label.add_more').text("Добавить еще");
						}
						$(".docs .add_more").css("display", "inline");
					}
				}
			});
		}
	})

	$('#logout').on('click', function(e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: SITE_TEMPLATE_PATH + "/inc/ajax/logout.php",
			success: function(a){
				if (a) {
					window.location.href = "https://bauma-ctt.ru/exhibitors/lk/login/";
				}
			}
		});
	});
});

// functions

function getReadableFileSizeString(fileSizeInBytes) {
	if (fileSizeInBytes > 1024) {
		var i = -1;
		var byteUnits = [' КБ', ' МБ', ' ГБ', ' TB', 'PB', 'EB', 'ZB', 'YB'];
		do {
			fileSizeInBytes = fileSizeInBytes / 1024;
			i++;
		} while (fileSizeInBytes > 1024);

		return Math.max(fileSizeInBytes, 0.1).toFixed(1) + byteUnits[i];
	} else {
		return fileSizeInBytes + " Б";
	}
};