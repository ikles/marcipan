<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/form.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=1358px">
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/common.js"></script>
  </head>
  <body>
  	<div class="s-wrapper">
  		<a href="#" class="to_top">В начало</a>
  		<jdoc:include type="modules" name="header" style="mystyle" />
  		<div class="container">
  		<div class="top floating">
  				<a href="/" class="top__logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo.png" alt=""></a>
  				<jdoc:include type="modules" name="top__adress" style="mystyle" />
  				<jdoc:include type="modules" name="top__mnu" style="mystyle" />
  			</div>
  		</div>
  		<jdoc:include type="modules" name="upper_carousel" style="mystyle" />
  		<jdoc:include type="modules" name="carousel" style="mystyle" />
  		<div class="component">
  			<jdoc:include type="modules" name="component__module" style="mystyle" />
  			<jdoc:include type="component" style="xhtml" />
  			<jdoc:include type="modules" name="under_component" style="mystyle" />
  		</div><!--component-->
  		<div class="s-footer">
  			<jdoc:include type="modules" name="footer-adress" style="mystyle" />
  		</div><!--s-footer-->
  	</div><!--s-wrapper-->  	
  	<script>
  	</script>		
  </body>
  </html>

