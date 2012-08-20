<?
if($errors){
	foreach($errors as $error){
		if(is_array($error)){
		foreach($error as $e){print '<div class="error_msg">'.$e.'</div>';}
		}
		else {print '<div class="error_msg">'.$error.'</div>';}
	}
}
?>

<form method="post" action="">
Группа пользовательей
<select  name="role_id">
<option value="">Выверите группу</option>
</select>

<ul ><li><span class="required">*</span> Логин:<input type="text" name="username" value="<?=$data['username']?>"></li>
<li><span class="required">*</span> Проль <input type="password" name="password" ></li>
<li><span class="required">*</span> Павторить пароль <input type="password" name="password_confirm"></li>
<li>Имя Фамилия <input type="text" name="first_name" value="<?=$data['first_name']?>"></li>
<li><span class="required">*</span> Email <input type="text" name="email" value="<?=$data['email']?>"></li>
<li><span class="required">*</span> Телефон:<input type="text" name="phone" value="<?=$data['phone']?>"></li>
<li>Статус <input type="checkbox" name="status" value="1"></li>
<li><input type="submit" name="submit"></li>
</ul>
</form>