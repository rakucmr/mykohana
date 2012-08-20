<p><a href="#"><img src="/images/add.png">Добавить</a></p>

<table class="border">
<?
foreach($payments as $p){
	print '<tr><td>'.$p->payment_id.'</td><td>'.$p->payment_title.'</td><td><a href="/admin/modules/edit_payment/'.$p->payment_id.'"><img src="/images/edit.png"></a><a href="/admin/modules/delete_payment/'.$p->payment_id.'"><img src="/images/delete.png"></a></td></tr>';
}

?>
</table>