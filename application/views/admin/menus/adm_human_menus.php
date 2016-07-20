<div class="page-left">
    <ul><?php $sess = $this->session->userdata('fl_adm_in');?>
     <?php if($sess['ma_quyen'] == 1 || $sess['ma_quyen'] == 2 ){?>   <li><a href="<?= base_url()?>admin/membership/system_user" class="resources_list">Danh sách</a></li>
        <li><a href="<?= base_url()?>admin/membership/system_user/create" class="resources_create">Thêm mới thành viên</a></li><?php }?>
    </ul>                
</div>