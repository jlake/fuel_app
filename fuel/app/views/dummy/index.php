<h2>Listing Dummies</h2>
<br>
<?php if ($dummies): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Col1</th>
			<th>Col2</th>
			<th>User id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($dummies as $dummy): ?>
		<tr>
			<td><?php echo $dummy->col1; ?></td>
			<td><?php echo $dummy->col2; ?></td>
			<td><?php echo $dummy->user_id; ?></td>
			<td>
				<?php echo Html::anchor('dummy/view/'.$dummy->id, 'View'); ?> |
				<?php echo Html::anchor('dummy/edit/'.$dummy->id, 'Edit'); ?> |
				<?php echo Html::anchor('dummy/delete/'.$dummy->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php echo $pagination; ?>

<?php else: ?>
<p>No Dummies.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('dummy/create', 'Add new Dummy', array('class' => 'btn btn-success')); ?>

</p>
