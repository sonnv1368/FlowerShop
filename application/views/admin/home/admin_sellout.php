<div class="page-right">
    <?php $date = getdate(); ?>
    <p style="text-align: center; font-size:15px;text-transform: uppercase;">Sản phẩm sắp hết tháng <?php if($date['mon']<10){echo '0'.$date['mon'];}else{echo $date['mon'];}?>/<?=$date['year']?> </p>
   <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Mã SP</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ảnh</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php if(!empty($_sellout)):
                           foreach($_sellout as $_view_order):?>
                            <tr>
                              <td><?=$_view_order->ma?></td>
                              <td><?=$_view_order->tensp?></td>
                              <td><?=$_view_order->soluong?></td>
                              <td><img src="<?=$_view_order->anh?>" width="50" height="50"/></td>
                              </tr>
                <?php   endforeach;
                          endif; ?>
                    
                </tbody>
            </table>
      </div>    
</div>
<script type="text/javascript">
/* $(document).ready(function(){
        $('#table_resources').dataTable({
            "sPaginationType":"full_numbers",
            "aaSorting":[[2, "desc"]],
            "bJQueryUI":true
        });
 });*/
</script>