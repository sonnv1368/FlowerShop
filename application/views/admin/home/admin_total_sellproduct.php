<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng bán</th>
                        <th>Đơn giá nhập</th>
                        <th>Đơn giá bán</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(!empty($_sell_product)):
                           foreach($_sell_product as $_view_order):?>
                           <tr>
                              <td id="id_order_detail"><?=$_view_order->masp?></td>  
                              <td><?=$_view_order->tensp?></td>
                              <td><?=$_view_order->soluong?></td>
                              <td><?=number_format($_view_order->giatien)?> VNĐ</td>
                              <td><?=number_format($_view_order->giathanh)?> VNĐ</td>
                              <td><?=number_format($_view_order->thanhtien)?> VNĐ</td>
                              </tr>
                <?php   endforeach;
                          endif; ?>
                    
                </tbody>
            </table>
      </div>       
</div>