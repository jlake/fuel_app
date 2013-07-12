<p>
	<strong>Posted: </strong><?php echo date('jS F, Y', $post->created_at) ?>
	(<?php echo Date::time_ago($post->created_at) ?>)
	by <?php echo $post->user->username ?>
</p>

<p><?php echo nl2br($post->body) ?></p>

<hr />

<h3 id="comments">Comments</h3>

<?php foreach ($post->comments as $comment): ?>

   <p><?php echo Html::anchor($comment->website, $comment->name) ?> said "<?php echo $comment->message ?>"</p>

<?php endforeach; ?>

<h3>Write a comment</h3>
<fieldset>
	<?php echo Form::open('blog/comment/'.$post->slug) ?>

	<div class="row">
	   <label for="name">Name:</label>
	   <div class="input"><?php echo Form::input('name'); ?></div>
	</div>

	<div class="row">
	   <label for="website">Website:</label>
	   <div class="input"><?php echo Form::input('website'); ?></div>
	</div>

	<div class="row">
	   <label for="email">Email:</label>
	   <div class="input"><?php echo Form::input('email'); ?></div>
	</div>

	<div class="row">
	   <label for="message">Comment:</label>
	   <div class="input"><?php echo Form::textarea('message'); ?></div>
	</div>

	<div class="row">
		<?php echo Form::submit('submit', 'Send', array('class' => 'btn btn-primary')); ?>
	</div>
</fieldset>

<?php echo Form::close() ?>
