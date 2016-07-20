<div class="view_order">
<?php if($this->defaultlib->check_session('fl_home_in')): ?>
    <table class="cart">
        <thead>
            <tr class="header-cart">
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá tiền</td>
            <td>Ngày tạo</td>
            <td>Người nhận</td>
            <td>Trạng thái</td>
        </tr>
        </thead>
        <tbody>
            
                <?php if(!empty($_order)):
                        foreach($_order as $_view_order):?>
                        <tr>
                      <td><?=$_view_order->tensp?></td>
                      <td><?=$_view_order->soluong?></td>
                      <td><?=$_view_order->giathanh?></td>
                      <td><?=$_view_order->ngaytao?></td>
                      <td><?=$_view_order->nguoinhan?></td>
                      <td><?=$_view_order->trangthai?></td>
                      
            </tr>
                <?php   endforeach;
                endif;?>
        </tbody>
        
    </table>
<?php endif; ?>    
</div>