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
		//'common.js'
	)); ?>
	<link rel="shortcut icon" href="<?php echo Uri::base() . 'favicon.ico'; ?>">
</head>
<body>
	<div class="container" role="main">
		<?php echo $content; ?>
	</div><!--/.container -->
</body>
</html>
