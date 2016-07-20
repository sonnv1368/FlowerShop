<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Tên cài đặt</th>
                        <th>Nội dung</th>
                        <th>Mô tả</th>
                        <th>Loại</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($_adm_config_data)):
                            foreach($_adm_config_data as $data):?>
                            <tr>
                                <td><?= $data->tencauhinh; ?></td>
                                <td><?php 
            if(!empty($_list_img)){
                foreach($_list_img as $img){
                    echo '<img src="http://'.$img.'" width="100" height="50"/><br />';
                }
            }
      ?>  </td>
                                <td><?= $data->mota; ?></td>
                                <td><?= $data->loai;?></td>
                                <td><a href="#" class="delete" onclick="deleteClick('<?= $data->ma; ?>')">Xóa</a></td>
                            </tr>       
                   <?php    endforeach;
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
            
            function deleteClick(_id){
                
                $.post('<?=base_url()?>admin/home/cofiguration/delete',{id:_id},function(data){
                    if(data == 'true'){
                        window.location = '<?=base_url()?>admin/home/cofiguration';
                    }else{
                        $('.news_notice').html('Lỗi không xóa được bài viết');
                    }
                });
            }
</script>
<style type="text/css">
    table.display {
      margin: 0 auto;
      width: 100%;
      clear: both;
      border-collapse: collapse;
      table-layout: fixed; /***********add this*/ 
      word-wrap:break-word; /***********and this*/ 
}
</style>