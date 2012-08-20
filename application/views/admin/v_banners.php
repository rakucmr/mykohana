<br/>

<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<a href="/<?=Request::current()->directory()?>/banners/add">Добавить</a>
</p>
<table width="100%"   class="border">
    <thead>
        <tr height="30">
            <th>Название</th><th>Ссылка</th><th>Изображение</th><th>Функции</th>
        </tr>
    </thead>
<? foreach ($banners as  $b):?>
<tr>
    <td><?=HTML::anchor('admin/banners/edit/'. $b->banner_id, $b->banner_title)?></td>
	<td><?=$b->banner_url?></td>
	<td><?=$b->banner_image?></td>
    <td width="100" align="center">
    <?=HTML::anchor('admin/banners/edit/'. $b->banner_id, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/banners/delete/'. $b->banner_id, HTML::image('media/img/delete.png'))?>

    </td>
</tr>
<? endforeach?>

</table>