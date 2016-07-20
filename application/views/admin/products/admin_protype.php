<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($_admin_data)):
                            foreach($_admin_data as $data):?>
                            <tr>
                                <td><?= $data->tendanhmuc; ?></td>
                                <td><?= $data->mota; ?></td>
                                <td><a href="#" class="delete" onclick="deleteClick('<?= $data->ma; ?>')">Xóa</a>
                                 | <a href="<?=base_url()?>admin/products/edit_cate_products/edit-cate/<?=$data->ma;?>" class="edit" >Sửa</a></td>
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
                
                $.post('<?=base_url()?>admin/products/edit_cate_products/delete',{id:_id},function(data){
                    if(data == 'true'){
                        window.location = '<?=base_url()?>admin/products/index/type';
                    }else{
                        $('.news_notice').html('Lỗi không xóa được danh mục');
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