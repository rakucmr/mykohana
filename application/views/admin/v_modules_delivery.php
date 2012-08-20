<p><a href="/<?=Request::current()->directory()?>/<?=Request::current()->controller()?>"><img src="/images/add.png">Добавить</a></p>

<table class="border">
<?
foreach($delivery as $d){
	print '<tr><td>'.$d->delivery_id.'</td><td>'.$d->delivery_title.'</td><td><a href="/admin/modules/edit_delivery/'.$d->delivery_id.'"><img src="/images/edit.png"></a><a href="/admin/modules/delete_delivery/'.$d->delivery_id.'"><img src="/images/delete.png"></a></td></tr>';
}

?>
</table>