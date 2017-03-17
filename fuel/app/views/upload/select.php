<h3>ファイル選択</h3>

<?php echo Form::open(array('action' => 'upload/uploaded', 'enctype' => 'multipart/form-data', 'class' => 'form-inline')); ?>
	<div class="form-group">
		<div class="col-md-8">
			<?php echo Form::file('uploadfile', array('class' => 'form-control')); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo Form::submit('submit', '送信', array('class' => 'btn btn-primary')); ?>
	</div>
<?php echo Form::close(); ?>