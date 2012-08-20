<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<?=HTML::anchor(Request::current()->directory().'/customers/add', 'Добавить')?>
</p>

<table class="border">
<th>N</th><th>Ползователь</th><th>Имя фамилия</th><th>Email</th><th>Роль</th><th>Статус</th><th>функцыи</th>
<?
$i=0;
foreach($customers as $c){
$i++;
	print '<tr>
		<td>'.$i.'</td>
		<td>'.$c->username.'</td>
		<td>'.$c->first_name.'</td>
		<td>'.$c->email.'</td><td >';

		foreach($c->roles->find_all() as $role){
      print $role->description;
        }
	 //print_r($c);  
	   
	print	'</td>
		<td>'.$c->status.'</td>
		<td>'.HTML::anchor('admin/customers/edit/'.$c->id, HTML::image('media/img/edit.png')).
    HTML::anchor(Request::current()->directory().'/customers/delete/'.$c->id, HTML::image('media/img/delete.png')).'</td>
	</tr>';
}
?>
</table>



