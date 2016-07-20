<div class="product">		
        <?php if(!empty($_search)):
                foreach($_search as $new):?>
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