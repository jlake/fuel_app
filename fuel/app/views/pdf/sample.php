<h3>PDF作成サンプル</h3>

<?php echo Form::open(array('action' => 'pdf/sample', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal')); ?>
	<div class="form-group">
		<div class="col-md-3 text-right">
			<?php echo Form::label('会社名', 'name', array('class' => 'control-label')); ?>
		</div>
		<div class="col-md-5">
			<?php echo Form::input('name', '', array('class' => 'form-control', 'required' => '1', 'maxlength' => '20')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-3 text-right">
			<?php echo Form::label('金額（税込）', 'amount', array('class' => 'control-label', 'required' => '1', 'maxlength' => '20')); ?>
		</div>
		<div class="col-md-5">
			<?php echo Form::input('amount', '', array('class' => 'form-control')); ?> 
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-3 text-right">
			<?php echo Form::label('消費内容', 'reason', array('class' => 'control-label', 'required' => '1', 'maxlength' => '30')); ?>
		</div>
		<div class="col-md-5">
			<?php echo Form::input('reason', '', array('class' => 'form-control')); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo Form::submit('submit', '作成', array('class' => 'btn btn-primary')); ?>
	</div>
<?php echo Form::close(); ?>