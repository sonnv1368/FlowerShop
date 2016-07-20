<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Tài khoản</th>
                        <th>Tên đầy đủ</th>
                        <th>Giới tính</th>
                        <th>Năm sinh</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($_members_data)):
                            foreach($_members_data as $data):?>
                            <tr>
                                <td><?= $data->taikhoan; ?></td>
                                <td><?= $data->tendaydu; ?></td>
                                <td><?= $data->gioitinh; ?></td>
                                <td><?= $data->namsinh;?></td>
                                <td><?= $data->diachi; ?></td>
                                <td><?= $data->sodt; ?></td>
                                <td><?= $data->email ?></td>
                                <td><?= $data->trangthai; ?></td>
                                <td><a href="#" class="delete" onclick="deleteClick('<?= $data->ma; ?>')">Xóa</a> |
                                    <a href="<?= base_url()?>admin/membership/action/edit/<?= $data->ma?>" class="delete" >Sửa</a> 
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
                
                $.post('<?=base_url()?>admin/membership/action/delete',{id:_id},function(data){
                    if(data == 'true'){
                        window.location = '<?=base_url()?>admin/membership/index/';
                    }else{
                        $('.news_notice').html('Lỗi không xóa được thành viên');
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