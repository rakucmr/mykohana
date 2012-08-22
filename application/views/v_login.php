<div id="login_form">
	<?if($errors):?>
	<?foreach ($errors as $error):?>
	<div class="error_msg"><?=$error?></div>
	<?endforeach?>
	<?endif?>
	
<?
if(isset($reg_ok)) print $reg_ok;
?>	
	

	<?=Form::open('login')?>
	<table  id="login">
		<tr>
			<td ><?=Form::label('username', 'Логин')?>:</td>
			<td><input name="username" placeholder="Логин" vlaue="<?=$data['username']?>" /></td>
		</tr>
		<tr>
			<td ><?=Form::label('password', 'Пароль')?>:</td>
			<td><input name="password" type="password" placeholder="Пароль" value="<?=$data['password']?>"  /></td>
		</tr>
		<tr>
			<td></td>
			<td "><?=Form::checkbox('remember')?> Запомнить<br/><br/></td>
		</tr>

		<tr>
			<td align="center"><?=Form::submit('submit', 'Войти')?> <a href="/passwordforgot">Забыли пароль?</a></td>
			<td><?=Html::anchor('register', 'Регистрация')?></td>
		</tr>
	</table>
	<?=Form::close()?>
</div>
