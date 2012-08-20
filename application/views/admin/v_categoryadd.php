<?
if($errors){
	foreach($errors as $error){
	print '<div class="error_msg">'.$error.'</div>';
	}
}
?>
<br/>

<form action="" method="post">
<table>
<tr><td><select name="cat_id">
    <option value="">
        --Выберите категорию--
    </option>
    <?foreach ($categories as $cat):?>
        <option value="<?=$cat->id?>">
            <?=str_repeat('&nbsp;', 2 * $cat->lvl) .$cat->category_title ?>
        </option>
    <?endforeach?>
</select></td></tr>
	<tr>
	<td><input type="text" size="30" name="category_title"></td>
	</tr>
	<tr>
	<td><textarea name="category_description"></textarea></td>
	</tr>
	<tr>
	<td><input type="file" name="category_image"></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value=" Сохранить "></td>
	</tr>
</table>
</form>