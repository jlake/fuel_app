<h2>ダミーデータ詳細 #<?php echo $dummy->id; ?></h2>

<div class="row">
	<div class="col-md-3 text-right">
		<?php echo Form::label('カラム1', 'inf1'); ?>
	</div>
	<div class="col-md-5">
		<?php echo $dummy->inf1; ?>
	</div>
</div>
<div class="row">
	<div class="col-md-3 text-right">
		<?php echo Form::label('カラム2', 'inf2'); ?>
	</div>
	<div class="col-md-5">
		<?php echo $dummy->inf2; ?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-5">
		<?php echo Html::anchor('dummy/edit/'.$dummy->id, '編集', array('class' => 'btn btn-success')); ?>
		&nbsp;&nbsp;
		<?php echo Html::anchor('dummy', '戻る', array('class' => 'btn btn-default')); ?>
	</div>
</div>
