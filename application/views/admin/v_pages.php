<br/>

<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<a href="/<?=Request::current()->directory()?>/pages/add">Добавить</a>
</p>
<table width="100%"   class="border">
    <thead>
        <tr height="30">
            <th>Название</th><th>Алиас</th><th>Функции</th>
        </tr>
    </thead>
<? foreach ($pages as  $page):?>
<tr>
    <td><?=HTML::anchor('admin/pages/edit/'. $page->page_id, $page->page_title)?></td>
	<td><?=$page->page_alias ?></td>
    <td width="100" align="center">
    <?=HTML::anchor('admin/pages/edit/'. $page->page_id, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/pages/delete/'. $page->page_id, HTML::image('media/img/delete.png'))?>

    </td>
</tr>
<? endforeach?>

</table>