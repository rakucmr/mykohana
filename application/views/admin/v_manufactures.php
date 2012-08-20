<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>
<a href="/<?=Request::current()->directory()?>/manufactures/add">Добавить</a>
</p>

<table width="100%" class="border">
<tr><th>Название</th><th>Сайт</th><th>Алиас</th><th>Изображение</th><th></th></tr>
<?
foreach($data as $d){

print '<tr><td>'.$d->title.'</td><td>'.$d->url.'</td><td>'.$d->alias.'</td><td><a href="/media/uploads/'.$d->image.'"><img width="100" src="/media/uploads/'.$d->image.'"></a></td><td>'.HTML::anchor('admin/manufactures/edit/'. $d->id, HTML::image('media/img/edit.png')).

    HTML::anchor('admin/manufactures/delete/'. $d->id, HTML::image('media/img/delete.png'))
.'</td></tr>';
}

?>
</table>