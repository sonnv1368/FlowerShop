<div class="page-right">
 <div class="admin_home">
 <?php $date = getdate(); ?>
    <p style="text-align: center; font-size:15px;text-transform: uppercase;">Hàng tồn tháng <?php if($date['mon']<10){echo '0'.$date['mon'];}else{echo $date['mon'];}?>/<?=$date['year']?> </p>
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ảnh</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                        foreach($_data as $_pro){
                               
                                   echo '<tr>';
                                   echo '<td>'.$_pro["id"].'</td>';
                                   echo '<td>'.$_pro["name"].'</td>';
                                   echo '<td>'.$_pro["count"].'</td>';
                                   echo "<td><img src=\"".$_pro["image"]."\" width=\"50\" height=\"50\"/></td>";
                                   echo '</tr>';
                            
                            
                            
                        }
                    ?>
                </tbody>
            </table>
      </div> 
</div>
<script type="text/javascript">
 $(document).ready(function(){
        
 });
</script>

