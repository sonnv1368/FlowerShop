<div class="page-left">
    <ul id="nav">
        <li><a href="<?= base_url()?>admin/home/inventory" class="resources_list">Hàng tồn</a></li>
        <li><a href="<?= base_url()?>admin/home/sell_out" class="resources_create">Hàng sắp hết</a></li>
        <li><a href="#" class="resources_create">Thống kê lãi</a>
            <ul>
                <li><a href="<?= base_url()?>admin/home/quarter">Thống kê theo tháng</a></li>
                <li><a href="<?= base_url()?>admin/home/month">Thống kê theo quý</a></li>
                <li><a href="<?= base_url()?>admin/home/year">Thống kê theo năm</a></li>
            </ul>
        </li>
        <li><a href="<?= base_url()?>admin/home/total_sell" class="resources_create">Tổng số hàng đã bán</a></li>
       <!-- <li><a href="<?= base_url()?>admin/home/revenue" class="resources_create">Thống kê doanh thu</a></li>-->
    </ul>                
</div>
<script type="text/javascript">
        $(document).ready(function(){
            $('#table_resources').dataTable({
            "sPaginationType":"full_numbers",
            "aaSorting":[[2, "desc"]],
            "bJQueryUI":true
        });
            $("#nav > li > a").on("click", function(e){
                    if($(this).parent().has("ul")) {
                      e.preventDefault();
                    }
                    
                    if(!$(this).hasClass("open")) {
                      // hide any open menus and remove all other classes
                      $("#nav li ul").slideUp(350);
                      $("#nav li a").removeClass("open");
                      
                      // open our new menu and add the open class
                      $(this).next("ul").slideDown(350);
                      $(this).addClass("open");
                    }
                    
                    else if($(this).hasClass("open")) {
                      $(this).removeClass("open");
                      $(this).next("ul").slideUp(350);
                    }
            });
        });
</script>