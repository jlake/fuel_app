<h2>Viewing #<?php echo $dummy->id; ?></h2>

<p>
	<strong>Col1:</strong>
	<?php echo $dummy->col1; ?></p>
<p>
	<strong>Col2:</strong>
	<?php echo $dummy->col2; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $dummy->user_id; ?></p>

<?php echo Html::anchor('dummy/edit/'.$dummy->id, 'Edit'); ?> |
<?php echo Html::anchor('dummy', 'Back'); ?>