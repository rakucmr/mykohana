<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<a href="/<?=Request::current()->directory()?>/articles/add">Добавить</a>
</p>
<table width="100%"   class="border">
    <thead>
        <tr height="30">
            <th>Название</th><th>Алиас</th><th>Функции</th>
        </tr>
    </thead>
<? foreach ($articles as  $article):?>
<tr>
    <td><?=HTML::anchor('admin/pages/edit/'. $article->article_id, $article->article_title)?></td>
	<td><?=$article->article_alias ?></td>
    <td width="100" align="center">
    <?=HTML::anchor('admin/articles/edit/'. $article->article_id, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/articles/delete/'. $article->article_id, HTML::image('media/img/delete.png'))?>

    </td>
</tr>
<? endforeach?>

</table>