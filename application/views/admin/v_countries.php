<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>
<a href="/<?=Request::current()->directory()?>/countries/add">Добавить</a>
</p>

<table class="border">
<?
$i = 0;
foreach($countries as $c){
$i++;
print '<tr><td>'.$i.'</td><td>'.$c->country_name.'</td><td>'.$c->iso_code_2.'</td><td>'.$c->iso_code_3.'</td>
	<td>'.HTML::anchor('admin/countries/edit/'. $c->country_id, HTML::image('media/img/edit.png')).
	HTML::anchor('admin/countries/delete/'. $c->country_id, HTML::image('media/img/delete.png')).'
	</td>
</tr>';
}
?>
</table>

<?=$pagination?>
