<h2>Editing Dummy</h2>
<br>

<?php echo render('dummy/_form'); ?>
<p>
	<?php echo Html::anchor('dummy/view/'.$dummy->id, 'View'); ?> |
	<?php echo Html::anchor('dummy', 'Back'); ?></p>
