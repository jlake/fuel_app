<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>		<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title><?php echo $title; ?></title>

	<?php echo Asset::css(array(
		'normalize.css',
		'foundation.min.css'
	)); ?>

	<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
		'foundation.min.js',
		'vendor/custom.modernizr.js'
	)); ?>

</head>
<body>

	<!-- Nav Bar -->

	<div class="row">
		<div class="large-12 columns">
			<div class="nav-bar right">
				 <ul class="button-group">
					<li>
						<a href="<?php echo Uri::base(); ?>" class="button <?php echo Uri::segment(1) == '' ? 'disabled' : '' ?>">Top</a>
					</li>
					<li>
						<a href="<?php echo Uri::create('/blog'); ?>" class="button <?php echo Uri::segment(1) == 'blog' ? 'disabled' : '' ?>">Blog</a>
					</li>
					<li>
						<a href="<?php echo Uri::create('/dummy'); ?>" class="button <?php echo Uri::segment(1) == 'dummy' ? 'disabled' : '' ?>">Dummy</a>
					</li>
					<li>
						<a href="<?php echo Uri::create('/admin'); ?>" class="button <?php echo Uri::segment(1) == 'admin' ? 'disabled' : '' ?>">Admin</a>
					</li>
				</ul>
			</div>
			<h1><a href="<?php echo Uri::base(); ?>" class="brand">My Site</a> <small>It's funny!</small></h1>
			<hr />
		</div>
	</div>

	<!-- End Nav -->


	<!-- Main Page Content and Sidebar -->

	<div class="row">

		<!-- Main Blog Content -->
		<div class="large-9 columns" role="content">
			<?php if (Session::get_flash('success')): ?>
				<div data-alert class="alert-box success">
					<p><?php echo implode('</p><p>', (array) Session::get_flash('success')); ?></p>
					<a href="#" class="close">&times;</a>
				</div>
			<?php endif; ?>
			<?php if (Session::get_flash('error')): ?>
				<div data-alert class="alert-box alert">
					<p><?php echo implode('</p><p>', (array) Session::get_flash('error')); ?></p>
					<a href="#" class="close">&times;</a>
				</div>
			<?php endif; ?>

			<?php echo $content; ?>
		</div>

		<!-- End Main Content -->


		<!-- Sidebar -->

		<aside class="large-3 columns">

			<h5>Categories</h5>
			<ul class="side-nav">
				<li><a href="#">News</a></li>
				<li><a href="#">Code</a></li>
				<li><a href="#">Design</a></li>
				<li><a href="#">Fun</a></li>
				<li><a href="#">Weasels</a></li>
			</ul>

			<div class="panel">
				<h5>Featured</h5>
				<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
				<a href="#">Read More &rarr;</a>
			</div>

		</aside>

		<!-- End Sidebar -->
	</div>

	<!-- End Main Content and Sidebar -->


	<!-- Footer -->

	<footer class="row">
		<div class="large-12 columns">
			<hr />
			<div class="row">
				<div class="large-6 columns">
					<p>Copyright&copy; Company Name.</p>
					<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
				</div>
				<div class="large-6 columns">
					<ul class="inline-list right">
						<li><a href="#">Link 1</a></li>
						<li><a href="#">Link 2</a></li>
						<li><a href="#">Link 3</a></li>
						<li><a href="#">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- End Footer -->
</body>
</html>
