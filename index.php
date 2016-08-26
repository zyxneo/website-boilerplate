<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.chameleon
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
// $option   = $app->input->getCmd('option', '');
// $view     = $app->input->getCmd('view', '');
// $layout   = $app->input->getCmd('layout', '');
// $task     = $app->input->getCmd('task', '');
// $itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

JHtml::_('jquery.framework');
JHtml::_('bootstrap.framework'); //Force load Bootstrap
unset($doc->_scripts[$this->baseurl . '/media/jui/js/bootstrap.min.js']); // Remove joomla core bootstrap

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/build/styles/style.css');

$fluidContainer = false;

// Adjusting content width
if ($this->countModules('sidebar-right') && $this->countModules('sidebar-left')) {
	$col_class = "col-sm-6";
}
elseif ($this->countModules('sidebar-right') && !$this->countModules('sidebar-left')) {
	$col_class = "col-sm-9";
}
elseif (!$this->countModules('sidebar-right') && $this->countModules('sidebar-left')) {
	$col_class = "col-sm-9";
}
else {
	$col_class = "col-sm-12";
}

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
	<meta charset="utf-8">
    <!--[if lt IE 11]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<jdoc:include type="head" />
	
    <link rel="shortcut icon" href="../img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Body -->
	<div class="body">
	
		<!-- Header Start -->
		<header class="header">
			<nav class="navbar navbar-fixed-top navbar-light bg-faded">
				<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-main-menu" aria-controls="navbar-main-menu" aria-expanded="false" aria-label="Toggle navigation">
							&#9776;
						</button>
						<a class="navbar-brand" href="<?php echo $this->baseurl; ?>">
							<?php echo $sitename; ?>
						</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-toggleable-sm" id="navbar-main-menu">
						<?php if ($this->countModules('main-menu')) : ?>
							<!-- Joomla NavBar Start -->
							<div class="main-menu">
								<jdoc:include type="modules" name="main-menu" style="none" />
							</div>
							<!-- Joomla NavBar End-->
						<?php endif; ?>
						
						<?php if ($this->countModules('header-search')) : ?>
							<jdoc:include type="modules" name="header-search" style="none" />
						<?php endif; ?>
						
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- Header End -->	
		
		<?php if ($this->countModules('banner')) : ?>
			<!-- banner Start -->	
			<div id="banner" class="banner">
				<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
					<jdoc:include type="modules" name="banner" />
				</div>
			</div>
			<!-- banner End -->
		<?php endif; ?>
		
		<?php if ($this->countModules('breadcrumbs')) : ?>
			<!-- breadcrumbs Start -->
			<div id="breadcrumbs" class="breadcrumbs">
				<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
					<jdoc:include type="modules" name="breadcrumbs" />
				</div>
			</div>
			<!-- breadcrumbs Start -->
		<?php endif; ?>
		
		<!--Start Main Content -->
		<div class="main-content">
			<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
				<div class="row">
					<?php if ($this->countModules('sidebar-left')) : ?>
						<!-- Begin Sidebar left-->
						<div id="sidebar" class="col-sm-3">
							<div class="sidebar-nav">
								<jdoc:include type="modules" name="sidebar-left" style="xhtml" />
							</div>
						</div>
						<!-- End Sidebar left-->
					<?php endif; ?>
					
					<main id="content" role="main" class="<?php echo $col_class;?>">
						<!-- Begin Content -->
						<jdoc:include type="modules" name="top" style="xhtml" />
						<jdoc:include type="message" />
						<jdoc:include type="component" />
						<jdoc:include type="modules" name="bottom" style="none" />
						<!-- End Content -->
					</main>
					
					<?php if ($this->countModules('sidebar-right')) : ?>
						<div id="aside" class="col-sm-3">
							<!-- Begin Right Sidebar -->
							<jdoc:include type="modules" name="sidebar-right" style="xhtml" />
							<!-- End Right Sidebar -->
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--End Main Content -->
		
	</div>

	<!-- Footer starts -->
	<footer class="footer" role="contentinfo">
		<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
			<hr />
			<jdoc:include type="modules" name="footer" style="none" />
			<p>&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?></p>
		</div>
	</footer>
	<!-- Footer End -->

	<jdoc:include type="modules" name="debug" style="none" />
	
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->    
    <script src="<?php echo JUri::root(true); ?>/templates/bs4/build/scripts/vendor/tether.min.js"></script>
    <script src="<?php echo JUri::root(true); ?>/templates/bs4/build/scripts/bootstrap.min.js"></script>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

    <!-- Livereload - REMOVE IF YOU ARE DONE
    ================================================== -->
    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>