<div class="page-right">
    <div class="admin_home">
        <div class="news_notice"></div>
            <table id="table_resources" class="display">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Ngày tạo</th>
                        <th>Nội dung</th>
                        <th>Ảnh</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($_admin_data)):
                            foreach($_admin_data as $data):?>
                            <tr>
                                <td><?= $data->tieude; ?></td>
                                <td><?= $data->tacgia; ?></td>
                                <td><?= $data->ngaytao; ?></td>
								<td><?php $noidung = $this->defaultlib->title_limits(150,$data->noidung);
								echo $noidung;
								?></td>
                                <td><?php $img = $this->defaultlib->get_thumbs($data->noidung); ?>
                                    <img src="<?= $img?>" width="50" height="50"/>
                                </td>
                                <td><?= $data->trangthai; ?></td>
                                <td><a href="#" class="delete" onclick="deleteClick('<?= $data->ma; ?>')">Xóa</a> | 
                                    <a href="<?=base_url()?>admin/news/post_news/edit/<?= $data->ma; ?>" class="delete" >Sửa</a>
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
                
                $.post('<?=base_url()?>admin/news/post_news/delete',{id:_id},function(data){
                    if(data == 'true'){
                        window.location = '<?=base_url()?>admin/news/post_news/';
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