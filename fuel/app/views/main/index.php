	<h2>Top Page</h2>

	<div class="row">

		<div class="large-4 columns">
			<div class="panel">
				<h5>Site Links</h5>
				<ul>
					<li><?php echo Html::anchor('auth/login', 'Auth') ?></li>
					<li><?php echo Html::anchor('blog', 'Blog') ?></li>
					<li><?php echo Html::anchor('dummy', 'Dummy') ?></li>
				</ul>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="panel">
				<h5>Api Test</h5>
				<ul>
					<li><?php echo Html::anchor('api/dummy/1.json', 'Json') ?></li>
					<li><?php echo Html::anchor('api/dummy/1.xml', 'Xml') ?></li>
					<li><?php echo Html::anchor('api/dummy/1.csv', 'csv') ?></li>
				</ul>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="panel">
				<h5>Admin Links</h5>
				<ul>
					<li><?php echo Html::anchor('admin', 'Admin') ?></li>
				</ul>
			</div>
		</div>

	</div>
		
