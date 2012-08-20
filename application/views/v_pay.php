<form action="/payments/pay/" method="post">

<?
foreach($payment as $p){

print '<p>'.$p.'</p>';
}
?>

<input type="submit" name="submit" value="Продолжить">
</form>

<center>
</br></br>
<font size="6">Оплата Яндекс.Деньги</font>
</br></br>
<font size="3" color="red">
ВНИМАНИЕ!<br />
Сумма платежа указана с учётом комиссии платёжной системы Яндекс (+0.5%)</font><br />
<font size="2"><b>Итого к оплате:</b> <?php echo $total_price." руб. (сумма заказа) + ".round($total_price*0.00502333333,2)." руб. (комиссия Яндекс) = ".round($total_price+$total_price*0.00502333333,2)." руб." ?>
</br></br>
<i>Если у Вас возникли вопросы, телефон для справок: <?php echo $bankuser ?></i></font>
</br></br>
<iframe frameborder="0" allowtransparency="true" scrolling="no"
	src="https://money.yandex.ru/embed/shop.xml?uid=<?php echo $bank ?>&amp;writer=seller&amp;targets=%d0%9e%d0%bf%d0%bb%d0%b0%d1%82%d0%b0+%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7%d0%b0+%e2%84%96+<?php echo $order_id ?>&amp;default-sum=<?php echo round($amount+$amount*0.00502333333,2) ?>&amp;button-text=01&amp;hint=" 
	scrolling="no" width="450" frameborder="0" height="163">
</iframe>
</br></br>
<font size="3"><?php echo $inn ?> - <a href="<?php echo $rs ?>"><?php echo $rs ?></a></font>
</center>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter13218340 = new Ya.Metrika({id:13218340, enableAll: true});
        } catch(e) {}
    });
    
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
