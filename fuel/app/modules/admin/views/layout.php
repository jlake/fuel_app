<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<?php echo Asset::css(array(
		'bootstrap.min.css',
		'bootstrap-datepicker.min.css',
		'AdminLTE.min.css',
		'skins/skin-blue.min.css',
		'admin.css',
	)); ?>
	<?php echo Asset::js(array(
		'jquery-3.1.1.min.js',
		'bootstrap.min.js',
		'bootstrap-datepicker.min.js',
		'bootstrap-datepicker.ja.min.js',
		'app.js',
	)); ?>
</head>

<body class="skin-blue sidebar-mini">
	<div class="wrapper">

	  <!-- Main Header -->
	  <header class="main-header">

		<!-- Logo -->
		<a href="<?php echo Uri::create('/admin/'); ?>" class="logo">
		  <!-- mini logo for sidebar mini 50x50 pixels -->
		  <span class="logo-mini">管理</span>
		  <!-- logo for regular state and mobile devices -->
		  <span class="logo-lg">My Site 管理画面</span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
		  <!-- Sidebar toggle button-->
		  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">メニュー表示・非表示</span>
		  </a>
		  <!-- Navbar Right Menu -->
		  <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			  <!-- User Account Menu -->
			  <li class="dropdown user user-menu">
				<!-- Menu Toggle Button -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <!-- The user image in the navbar-->
				  <?php echo Asset::img('default-user-avatar.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
				  <!-- hidden-xs hides the username on small devices so only the image appears. -->
				  <span class="hidden-xs">{{ adminUser.name|e }}</span>
				</a>
				<ul class="dropdown-menu">
				  <!-- The user image in the menu -->
				  <li class="user-header">
				    <?php echo Asset::img('default-user-avatar.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
					<p>
					  {{ adminUser.name|e }} - {{ adminRoles[adminUser.role]|e }}
					  <small>ログイン日時: {{ loginAt|e }} </small>
					</p>
				  </li>
				  <!-- Menu Footer-->
				  <li class="user-footer">
					<div class="pull-right">
						<?php echo Html::anchor('admin/auth/logout', 'ログアウト', array('class' => 'btn btn-danger btn-flat')); ?>
					</div>
				  </li>
				</ul>
			  </li>
			</ul>
		  </div>
		</nav>
	  </header>
	  <!-- Left side column. contains the logo and sidebar -->
	  <aside class="main-sidebar">

		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

		  <!-- Sidebar Menu -->
		  <ul class="sidebar-menu">
			<li class="treeview">

			<li class="treeview">
			  <a href="#"><i class="fa fa-link"></i> <span>管理者情報</span> <i class="fa fa-angle-left pull-right"></i></a>
			  <ul class="treeview-menu">
				<li><?php echo Html::anchor('admin/user/list', '<i class="fa fa-circle-o"></i> 管理者一覧'); ?></li>
				<li><?php echo Html::anchor('admin/user/add', '<i class="fa fa-circle-o"></i> 管理者追加'); ?></li>
			  </ul>
			</li>

			<li class="treeview">
			  <a href="#"><i class="fa fa-link"></i> <span>その他</span> <i class="fa fa-angle-left pull-right"></i></a>
			  <ul class="treeview-menu">
				<li><?php echo Html::anchor('admin/mainte/', '<i class="fa fa-circle-o"></i> メンテナンス'); ?></li>
			  </ul>
			</li>

		  </ul><!-- /.sidebar-menu -->

		</section>
		<!-- /.sidebar -->
	  </aside>

	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
		<section class="content-header">
			<h1><?php echo $title; ?></h1>
		</section>

		<section class="content">
			<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">×</button>
					<p><?php echo implode('</p><p>', (array) Session::get_flash('success')); ?></p>
				</div>
			<?php endif; ?>
			<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-error">
					<button class="close" data-dismiss="alert">×</button>
					<p><?php echo implode('</p><p>', (array) Session::get_flash('error')); ?></p>
				</div>
			<?php endif; ?>
			<?php echo $content; ?>
		</section>

	  </div><!-- /.content-wrapper -->

	  <!-- Main Footer -->
	  <footer class="main-footer">
		<!-- Default to the left -->
		<strong>Copyright &copy; 2017 <a href="http://adore.bz/">Adore</a>.</strong> All rights reserved.
	  </footer>

	</div><!-- ./wrapper -->

	<!-- Menu Toggle Script -->
	<script>
	$(function () {
		$('.treeview-menu a').filter(function() {
			var pathname = window.location.pathname;
			pathname = pathname.replace(/\/detail$/, '/list');
			return $(this).attr('href') == pathname;
		}).addClass('active').closest('.treeview').addClass('active');
	});
	</script>

  </body>
</html>
