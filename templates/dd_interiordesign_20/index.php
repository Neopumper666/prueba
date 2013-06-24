<?php
defined('_JEXEC') or die;

/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = $this;

$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

$view = $this->artx = new ArtxPage($this);

$view->componentWrapper();

JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
$slider_enabled = htmlspecialchars($tplparams->get('slider_enabled'));
$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$rc = htmlspecialchars($tplparams->get('rc'));
$facebookoff	=htmlspecialchars($tplparams->get('facebookoff'));
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <!--scroling head-->
<script src="<?php echo $templateUrl; ?>/js/scroling.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<!--end scroling-->
   <?php if ($slider_enabled == 1) { ?> <!--animacja-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 4000 
        });
    });
</script>
    <!--end animacja--></script><?php } ?>
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Syncopate&amp;subset=latin">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
</head>
<body>
<!--facebook slide-->
<?php if ($facebookoff == 1) { ?><div id="like-box">
	<div class="outside">
		<div class="inside">
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $this->params->get('flang'); ?>/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="<?php echo $this->params->get('facebooklink'); ?>" data-width="292" data-show-faces="true" data-stream="false" data-header="true"></div>
		</div>
	</div>
	<div class="belt">facebook</div>
</div><?php } ?><!--end facebook slide-->
<!--scroling-->
<div id="toTop">^<?php echo $this->params->get('scroll'); ?></div>
<!--koniec scroling-->
<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>


    <div class="dd-shapes">
    <!--contact-->
<div class="contact1">
<div class="email"><?php echo $this->params->get('telefon'); ?></div><br><div class="email"><?php echo $this->params->get('email'); ?></div></div>
<!--end contact-->
   <?php if ($slider_enabled == 1) { ?> <!--animacja grafika-->
<div class="dd-object1780082794" data-left="61.11%"> <div id="slider1">
        <ul id="slider1Content">
            <li class="slider1Image">
                <a href=""><img src="<?php echo $this->params->get('foto1'); ?>" alt="1" /></a>
                <span class="right"><strong><?php echo $this->params->get('naglowek1'); ?></strong><br /><?php echo $this->params->get('text1'); ?></span></li>
            <li class="slider1Image">
                <a href=""><img src="<?php echo $this->params->get('foto2'); ?>" alt="2" /></a>
                <span class="right"><strong><?php echo $this->params->get('naglowek2'); ?></strong><br /><?php echo $this->params->get('text2'); ?></span></li>
            <li class="slider1Image">
                <img src="<?php echo $this->params->get('foto3'); ?>" alt="3" />
                <span class="right"><strong><?php echo $this->params->get('naglowek3'); ?></strong><br /><?php echo $this->params->get('text3'); ?></span></li>
            <li class="slider1Image">
                <img src="<?php echo $this->params->get('foto4'); ?>" alt="4" />
                <span class="right"><strong><?php echo $this->params->get('naglowek4'); ?></strong><br /><?php echo $this->params->get('text4'); ?></span></li>
            <li class="slider1Image">
                <img src="<?php echo $this->params->get('foto5'); ?>" alt="5" />
                <span class="right"><strong><?php echo $this->params->get('naglowek5'); ?></strong><br /><?php echo $this->params->get('text5'); ?></span></li>
            <div class="clear slider1Image"></div>
        </ul>
    </div></div>
<!--konec animacja grafika--><?php } ?>
<div class="dd-object2048865207" data-left="59.09%"></div>
<div class="dd-object295555565" data-left="1.31%"></div>

            </div>
<h1 class="dd-headline" data-left="0.76%">
    <a href="<?php echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a>
</h1>
<h2 class="dd-slogan" data-left="0.75%"><?php echo $this->params->get('siteSlogan'); ?></h2>


<?php if ($fc == 1) { ?><div class="dd-textblock dd-textblock-932844776" data-left="0%">
        <div class="dd-textblock-932844776-text-container">
        <div class="dd-textblock-932844776-text">&nbsp;<a href="<?php echo $this->params->get('facebook'); ?>" target="_blank" class="dd-facebook-tag-icon"></a>&nbsp;</div>
    </div><?php } ?>
    
<?php if ($tc== 1) { ?></div><div class="dd-textblock dd-textblock-718872902" data-left="0%">
        <div class="dd-textblock-718872902-text-container">
        <div class="dd-textblock-718872902-text">&nbsp;<a href="<?php echo $this->params->get('twitter'); ?>/" target="_blank" class="dd-twitter-tag-icon"></a>&nbsp;</div>
    </div><?php } ?>
    
<?php if ($rc== 1) { ?></div><div class="dd-textblock dd-textblock-203272383" data-left="0%">
        <div class="dd-textblock-203272383-text-container">
        <div class="dd-textblock-203272383-text">&nbsp;<a href="<?php echo $this->params->get('rss'); ?>" class="dd-rss-tag-icon"></a>&nbsp;</div>
    </div>
    
</div>
<?php } ?>

<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    <div class="dd-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>

                    
</header>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <div class="dd-layout-cell dd-content">
<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>

<footer class="dd-footer">
<?php if ($view->containsModules('position-27')) : ?>
    <?php echo $view->position('position-27', 'dd-nostyle'); ?>
<?php else: ?>
<span style="text-shadow: rgba(255, 255, 255, 0.484375) 0px 1px 0px;"><span style="text-shadow: rgba(255, 255, 255, 0.484375) 0px 1px 0px;">Copyright © 2013. <?php echo $this->params->get('stopka'); ?> &nbsp;Rights Reserved.</span></span>
<?php endif; ?>
</footer>

    </div>
    <p class="dd-page-footer">
        <span id="dd-footnote-links">Designed by <a href="http://www.diablodesign.eu" target="_blank">www.DiabloDesign.eu</a>.</span>
    </p>
</div>



<?php echo $view->position('debug'); ?>
</body>
</html>