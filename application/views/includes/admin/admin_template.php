<?php $this->load->view('includes/admin/header'); ?>
	
    <div id="main_content">
        <?php $this->load->view($_adm_left);?>
        <div id="data">
            <?php $this->load->view($_adm_right); ?>
        </div>
        <div class="clear"></div>
    </div>
<?php $this->load->view('includes/admin/footer'); ?>