<br/>
<p align="right">
<img src="/themes/images/add.png" alt="" />
<a href="countries/add">Добавить</a>
</p>

<table class="border">
<?
$i = 0;
foreach($countries as $c){
$i++;
print '<tr><td>'.$i.'</td><td>'.$c->country_name.'</td><td>'.$c->iso_code_2.'</td><td>'.$c->iso_code_3.'</td>
	<td>'.HTML::anchor('admin/countries/edit/'. $c->country_id, HTML::image('themes/images/edit.png')).
	HTML::anchor('admin/countries/delete/'. $c->country_id, HTML::image('themes/images/delete.png')).'
	</td>
</tr>';
}
?>
</table>

<?=$pagination?>
