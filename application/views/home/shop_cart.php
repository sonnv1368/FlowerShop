<div class="shop_cart">
<?php if($this->defaultlib->check_session('fl_home_in')): ?>
    <table id="tbl_userprofile">
        <tr>
            <td>Nơi nhận hàng:</td>
            <td><input type="text" name="place" id="place" value="" placeholder="Nhập nơi nhận hàng"/></td>\
        </tr>
        <tr>
            <td>Thông tin người nhận hàng:</td>
            <td><textarea name="info" id="info"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button name="submit" value="submit" onclick="shop_cart()">Mua hàng</button></td>
        </tr>
    </table>
<?php else: ?>
    <p><h2>Bạn chưa đăng nhập hoặc <a href="<?=base_url()?>home/membership/index/create">Đăng ký</a> để thực hiện chức năng này </h2></p>
<?php endif; ?>
</div>
<script type="text/javascript">
    function shop_cart(){
        var _place = $("#place").val(),
            _info  = $("#info").val();
			
            $.post('<?=base_url()?>home/cart/checkout/save',{place: _place,info:_info},function(outdata){
                if(outdata){
                    alert("Đặt hàng thành công!");
                    window.location = '<?=base_url()?>home/cart/view_order';
                }else{
                    alert("Đặt hàng thất bại");
                }
            });
    }
</script>