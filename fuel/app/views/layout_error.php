<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css(array(
		'bootstrap.min.css',
		'bootstrap-theme.min.css',
		'common.css'
	)); ?>
	<?php echo Asset::js(array(
		'jquery-3.1.1.min.js',
		'bootstrap.min.js',
		'common.js'
	)); ?>
	<link rel="shortcut icon" href="<?php echo Uri::base() . 'favicon.ico'; ?>">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo Uri::base(); ?>" class="navbar-brand app-logo">Site Logo</a>
			</div>
		</div>
	</nav>

	<div class="container" role="main">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $title; ?></h1>
				<hr>
				<?php echo $content; ?>
			</div>
		</div>
		<hr/>
		<footer>
			<p>
				<strong>Copyright &copy; 2017 <a href="http://www.adore.bz/">Adore</a>.</strong> All rights reserved.
			</p>
		</footer>
	</div><!--/.container -->
</body>
</html>
