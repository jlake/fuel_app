<div>ユーザー情報</div><div><?php echo $errmsg ?></div><form action="<?php echo Uri::create('/auth/created');?>" method="POST"><!-- CSRF対策 --><input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="<?php echo \Security::fetch_token();?>" /><div>ユーザー名：<input type="text" name="username" value="" /></div><div>パスワード：<input type="password" name="password" value="" /></div><div>Ｅメール&nbsp;&nbsp;&nbsp;：<input type="text" name="email" value="" /></div><input type="submit" value="ユーザー作成" /></form><p><a href="<?php echo Uri::create('/auth/login'); ?>">トップへ戻る</a></p>