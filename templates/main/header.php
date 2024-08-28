<?IncludeTemplateLangFile();
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
$path=explode('/', $dir);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Главная выставка строительной техники и технологий в России. Уже более 20 лет. Принять участие. Посетить выставку">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead()?>
    <!--<link rel="icon" href="img/favicon.jpg" type="image/x-icon">-->
    <!--Fancy-->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css">
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--Select-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
    <!--CSS Style-->
    <link rel="stylesheet" href="/css/style.css?v=21">

	 <link rel="stylesheet" href="/css/team/team.css?v=2">

    <link rel="stylesheet" href="/css/territory_Innovation/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--Fansy-->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

    <script type="text/javascript" src="/js/jquery.jcountdown.js"></script>
	<script type="text/javascript" src="/js/blocks/team.js"></script>
    <!--Slick-->
    <script type="text/javascript" src="/slick/slick.min.js"></script>
    <!--Select-->
    <script src="/js/bootstrap-select.js"></script>
    <!--Bootstrap-->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.mask.min.js"></script>
    <script type="text/javascript">sndsyData = {SET_KEY: "2IZBZZD6PKM42SKRLTVXXLBIZEGRGHYSSJSIMIE35KLYKTOD53YXNULAJOWWLDIQJBP22SHEMTMZYQ",VERSIONING_KEY: "2JRDZZD6PKM42SKRLTVXXLBIZEGRGHYSSJ2ZM6BK2CT67B232V5G7K7R5A2NLVEYTFPP7KZFUQUXJUWE7IXRNSXIPO62A"};</script>
    <script type="text/javascript"> (function(d,w,t,u,o,s,v) { w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) };s = d.createElement("script");s.async = 1; s.src = u;v = d.getElementsByTagName(t)[0]; v.parentNode.insertBefore(s, v); })(document,window,"script","//image.sendsay.ru/js/target/tracking.js","sndsy"); var datecurrent = new Date().toISOString().slice(0,10); sndsy("init", { fid: "bauma_ctt", v: "1.0" }); sndsy("send", {"dk":[["2JRHJ5D6PKMV7I5TXYB7TV32PNSNH3ULNGKM4AKK2HLHPZWQ525FNQLROOC42Z425DLKPE","set", datecurrent]]}); </script>




    <script src="/js/script.js"></script>

<?if($path[4]!="online_tickets" && $path[3]!="register-2023"):?>
    <script>
        window.addEventListener('message', function (e) {
            h = e.data;
            if (!isNaN(h)&&(h > 0)) {
                iframe = document.getElementById("ExdFrm");
                iframe.height = e.data;
            }
        });
    </script>
<?endif;?>
    <script type="text/javascript">
        (function() {
            var ra = document.createElement('script');
            ra.type = 'text/javascript';
            ra.async = true;
            ra.src = (('https:' == document.location.protocol ? 'https:' : 'http:')+'//webrtb.ru/ra.js?site_id=1195995');
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ra, s);
        })();
    </script>

    <?if($APPLICATION->GetCurPage(false) === '/exhibitors/book_your_space/application/'):?>
        <!-- Global site tag (gtag.js) - Google Ads: 527311308 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-527311308"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-527311308'); </script>
    <?endif;?>

    <?if($APPLICATION->GetCurPage(false) !== '/exhibitors/book_your_space/application/'):?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166619202-1"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());

        gtag('config', 'UA-166619202-1');

    </script>
    <!-- Google site tag end-->
    <?endif;?>

<?/*
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '257819369030318');
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1"
    src="https://www.facebook.com/tr?id=257819369030318&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
*/?>

    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?168",t.onload=function(){VK.Retargeting.Init("VK-RTRG-747474-f5Fcd"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-747474-f5Fcd" style="position:fixed; left:-999px;" alt=""/></noscript>


<!-- Yandex.Metrika counter -->

<script type="text/javascript" >

  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};

  m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})

  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(88412543, "init", {

       clickmap:true,

       trackLinks:true,

       accurateTrackBounce:true,

       webvisor:true

  });

</script>

<noscript><div><img src="https://mc.yandex.ru/watch/88412543" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->

</head>
<body>

<?$APPLICATION->ShowPanel();?>
<div id="wrapper" class="wrapper">
    <div class="inn_wrap">
        <header>
            <?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'/inc/templ/header_new.php');?>
        </header>
        <div class="main_content <?$APPLICATION->ShowProperty('class')?>">
            <?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'/inc/nav_chain.php');?>
            <div class="inner_content <?$APPLICATION->ShowProperty("iframe")?>">
<?if($path[2]=="delovaya-programm" && $path[3]=="business_program"){?>
	<div class="presentations" style="    display: block;">
	  <button class="presentations__button">
	    Скачать все презентации
	  </button>
	  <div class="presentations__popup-wrapper">
	    <div class="presentations__popup">
	      <div class="presentations__popup-head">Скачайте все&nbsp;презентации!</div>
	      <div class="presentations__popup-descr">Оставьте свою почту, и мы вышлем ссылку на все презентации спикеров форума.</div>
	      <form class="presentations__popup-form" action="">
	        <input name="mail_presentations" type="email" required="true" placeholder="E-mail">
	        <button type="submit">
	          Отправить!
	        </button>
	      </form>
	      <div class="presentations__popup-foot">
	        Нажимая на кнопку «ОТПРАВИТЬ», вы соглашаетесь с <a href="https://ctt-expo.ru/upload/medialibrary/docs/Политика конфиденциальности_СИГМА ЭКСПО ГРУП_ 01.03.2023.pdf">Политикой конфиденциальности</a>
	      </div>
	    </div>
	    <div class='presentations__successfully'>
	      <div class="presentations__successfully-text">Спасибо, ваша заявка принята</div>
	    </div>
	  </div>
	</div>
<?}?>
                <?if($path[2]!="territory-of-Innovation" && $path[3]!="territory-of-Innovation"){?>
                    <?if ( $dir!='/' && $dir != '/en/' && ($path[3] != "support_by_ministries" && ($path[4] != "support_by_ministries") ) ){?>
                        <h1 <?$APPLICATION->ShowProperty("badges")?>><?$APPLICATION->ShowTitle(false)?></h1>
                    <?} else if ($path[3] == "support_by_ministries" || ($path[4] == "support_by_ministries")) {?>
                        <h1 class="support_by_ministries"><?$APPLICATION->ShowTitle(false)?></h1>
                    <?} else {}?>
                <?}?>