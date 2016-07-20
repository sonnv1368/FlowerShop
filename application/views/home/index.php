	<div class="product">
		<h3><a href="<?=base_url()?>home/products/view_products/san-pham-moi" style="color: #fff;">Sản phẩm mới</a></h3>
        <?php if(!empty($_new_product)):
                foreach($_new_product as $new):?>
            <div class="post">
    			<a class="group4" href="<?=$new->anh;?>" title="<?=$new->tensp ?>"><img src="<?=$new->anh?>" width="200" height="150" alt="" /></a>
    			<p class="title"><?=$new->tensp ?></p>
    			<p class="price"><?=number_format($new->giaban) ?> VNĐ</p>
                <a href="<?=base_url()?>home/products/view_detail/<?=$new->ma;?>" class="detail" id="detail">Chi tiết</a>
    		</div>            
         <?php  endforeach;
              endif;
        ?>
	</div>
   <div class="product">
		<h3><a href="<?=base_url()?>home/products/view_products/san-pham-noi-bat" style="color: #fff;">Sản phẩm bán chạy</a></h3>
		<?php if(!empty($_special_product)):
                foreach($_special_product as $new):?>
            <div class="post">
    			<a class="group4" href="<?=$new->anh;?>" title="<?=$new->tensp ?>"><img src="<?=$new->anh?>" width="200" height="150" alt="" /></a>
    			<p class="title"><?=$new->tensp ?></p>
    			<p class="price"><?=number_format($new->giaban) ?> VNĐ</p>
                <a href="<?=base_url()?>home/products/view_detail/<?=$new->ma;?>" class="detail" id="detail">Chi tiết</a>
    		</div>            
         <?php  endforeach;
              endif;
        ?>
		
	</div>