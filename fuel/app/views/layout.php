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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo Uri::base(); ?>" class="navbar-brand app-logo">
					Site Logo
				</a>
			</div>
			<div id="navbar-menu" class="navbar-collapse collapse">
				<ul class="nav navbar-nav"><li>
					<li class="<?php echo Uri::segment(1) == '' || Uri::segment(1) == 'home' ? 'active' : '' ?>">
						<?php echo Html::anchor('', 'ホーム'); ?>
					</li>
					<li class="<?php echo Uri::segment(1) == 'dummy' ? 'active' : '' ?>">
						<?php echo Html::anchor('dummy', 'ダミー'); ?>
					</li>
					<li class="<?php echo Uri::segment(1) == 'upload' ? 'active' : '' ?>">
						<?php echo Html::anchor('upload/select', 'ファイルアップロード'); ?>
					</li>
					<li class="<?php echo Uri::segment(1) == 'pdf' ? 'active' : '' ?>">
						<?php echo Html::anchor('pdf/sample', 'PDF帳票作成'); ?>
					</li>
					<li>
						<?php echo Html::anchor('auth/create', '新規アカウント登録'); ?>
					</li>
					<li>
						<?php echo Auth::check() ? Html::anchor('auth/logout', 'ログアウト') : Html::anchor('auth/login', 'ログイン'); ?>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container" role="main">
		<div class="row">
			<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">×</button>
					<p><?php echo implode('</p><p>', (array) Session::get_flash('success')); ?></p>
				</div>
			<?php endif; ?>
			<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger">
					<button class="close" data-dismiss="alert">×</button>
					<p><?php echo implode('</p><p>', (array) Session::get_flash('error')); ?></p>
				</div>
			<?php endif; ?>
			<div class="content">
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
