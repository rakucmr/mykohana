<div id="product">
<h3 id="product_title"><?=$product->title?></h3>

        <?if(count($images) > 0):?>
            <div id="main_icon">
            <?=html::anchor('media/products/'. $product->main_img->name, html::image('media/products/' . $product->main_img->name, array('width' => '200')), array('target' => '_blank'))?>
            </div>
            <div id="product_price">
            <p>Производитель: <?=$product->manufactures->title?></p><p>Наличие: Есть в наличии</p>
            <p><b>Цена <?=$product->price?> руб. </b></p><label>Количество:</label><input style="margin-bottom:20px;" type="count" size="2" value="1"><p><a href="/cart/add/<?=$product->id?>"><img src="/images/tocart.gif" alt="в корзину"></a></p>
            </div>
            <div class="images_icon">
            <?foreach($images as $image):?>
            <? print '<img src="/media/products/'.$image->name.'">';?>
            <?endforeach?>
           </div>
        <?else:?>
        <div id="main_icon">
            <img src="media/img/book.png" />
        </div>
         <?endif?>
</div>
<div id="product_description"><?=$product->description?></div>