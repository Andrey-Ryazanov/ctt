<?
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
$path=explode('/', $dir);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="/css/style_new.css">
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
<!--Slick-->
<script type="text/javascript" src="/slick/slick.min.js"></script>
<!--Select-->
<script src="/js/bootstrap-select.js"></script>
<!--Bootstrap-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/script.js"></script>

<script>
  window.addEventListener('message', function (e) {
        h = e.data;
        if (!isNaN(h)&&(h > 0)) {
                iframe = document.getElementById("ExdFrm");
                iframe.height = e.data;
        }
});
</script>

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





</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div id="wrapper">
    <div class="inn_wrap">
        <header>
            <?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'/inc/templ/header_new.php');?>
        </header>
        <div class="main_content <?$APPLICATION->ShowProperty('class')?>">
            <?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'/inc/nav_chain.php');?>
            <div class="inner_content">
                <?if ($dir!='/' and $dir!='/en/'){?>
                    <h1><?$APPLICATION->ShowTitle(false)?></h1>
                <?}?>
                