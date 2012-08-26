<br/>
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

<form id="register" action="" method="POST">
<table align="center"  width="100%" cellspacing="1" class="border">
  <tr>
    <td>Логин: <span class="required">*</span></td>
    <td><input id="username" name="username" placeholder="Логин" value="<?=$data['username']?>" /> <span id="nameInfo"></span></td>
  </tr>
  <tr>
    <td>Пароль: <span class="required">*</span></td>
    <td><input type="password" id="password" placeholder="Пароль" name="password" value="<?=$data['password']?>" /> <span id="pass1Info"></span></td>
  </tr>
  <tr>
    <td>Повтарите пароль : <span class="required">*</span></td>
    <td><input type="password" name="password_confirm" placeholder="Повторите пароль" value="<?=$data['password_confirm']?>" /> <span id="pass2Info"></span></td>
  </tr>
 <tr>
     <td>Компания:</td>
     <td><input type="text" name="company" value="" /></td>
 </tr>

  <tr>
    <td>ИФО: <span class="required">*</span></td>
    <td><input name="first_name" placeholder="Ваш ИФО" value=" <?=$data['first_name']?>" /></td>
  </tr>
  <tr>
    <td>Email:: <span class="required">*</span></td>
    <td><input type="email" name="email" placeholder="Ваш email" value="<?=$data['email']?>" /> <span id="emailInfo"></span></td>
  </tr>
  <tr>
    <td>Номер телефона: <span class="required">*</span></td>
    <td><input name="phone" placeholder="Номер телефона" value="<?=$data['phone']?>" /></td>
  </tr>
  <tr>
    <td><span class="required">*</span> Адрес:</td>

    <td><input type="text" name="address" placeholder="Ваш реальный адрес" value="<?=$data['address']?>" /></td>
  </tr>
  <tr>
    <td><span class="required">*</span> Страна:</td>
    <td><select name="country_id">
               <option value=""> --- выберите регион --- </option>
			  <?
			  foreach($country as $c){
			  if($c->country_id == 176){

				print '<option selected="selected" value="'.$c->country_id.'">'.$c->country_name.'</option>';
				}
				else  {print '<option value="'.$c->country_id.'">'.$c->country_name.'</option>';}
			  }
			  ?>
			</select>
    </td>
  </tr>

  <tr>
    <td><span class="required">*</span> Регион:</td>
     <td>
 		  <select name="zone_id">
              <option value="">-- Выберите регион-- </option>
			  <?
 			  foreach($zones as $z){
			  print '<option value="'.$z->zone_id.'">'.$z->name.'</option>';
			  }
			  ?>
			</select>
             </td>
  </tr>
        <tr>
	  <td>
      Введите код указанный на рисунке:
	  </td>
      <td><?=$captcha_image?><br /><input name="captcha" /></td>
      </tr>
  <tr>
        <td colspan="2" align="center">
		Я прочитал <a  href="" alt="Политика Безопасности"><b>Политика Безопасности</b></a> и согласен с условиями  <input type="checkbox" name="agree" value="1" />

		</td>
    </tr>


   <tr>
    <td></td>
    <td><input type="submit" id="submit" name="submit" value=" Регистрация " /></td>
  </tr>
</table>
</form>