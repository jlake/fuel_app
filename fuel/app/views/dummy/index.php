<h2><?php echo $title ?></h2>
<br>
<?php if ($dummies): ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>カラム1</th>
            <th>カラム2</th>
            <th>Updated At</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($dummies as $dummy): ?>
        <tr>
            <td><?php echo $dummy->inf1; ?></td>
            <td><?php echo $dummy->inf2; ?></td>
            <td><?php echo $dummy->updated_at; ?></td>
            <td>
                <?php echo Html::anchor('dummy/view/'.$dummy->id, '詳細'); ?> |
                <?php echo Html::anchor('dummy/edit/'.$dummy->id, '編集'); ?> |
                <?php echo Html::anchor('dummy/delete/'.$dummy->id, '削除', array('onclick' => "return confirm('削除しますか?')")); ?>
            </td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>

<?php echo $pagination; ?>

<?php else: ?>
<p>No Dummies.</p>

<?php endif; ?><p>
    <?php echo Html::anchor('dummy/create', '新規', array('class' => 'btn btn-success')); ?>

</p>
