<h3>Select</h3>
<?php if (isset($html_error)): ?>
	<?php echo $html_error; ?>
<?php endif; ?>

<?php echo Form::open(array('action' => 'files/upload', 'enctype' => 'multipart/form-data')); ?>
	<div>
		<?php echo Form::label('ファイル', 'uploadfile'); ?>
	</div>
	<div>
		<?php echo Form::file('uploadfile'); ?>
	</div>
	<div>
		<?php echo Form::submit('submit', '送信'); ?>
	</div>
<?php echo Form::close(); ?>