<form action="order/payment" method="post">
<ul>
<?
foreach($orders as $order){
print '<li><input type="radio" name="delivery" value="'.$order['delivery_id'].'">'.$order['delivery_title'].'</li>';
}
?>
</ul>
<br>
<input type="submit" name="submit" value="Продолжить">
</form>

