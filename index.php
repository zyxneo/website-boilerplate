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
$google_map_api = $app->getCfg('google_map_api');
$google_verify = $app->getCfg('google_verify');
$fb_app_id = $app->getCfg('facebook_app_id');
$ENV = $app->getCfg('ENV');

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
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
    <!--[if lt IE 11]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<jdoc:include type="head" />

    <link rel="shortcut icon" href="<?php echo JUri::root(true); ?>/templates/bs4/build/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo JUri::root(true); ?>/templates/bs4/build/images/img/favicon/apple-touch-icon.png">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- use your own! -->
	<meta name="verify-v1" content="<?php echo $google_verify; ?>" />

	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Open+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo str_replace('-', '_', $this->language); ?>/sdk.js#xfbml=1&version=v2.7&appId=<?php echo $fb_app_id;?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'hu'}
</script>

<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<!-- Header Start -->
    <header class="header">

      <noscript>
        <div class="alert alert-danger" role="alert">
          <div class="container">
            <p>Your browser does not support JavaScript!</p>
          </div>
        </div>
        <!--<META HTTP-EQUIV="Refresh" CONTENT="0;URL=ShowErrorPage.html">-->
      </noscript>


		<nav class="navbar navbar-full navbar-dark bg-inverse main-nav">
			<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-main-menu" aria-controls="navbar-main-menu" aria-expanded="false" aria-label="Toggle navigation">
						&#9776;
					</button>
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

	<!-- Body -->
	<div class="body">

		<?php if ($this->countModules('carusel')) : ?>
			<!-- carusel Start -->
			<jdoc:include type="modules" name="carusel" />
			<!-- carusel End -->
		<?php endif; ?>

		<?php if ($this->countModules('banner')) : ?>
			<!-- banner Start -->
			<div class="banner">
				<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
					<jdoc:include type="modules" name="banner" />
				</div>
			</div>
			<!-- banner End -->
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
						<jdoc:include type="modules" name="content-top" style="xhtml" />
						<jdoc:include type="message" />

						<?php if ($this->countModules('breadcrumbs')) : ?>
							<!-- breadcrumbs Start -->
							<div id="breadcrumbs" class="breadcrumbs">
								<jdoc:include type="modules" name="breadcrumbs" />
							</div>
							<!-- breadcrumbs Start -->
						<?php endif; ?>

						<jdoc:include type="component" />
						<jdoc:include type="modules" name="content-bottom" style="xhtml" />
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

	<?php if ($this->countModules('parallax')) : ?>
		<!-- Parallax Start -->
    <div class="parallax">
      <div class="container">
		    <jdoc:include type="modules" name="parallax" style="xhtml" />
      </div>
    </div>
		<!-- Parallax End -->
	<?php endif; ?>

	<?php if ($this->countModules('user1')) : ?>
		<!-- user1 Start -->
		<jdoc:include type="modules" name="user1" style="xhtml" />
		<!-- user1 End -->
	<?php endif; ?>

	<?php if ($this->countModules('user2')) : ?>
		<!-- user2 Start -->
		<jdoc:include type="modules" name="user2" style="xhtml" />
		<!-- user2 End -->
	<?php endif; ?>

	<?php if ($this->countModules('user3')) : ?>
		<!-- user3 Start -->
		<div class="user3" >
			<div class="container" >
				<jdoc:include type="modules" name="user3" style="xhtml" />
			</div>
		</div>
		<!-- user3 End -->
	<?php endif; ?>

	<?php if ($this->countModules('user4')) : ?>
		<!-- user4 Start -->
		<jdoc:include type="modules" name="user4" style="xhtml" />
		<!-- user4 End -->
	<?php endif; ?>

	<!-- Footer starts -->
	<footer class="footer" role="contentinfo">
		<div class="footer__articles">
			<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
				<jdoc:include type="modules" name="footer1" style="xhtml" />
				<jdoc:include type="modules" name="footer2" style="xhtml" />
				<jdoc:include type="modules" name="footer3" style="xhtml" />
				<jdoc:include type="modules" name="footer4" style="xhtml" />
			</div>
		</div>

		<div class="footer__bottom">
			<div class="container<?php echo ($fluidContainer ? '-fluid' : ''); ?>">
				<p class="pull-md-left">&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?></p>
					<div class="pull-md-right">
						<jdoc:include type="modules" name="footer-bottom-right" />
					</div>
					<div class="pull-md-right">
						<jdoc:include type="modules" name="syndicate" />
					</div>
			</div>
		</div>

	</footer>
	<!-- Footer End -->

	<jdoc:include type="modules" name="debug" style="none" />



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo JUri::root(true); ?>/templates/bs4/build/scripts/vendor/tether.min.js"></script>
    <script src="<?php echo JUri::root(true); ?>/templates/bs4/build/scripts/bootstrap.min.js"></script>
    <script src="<?php echo JUri::root(true); ?>/templates/bs4/build/scripts/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo $google_map_api; ?>', 'auto');
		ga('send', 'pageview');

	</script>

	<?php if ($ENV = 'test') : ?>
    <!-- Livereload -->
    <script src="//localhost:35729/livereload.js"></script>
	<?php endif; ?>
</body>

</html>
