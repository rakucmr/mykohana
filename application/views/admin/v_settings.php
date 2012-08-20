<ul>
<?
foreach($settings as $s){
print '<li><p>Название сайта'.$s->title.'</p></li>';
print '<li><p>Описание сайта'.$s->meta_description.'</p></li>';
print '<li><p>Ключевые слова'.$s->meta_keywords.'</p></li>';
}
?>
</ul>

<form action="" method="post">
<table class="border" >
<tr><td>Название сайта <input type="text"></td></tr>
<tr><td>Описание сайта <input type="text"></td></tr>
<tr><td>Ключевые слова <input type="text"></td></tr>
<tr><td><input type="submit" value=" Сохранить " ></td></tr>
</table>
</form>