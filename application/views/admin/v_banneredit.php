<?
if($errors){
	foreach($errors as $error){
	print '<div class="error_msg">'.$error.'</div>';
	}
}
?>
<br/>

<form action="" method="post" enctype="multipart/form-data">
<table>
	<tr>
	<td>Название</td><td><input type="text" size="30" name="banner_title" value="<?=$data['banner_title']?>"></td>
	</tr>
	<tr>
	<td>Ссылка</td><td><input type="text" size="30" name="banner_url" value="<?=$data['banner_url']?>"></td>
	</tr>
	<tr>
	<td>Изображение</td><td><input type="file" name="image"></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value=" Сохранить "></td>
	</tr>
</table>
</form>