<h3>アップロード完了</h3>
<div>
<?php foreach($files as $file): ?>
	<img src="<?php echo $url_prefix.'/'.$file['name']; ?>" style="max-width:640px;" />
	<br />
<?php endforeach; ?>
</div>
	
<div>
	アップロードファイル情報(DEBUG用):
	<pre><?php print_r($files); ?></pre>
</div>
