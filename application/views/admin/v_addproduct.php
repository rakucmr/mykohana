<!-- TinyMCE -->
<script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

	});
</script>
<!-- /TinyMCE -->



<?
if($errors){
	foreach($errors as $error){
	print '<div class="error_msg">'.$error.'</div>';
	}
}
?>

<form action="" method="post" enctype="multipart/form-data">
<table class="border">
	<tr>
		<td colspan="2">
		<select name="cat_id">
		<option>--Выберите каталог товаров--</option>
		<?foreach ($cats as $cat):?>
        <option value="<?=$cat->id?>">
            <?=str_repeat('&nbsp;', 2 * $cat->lvl) .$cat->category_title ?>
        </option>
		<?endforeach?>
   	</select>

    <select name="manufacture_id">
    <option value="">--Выберите производителя--</option>
    <?foreach($manufactures as $m):?>
    <option value="<?=$m->id?>"><?=$m->title?></option>
    <?endforeach?>
    </select>
   Есть в наличии <input type="radio" name="nalichi" value="Есть в наличии" />
        Нет в наличии<input type="radio" name="nalichi" value="Нет в наличии" />
		</td>
	</tr>
	<tr><td colspan="2">
	<p>Связи</p> 
	<div style="400px; height:100px; overflow:auto">
	<?foreach ($cats as $cat):?>
<? print '<input type="checkbox" name="pc_id" value="'.$cat->id.'">'.$cat->category_title.'<br>';?>
    <?endforeach?>
</div></td></tr>
	<tr><td>Название: <br><input type="text"  name="title" value="<?=$data['title'];?>"></td></tr>
	<tr><td>Описание: <br><textarea id="elm1" name="description"><?=$data['description'];?></textarea></td></tr>
	<tr><td>Описание: <br><textarea name="full_description"></textarea></td></tr>
	<tr><td>Цена: <br><input type="text" name="price" value="<?=$data['price'];?>"></td></tr>
	<tr><td>Загрузить изображения: <br><input type="file" id="multi" name="images[]"></td></tr>
	<tr><td colspan="2">Статус: <input type="checkbox" name="status" value="1" checked="checked"></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value=" Сохранить "></td></tr>
</table>

	<!-- Some integration calls -->
		<a href="javascript:;" onclick="tinyMCE.get('elm1').show();return false;">[Show]</a>
		<a href="javascript:;" onclick="tinyMCE.get('elm1').hide();return false;">[Hide]</a>
		<br />
</form>