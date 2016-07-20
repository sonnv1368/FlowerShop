<div class="page-right">
    <div class="year_menu">
        <select name="year" id="year">
            <option value="">Chọn năm</option>
            <?php 
                $date = getdate();
                for($i=0; $i<=20; $i++){
                    if($i < 10){
                        if($date['year'] == "200$i"){
                            echo "<option value=\"200$i\" selected=selected>200$i</option>";    
                        }else{
                            echo "<option value=\"200$i\">200$i</option>";
                        }
                        
                    }else{
                        if($date['year'] == "20$i"){
                            echo "<option value=\"20$i\" selected=selected>20$i</option>";    
                        }else{
                            echo "<option value=\"20$i\">20$i</option>";
                        }
                    }
                }
            ?>
        </select>
        <button name="send_year" id="send_year" onclick="return send_year()">Thống kê</button>
        <button name="statistics" id="report_quarters" onclick="return report_year()">In báo cáo</button>
    </div>
    <?php if(!empty($_view)){
         $date = getdate();
        ?>
       <div id="report_year">
                <div class="report_year">
                
            <div style="float: left; font-size: 15px;">Flowershop</div>
            <div style="float: right;">
                <p style="text-align: right;text-transform: uppercase;font-size: 15px;font-weight: bold;">Cộng hòa xã hội chủ nghĩa Việt Nam</p>
            <p style="text-align: right;font-size: 13px;font-weight: bold;margin: 0 62px 0 0;">Độc lập-Tự do-Hạnh phúc</p>
            <p style="text-align: right;margin: 0 65px 0 0;">Ngày <?php if($date['mday'] <10 ){ echo '0'.$date['mday']; }else{ echo $date['mday']; }?> tháng 
            <?php if($date['mon'] <10 ){ echo '0'.$date['mon']; }else{ echo $date['mon']; }?> năm <?php echo $date['year']; ?></p>
            <p><h2 style="text-align: center;text-transform: uppercase;margin: 0 120px 0 0;">Báo cáo hoạt động kinh doanh năm <span class="year"></span></h2></p>
            </div>
            <div style="clear: both; margin: 0; padding: 0;"></div>
            <div style="border-bottom: 1px solid #ccc;margin: 21px auto 0;width: 24%;"></div>
            
        
       <?php $_rev = $_sell_money - $_fund_money;
        
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
                    <td>".number_format($_rev)." VNĐ</td>
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
            $('#table_resourcews').dataTable({
            "sPaginationType":"full_numbers",
            "aaSorting":[[2, "desc"]],
            "bJQueryUI":true
        });
    });
    function send_year(){
        var _year= $("#year option:selected").val();
        
        $.post('<?=base_url()?>admin/home/year/statistic',{year:_year},function(data){
            $("#data").html(data);
			$(".year").html(_year);
        });
    }
    function report_year(){
        var w = window.open();
        var htmlcontent = "<DOCTYPE html>"+
                          "<html>"+
                          "<head>"+
                            "<title>Báo cáo</title>"+
                            "<style>"+
                                "div.report_year{background:#fff;width:900px;margin:10px auto;padding:15px;border:1px solid #6ea928}"+
                                ".report_year table{border:1px solid #fff;}"+
                            "</style>"+
                          "</head>"+
                          "<body>";
            htmlcontent += $("#report_year").html();
            htmlcontent += "</body>"+
                          "</html>";
        //alert(htmlcontent);
        $(w.document.body).html(htmlcontent);
      
    }
</script>