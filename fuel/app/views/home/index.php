<div class="jumbotron">
	<h2>シマッターHP</h2>
	<p>powered by <a href="https://fuelphp.com/" class="pf-green" target="_blank">FuelPHP Framework</a></p>
	<p>サイト作成中 ... ...</p>
	<p><?php echo Html::anchor('admin', '管理ページへ', array('class' => 'btn btn-success btn-lg', 'target' => '_blank')) ?></p>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		ユーザ認証サンプル
	</div>
	<div class="panel-body">
		<?php if(Auth::check()): ?>
			<p>
				<?php echo Html::anchor('auth/create', '新規アカウント登録', array('class' => 'btn btn-success btn-lg')) ?>
				<span>&nbsp;</span>
				<?php echo Html::anchor('auth/update', 'アカウント情報更新', array('class' => 'btn btn-primary btn-lg')) ?>
				<span>&nbsp;</span>
				<?php echo Html::anchor('auth/remove', 'アカウント削除', array('class' => 'btn btn-danger btn-lg')) ?>
				<span>&nbsp;</span>
				<?php echo Html::anchor('auth/login', 'ログアウト', array('class' => 'btn btn-warning btn-lg')) ?>
			</p>
		<?php else: ?>
			<p><?php echo Html::anchor('auth/logout', 'ログイン', array('class' => 'btn btn-success btn-lg')) ?></p>
		<?php endif; ?>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		APIサンプル
	</div>
	<div class="panel-body">
		<?php echo Html::anchor('api/sample/dummy/1.json', 'JSON', array('class' => 'btn btn-default btn-lg', 'target' => '_blank')) ?>
		<span>&nbsp;</span>
		<?php echo Html::anchor('api/sample/dummy/1.xml', 'XML', array('class' => 'btn btn-default btn-lg', 'target' => '_blank')) ?>
		<span>&nbsp;</span>
		<?php echo Html::anchor('api/sample/dummy/1.csv', 'CSV', array('class' => 'btn btn-default btn-lg', 'target' => '_blank')) ?>
	</div>
</div>

