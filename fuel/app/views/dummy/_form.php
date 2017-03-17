<?php echo Form::open(array('action' => '', 'class' => 'form-horizontal', 'role' => 'form')); ?>
	<div class="form-group">
		<div class="col-md-3 text-right">
			<?php echo Form::label('Inf1', 'inf1', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-5">
			<?php echo Form::input('inf1', Input::post('inf1', isset($dummy) ? $dummy->inf1 : ''), array('class' => 'form-control')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-3 text-right">
			<?php echo Form::label('Inf2', 'inf2', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-5">
			<?php echo Form::textarea('inf2', Input::post('inf2', isset($dummy) ? $dummy->inf2 : ''), array('class' => 'form-control', 'rows' => 8, 'cols' => 50)); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-3">
		</div>
		<div class="col-md-5">
			<?php echo Form::submit('submit', '保存', array('class' => 'btn btn-success')); ?>
			&nbsp;&nbsp;
			<?php echo Html::anchor('dummy', '戻る', array('class' => 'btn btn-default')); ?>
		</div>
	</div>
<?php echo Form::close(); ?>
