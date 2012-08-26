<?
$total_count = 0;
$total_price = 0;

  if(isset($carts)){
    foreach($carts as $cart){

      $total_count = $total_count+=$p_session[$cart->id];
      $total_price = $total_price+=$p_session[$cart->id]*$cart->price;
    }
?>
<center>
</br></br>
<font size="6"><?=$payment->payment_title?></font>
</br></br>
<font size="3" color="red">
ВНИМАНИЕ!<br />
Сумма платежа указана с учётом комиссии платёжной системы Яндекс (+0.5%)</font><br />
<font size="2"><b>Итого к оплате:</b> <?=$total_price." руб. (сумма заказа) + ".round($total_price*0.00502333333,2)." руб. (комиссия Яндекс) = ".round($total_price+$total_price*0.00502333333,2)." руб." ?></font>
</br></br>
<iframe frameborder="0" allowtransparency="true" scrolling="no"
	src="https://money.yandex.ru/embed/shop.xml?uid=<?=$payment->kashelyok?>&amp;writer=seller&amp;targets=%d0%9e%d0%bf%d0%bb%d0%b0%d1%82%d0%b0+%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7%d0%b0+%e2%84%96+<?//$order_id ?>&amp;default-sum=<?=round($total_price+$total_price*0.00502333333,2) ?>&amp;button-text=01&amp;hint="
	scrolling="no" width="450" frameborder="0" height="163">
</iframe>
<p><i>Если у Вас возникли вопросы, телефон для справок: 88008580</i></p>
</br></br>
</center>

<? } ?>
