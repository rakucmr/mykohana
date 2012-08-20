<div id="manufactures" style="padding:5px;">
<ul>
<?
print '<li><a href="/manufactures/manufacture/'.$manufacture['id'].'">'.$manufacture['title'].'</a></li>';
if(!empty($manufacture['image'])){
print '<li><a href="/manufactures/manufacture/'.$manufacture['id'].'"><img src="/media/uploads/'.$manufacture['image'].'"></a></a></li>';

}
print '<li><h3>Сайт производителя</h3> <a href="http://'.$manufacture['url'].'">'.$manufacture['url'].'</a></li>';
?>
</ul>
</div>
