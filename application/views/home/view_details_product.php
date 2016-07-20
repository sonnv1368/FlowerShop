<div class="product-detail">
    <?php foreach($_detail as $_view):?>
            <img id="zoom_01"  src="<?= $_view->anh?>" title="<?=$_view->tensp;?>" alt="<?=$_view->tensp;?>" data-zoom-image="<?= $_view->anh?>"/>
            <p class="name"><?=$_view->tensp?></p>
            <p class="dt-price">Giá bán: <?=number_format($_view->giaban);?></p>
            <p>Số lượng: 
                <?php if($_view->soluong > 0):
                        echo 'Còn hàng';
                      else:
                        echo '<font style="color:red;">Hết hàng</font>';
                      endif;
                ?>
            </p>
            <!--<form action="<?=base_url()?>home/cart/add_cart" method="post">-->
                <input type="text" maxlength="3" value="1" name="quantity" id="quantity" placeholder="Nhập số lượng"/>
                <input type="hidden" value="<?=$_view->ma?>" name="hid_id" id="hid_id"/>
                <br />
                <button name="button" id="addcart" <?php if($_view->soluong <=0 ) echo "disabled=\"disabled\"";?>>Cho vào giỏ hàng</button> 
             <!--  <input type="submit" name="submit" value="Cart"/>-->
            <!--</form>-->
     <?php endforeach;?>
</div>
<a href="<?=base_url()?>home/cart/">Xem giỏ hàng</a>
<script>
    $('#zoom_01').elevateZoom();
</script>