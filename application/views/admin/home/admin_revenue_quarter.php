<div class="page-right">
    <div class="menu_quarter">
        <select id="quarter" name="quarter">
            <option value="">Chọn quý</option>
            <option value="1">Quý 1</option>
            <option value="2">Quý 2</option>
            <option value="3">Quý 3</option>
            <option value="4">Quý 4</option>
        </select>
        
        <button name="statistic" id="statistic" onclick="return sendquarter();">Thống kê</button>
        <button name="statistics" id="report_quarters" onclick="return report_quarter()">In báo cáo</button>
    </div>
    <?php if(!empty($_view)){
        $date = getdate();
        ?>
            <div id="report_quarter">
                <div class="report_quarter">
                
            <div style="float: left; font-size: 15px;">Flowershop</div>
            <div style="float: right;">
                <p style="text-align: right;text-transform: uppercase;font-size: 15px;font-weight: bold;">Cộng hòa xã hội chủ nghĩa Việt Nam</p>
            <p style="text-align: right;font-size: 13px;font-weight: bold;margin: 0 62px 0 0;">Độc lập-Tự do-Hạnh phúc</p>
            <p style="text-align: right;margin: 0 65px 0 0;">Ngày <?php if($date['mday'] <10 ){ echo '0'.$date['mday']; }else{ echo $date['mday']; }?> tháng 
            <?php if($date['mon'] <10 ){ echo '0'.$date['mon']; }else{ echo $date['mon']; }?> năm <?php echo $date['year']; ?></p>
            <p><h2 style="text-align: center;text-transform: uppercase;margin: 0 120px 0 0;">Báo cáo hoạt động kinh doanh Quý <?=$_quarter?> năm <?=$date['year'];?></h2></p>
            </div>
            <div style="clear: both; margin: 0; padding: 0;"></div>
            <div style="border-bottom: 1px solid #ccc;margin: 21px auto 0;width: 24%;"></div>
                   
    <?php    
    $_rev = $_sell_money - $_fund_money;
    $table = "<table class=\"revenue_month\" align=\"center\" width=\"90%\" border=\"1\" rules=\"all\">
            <thead>
                <tr>
                    <th>Doanh thu</th>
                    <th>Vốn nhập</th>
                    <th>Lãi</th>
                </tr>
            </thead>
            <tbody>
                <tr style=\"text-align:center\">
                    <td>".number_format($_sell_money)." VNĐ</td>
                    <td>".number_format($_fund_money)." VNĐ</td>
                    <td>".number_format($_rev)."</td>
                </tr>
            </tbody>
        </table>"; 
        
        echo $table;
        
            ?>
            <p><h2 style="text-align: center;">Danh sách sản phẩm đã bán</h2></p>
            
             <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display" align="center" width="90%" border="1" rules="all">
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
            </div>
        <?php 
    }?>
</div>
<script type="text/javascript">
 $(document).ready(function(){
            $('#table_resourcess').dataTable({
            "sPaginationType":"full_numbers",
            "aaSorting":[[2, "desc"]],
            "bJQueryUI":true
        });
    });
    function sendquarter(){
       
        var _quarter = $("#quarter option:selected").val();
        
        $.post('<?=base_url()?>admin/home/month/statistic',{quarter:_quarter},function(data){
            $("#data").html(data);
        });   
    }
    function report_quarter(){
        var w = window.open();
        var htmlcontent = "<DOCTYPE html>"+
                          "<html>"+
                          "<head>"+
                            "<title>Báo cáo</title>"+
                            "<style>"+
                                "div.report_quarter{background:#fff;width:900px;margin:10px auto;padding:15px;border:1px solid #6ea928}"+
                                ".report_quarter table{border:1px solid #fff;}"+
                            "</style>"+
                          "</head>"+
                          "<body>";
            htmlcontent += $("#report_quarter").html();
            htmlcontent += "</body>"+
                          "</html>";
        //alert(htmlcontent);
        $(w.document.body).html(htmlcontent);
      
    }
    
</script>