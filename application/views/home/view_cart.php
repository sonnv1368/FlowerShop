<?php if(!$this->cart->contents()):
	echo 'Chưa có sản phẩm nào trong giỏ hàng.';
else:
?>

<?php echo form_open('home/cart/update_cart'); ?>
<table width="100%" cellpadding="0" cellspacing="0" class="cart"> 
	<thead>
		<tr class="header-cart">
			<td>Số lượng</td>
			<td>Tên sản phẩm</td>
			<td>Giá sản phẩm</td>
			<td>Tổng giá</td>
            <td></td>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach($this->cart->contents() as $items): ?>
		
		<?php echo form_hidden('rowid[]', $items['rowid']); ?>
		<tr <?php if($i&1){ echo 'class="alt"'; }?>>
	  		<td>
	  			<?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
	  		</td>
	  		
	  		<td><?php echo $items['name']; ?></td>
	  		
	  		<td><?php echo $this->cart->format_number($items['price']); ?> VNĐ</td>
	  		<td><?php echo $this->cart->format_number($items['subtotal']); ?> VNĐ</td>
            <td><a href="<?=base_url()?>home/cart/empty_cart/remove/<?=$items['rowid']?>/0" id="remove">Xóa</a></td>
	  	</tr>
	  	
	  	<?php $i++; ?>
		<?php endforeach; ?>
		
		<tr>
			<td></td>
 		 	<td></td>
 		 	<td><strong>Thành tiền</strong></td>
 		 	<td><?php echo $this->cart->format_number($this->cart->total()); ?> VNĐ</td>
		</tr>
	</tbody>
</table>

<!--<p><?php echo form_submit('', 'Update your Cart'); echo anchor('home/cart/empty_cart', 'Xóa giỏ hàng', 'class="empty"');?></p>-->
<p class="update"><input type="submit" value="Cập nhật giỏ hàng" name="upadate_cart" id="upadate_cart"/>
    <a href="<?=SITE_URL?>home/cart/empty_cart" id="hid_id">Xóa giỏ hàng</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?=SITE_URL?>home/cart/checkout" id="checkout">Mua hàng</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?=SITE_URL?>home/home">Tiếp tục mua hàng</a>
</p>
<?php 
echo form_close(); 
endif;

?>




