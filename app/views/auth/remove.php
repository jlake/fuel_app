<p><div>ユーザー情報</div><div><?php echo $errmsg ?></div><form action="<?php echo Uri::create('/auth/removed'); ?>" method="POST"><!-- CSRF対策 --><input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="<?php echo \Security::fetch_token();?>" /><div>ユーザー名：<?php echo $username ?><input type="hidden" name="username" value="<?php echo $username ?>" /></div>削除しますか？<input type="submit" value="ユーザー削除" class="btn" /></form></p><p><a href="<?php echo Uri::create('/auth/login'); ?>">トップへ戻る</a></p>