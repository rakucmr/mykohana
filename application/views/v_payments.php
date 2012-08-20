<form action="/payments/pay/" method="post">
<ul>
<?
foreach($payments as $payment){
print '<li><input type="radio" name="payment" value="'.$payment['payment_id'].'">'.$payment['payment_title'].'</li>';
}
?>
</ul>
<br>
<input type="submit" name="submit" value="Продолжить">
</form>
