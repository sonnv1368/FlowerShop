<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($_admin_data)):
                            foreach($_admin_data as $data):?>
                            <tr>
                                <td><?= $data->tensp; ?></td>
                                <td><?= $data->ma_danhmuc; ?></td>
                                <td><?= $data->soluong; ?></td>
                                <td><?= $data->giaban; ?></td>
                                <td><img src="<?= $data->anh; ?>" width="50" height="50" /></td>
                                <td><?= $data->mota; ?></td>
                                <td>
                                    <a href="#" class="delete" onclick="deleteClick('<?= $data->ma; ?>')">Xóa</a> | 
                                    <a href="<?= base_url()?>admin/products/edit_products/edit/<?=$data->ma?>" class="delete" title="Sửa sản phẩm <?= $data->tensp?>">Sửa</a>
                                </td>
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
               // alert("OK");
                $.post('<?=base_url()?>admin/products/edit_products/delete',{id:_id},function(data){
                    if(data == 'true'){
                        window.location = '<?=base_url()?>admin/products/index/';
                    }else{
                        $('.news_notice').html('Lỗi không xóa được sản phẩm');
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