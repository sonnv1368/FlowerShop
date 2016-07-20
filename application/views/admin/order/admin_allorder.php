<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Tên sản phẩm</th>
                        <th>Tên khách hàng</th>
                        <th>Số lượng mua</th>
                        <th>Giá sản phẩm</th>
                        <th>Thành tiền</th>
                        <th>Ngày mua</th>
                        <th>Người nhận</th>
                        <th>Địa điểm giao hàng</th>
                        <th>Trạng thái</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(!empty($_view_order)):
                           foreach($_view_order as $_view_order):?>
                           <tr>
                              <td id="id_order_detail"><?=$_view_order->ma?></td>  
                              <td><?=$_view_order->tensp?></td>
                              <td><?=$_view_order->tendaydu?></td>
                              <td><?=$_view_order->soluong?></td>
                              <td><?=number_format($_view_order->giathanh)?> VNĐ</td>
                              <td><?=number_format($_view_order->thanhtien)?> VNĐ</td>
                              <td><?=$_view_order->ngaytao?></td>
                              <td><?=$_view_order->nguoinhan?></td>
                              <td><?=$_view_order->noinhan?></td>
                              <td><?php if($_view_order->trangthai == 'Chờ xử lý'){
                                   echo '<a href="#" id="change_status" onclick="return change_status('.$_view_order->ma.','.$_view_order->soluong.')">'.$_view_order->trangthai.'</a>';
                              }else{
                                    echo $_view_order->trangthai;
                                
                              } ?></td>
							  <td><a href="<?=base_url()?>admin/products/delete_order/<?=$_view_order->madh?>">Hủy</a></td>
                              </tr>
                <?php   endforeach;
                          endif; ?>
                    
                </tbody>
            </table>
      </div>     
</div>
<script type="text/javascript">
 $(document).ready(function(){
                $('#table_resources').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":true
                });
            });
    function change_status(_orderdetail_id,_qty){
        
        //alert(_orderdetail_id+" >> "+_qty);
        $.post('<?=base_url()?>admin/products/change_status',{detail_id:_orderdetail_id,qty:_qty},function(data){
            if(data == 'true'){
               alert('Xử lý thành công!');
               location.reload();
            }
            if(data == 'false'){
                 alert('Xử lý lỗi! Số lượng trong kho không đủ');
            }
            
        });
    }
</script>