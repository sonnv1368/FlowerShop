<div class="product">
		<h3>Danh mục sản phẩm</h3>
        <?php if(!empty($_cate_data)):
                foreach($_cate_data as $new):?>
            <div class="post">
    			<a class="group4" href="<?=$new->anh;?>" title="<?=$new->tendanhmuc ?>"><img src="<?=$new->anh?>" width="200" height="150" alt="" /></a>
    			<p class="title"><?=$new->tendanhmuc ?></p>
                <a href="<?=base_url()?>home/products/view_cate/<?= $new->tendanhmuc;?>/<?=$new->ma?>" class="detail" id="detail">Chi tiết</a>
    		</div>            
         <?php  endforeach;
              endif;
        ?>
		
	</div>