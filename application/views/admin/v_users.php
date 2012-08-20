<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<?=HTML::anchor(Request::current()->directory().'/users/add', 'Добавить')?>
</p>

<table class="border">
<th>N</th><th>Ползователь</th><th>Имя фамилия</th><th>Email</th><th>Роль</th><th>Статус</th><th>функцыи</th>
<?
$i=0;
foreach($users as $user){
$i++;
	print '<tr>
		<td>'.$i.'</td>
		<td>'.$user->username.'</td>
		<td>'.$user->first_name.'</td>
		<td>'.$user->email.'</td><td>';

		foreach($user->roles->find_all() as $role){
        print $role->description;
        }
	print	'</td>
		<td>'.$user->status.'</td>
		<td>'.HTML::anchor('admin/users/edit/'.$user->id, HTML::image('media/img/edit.png')).
    HTML::anchor(Request::current()->directory().'/users/delete/'.$user->id, HTML::image('media/img/delete.png')).'</td>
	</tr>';
}
?>
</table>



