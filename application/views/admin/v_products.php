<br/>
<p align="right">
<?=HTML::image('themes/images/add.png', array('valign' => 'top'))?>

<?=HTML::anchor(Request::current()->directory().'/products/add', 'Добавить')?>
</p>
<table width="100%" class="border">
    <thead>
        <tr height="30">
            <th>N</th><th>Категория</th><th>Изображения</th><th>Название</th><th>Цена</th><th>Функции</th>
        </tr>
    </thead>
<? 
$i=0;
foreach ($products as  $product):
$i++;
?>
<tr>
<td><?=$i?></td>
<td><?//=$product->category_id?></td>
<td><a href="/media/uploads/<?=$product->main_img->name?>"><img width="120" src="/media/products/<?=$product->main_img->name?>"></a></td>
    <td ><?=HTML::anchor('admin/products/edit/'. $product->id, $product->title)?></td>
    <td width="100" align="center"><?=$product->price?></td>
    <td width="100" align="center">
    <?=HTML::anchor('admin/products/edit/'. $product->id, HTML::image('themes/images/edit.png'))?>

    <?=HTML::anchor('admin/products/delete/'. $product->id, HTML::image('themes/images/delete.png'))?>

    </td>
</tr>
<? endforeach?>

</table>

<?=$pagination?>