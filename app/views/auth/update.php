<p><div>ユーザー情報</div><div><?php echo $errmsg ?></div><form action="<?php echo Uri::create('/auth/updated'); ?>" method="POST"><!-- CSRF対策 --><input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="<?php echo \Security::fetch_token();?>" /><div>ユーザー名：<?php echo $username ?><input type="hidden" name="username" value="<?php echo $username ?>" /></div><div>旧パスワード：<input type="password" name="old_password" value="" /></div><div>新パスワード：<input type="password" name="password" value="" /></div><div>Ｅメール&nbsp;&nbsp;&nbsp;：<input type="text" name="email" value="<?php echo $email ?>" /></div><input type="submit" value="ユーザー更新" class="btn" /></form></p><p><a href="<?php echo Uri::create('/auth/login'); ?>">トップへ戻る</a></p>