<h3>アカウント情報更新</h3><form id="formUpdate" class="form-horizontal" role="form" action="<?php echo Uri::create('/auth/updated');?>" method="POST">	<!-- CSRF対策 -->	<input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="<?php echo \Security::fetch_token();?>" />	<div class="form-group">		<label class="col-md-3 control-label">ユーザー名:</label>		<div class="col-md-5">			<input class="form-control" type="text" name="username" value="<?php echo $username ?>">		</div>	</div>	<div class="form-group">		<label class="col-md-3 control-label">Ｅメール:</label>		<div class="col-md-5">			<input class="form-control" type="text" name="email" value="<?php echo $email ?>">		</div>	</div>	<div class="form-group">		<label class="col-md-3 control-label">旧パスワード:</label>		<div class="col-md-5">			<input class="form-control" type="password" name="old_password" value="">		</div>	</div>	<div class="form-group">		<label class="col-md-3 control-label">パスワード:</label>		<div class="col-md-5">			<input class="form-control" type="password" name="password" value="">		</div>	</div>	<div class="form-group">		<label class="col-md-3 control-label"></label>		<div class="col-md-5">			<input type="submit" class="btn btn-primary" value="更新">		</div>	</div></form>