<br/>
<p align="right">
<img src="/themes/images/add.png" alt="Добавить" />
<a href="users/add">Добавить</a>
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
		<td>'.HTML::anchor('admin/users/edit/'.$user->id, HTML::image('themes/images/edit.png')).
    HTML::anchor(Request::current()->directory().'/users/delete/'.$user->id, HTML::image('themes/images/delete.png')).'</td>
	</tr>';
}
?>
</table>



