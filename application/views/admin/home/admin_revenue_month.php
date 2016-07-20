<div class="page-right">
    <div class="menu_quarter">
        <select name="month" id="month">
            <option value="">Chọn tháng</option> 
            <?php
                 for($i=1;$i<=12;$i++){
                    if($i < 10){
                        echo '<option value="0'.$i.'">Tháng '.$i.'</option>';
                    }else{
                        echo '<option value="'.$i.'">Tháng '.$i.'</option>';
                    }
                 }
            ?>    
        </select>
        
        <select name="year" id="year">
            <option value="">Chọn năm</option> 
            <?php
                $date = getdate();                
                 for($i=1;$i<=20;$i++){
                    if($date['year'] == '20'.$i){
                        if($i < 10){
                            echo '<option value="200'.$i.'" selected=selected>200'.$i.'</option>';    
                        }else{
                            echo '<option value="20'.$i.'" selected=selected>20'.$i.'</option>';
                        }
                        
                    }else{
                        if($i < 10){
                            echo '<option value="200'.$i.'">200'.$i.'</option>';    
                        }else{
                            echo '<option value="20'.$i.'">20'.$i.'</option>';
                        }
                    }
                        
                    
                 }
            ?>    
        </select>
        <button name="statistics" id="statistics" onclick="return statistics()">Thống kê</button>
        <button name="statistics" id="report_months" onclick="return report_month()">In báo cáo</button>
    </div>
    <?php if(!empty($_view)){
        $date = getdate();
        ?>
       <div id="report_month">
            <div class="report_month">
            <div style="float: left; font-size: 15px;">Flowershop</div>
            <div style="float: right;">
                <p style="text-align: right;text-transform: uppercase;font-size: 15px;font-weight: bold;">Cộng hòa xã hội chủ nghĩa Việt Nam</p>
            <p style="text-align: right;font-size: 13px;font-weight: bold;margin: 0 62px 0 0;">Độc lập-Tự do-Hạnh phúc</p>
            <p style="text-align: right;margin: 0 65px 0 0;">Ngày <?php if($date['mday'] <10 ){ echo '0'.$date['mday']; }else{ echo $date['mday']; }?> tháng 
            <?php if($date['mon'] <10 ){ echo '0'.$date['mon']; }else{ echo $date['mon']; }?> năm <?php echo $date['year']; ?></p>
            <p><h2 style="text-align: center;text-transform: uppercase;margin: 0 120px 0 0;">Báo cáo hoạt động kinh doanh tháng <span class="month-view"> </span>năm <span class="year-view"></span></h2></p>
            </div>
            <div style="clear: both; margin: 0; padding: 0;"></div>
            <div style="border-bottom: 1px solid #ccc;margin: 21px auto 0;width: 24%;"></div>
            
             <?php  $_rev = $_sell_money - $_fund_money;
        
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
            <table id="table_resourcese" class="display" align="center" width="90%" border="1" rules="all">
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
            $('#table_resources').dataTable({
            "sPaginationType":"full_numbers",
            "aaSorting":[[2, "desc"]],
            "bJQueryUI":true
        });
        
        //$("#report_month").attr("disabled","disabled");
    });
    function statistics(){
        var _month = $("#month option:selected").val(),
            _year  = $("#year option:selected").val(),
            _date = _month+"-"+_year;
			
			
            //alert(_date);
        $.post('<?=base_url()?>admin/home/quarter/statistic',{date:_date},function(data){
            $("#data").html(data);
			$(".month-view").html(_month);
			$(".year-view").html(_year);
        });
    }
    
    function report_month(){
       // $("#report_month").removeAttr("disabled","disabled");
        var w = window.open();
        var htmlcontent = "<DOCTYPE html>"+
                          "<html>"+
                          "<head>"+
                            "<title>Báo cáo</title>"+
                            "<style>"+
                                "div.report_month{background:#fff;width:900px;margin:10px auto;padding:15px;border:1px solid #6ea928}"+
                                ".revenue_month table{border:1px solid #fff;}"+
                            "</style>"+
                          "</head>"+
                          "<body>";
            htmlcontent += $("#report_month").html();
            htmlcontent += "</body>"+
                          "</html>";
        //alert(htmlcontent);
        $(w.document.body).html(htmlcontent);
      
    }
</script>