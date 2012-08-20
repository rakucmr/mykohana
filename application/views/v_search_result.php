<?
if(isset($noresult)){
  print $noresult;
  }

foreach($products as $product){
	$str = '<table width="100%" class="border">';
	$str.='<tr><td colspan="2"><a href="/products/product/'.$product->id.'">'.$product->title.'</a></td></tr>';
	$str.='<tr><td ><a href="/media/uploads/'.$product->main_img->name.'"><img width="150" src="/media/uploads/'.$product->main_img->name.'"></a></td><td >'.$product->description.'</td></tr>';
	$str.='<tr><td colspan="2" style="color:red">Цена '.$product->price.' руб. <a href="/cart/add/'.$product->id.'"><img src="/images/tocart.gif" alt="в корзину"></a></td></tr>';
	$str.='</table><br><br>';
	print $str;

}

?>