<?php $this->load->view('includes/default/header');?>
			<?php $this->load->view('includes/default/sidebar');?>

    <div id="main_right">
        <?php 
        if(isset($_content)):
            $this->load->view($_content);
        else:
            echo 'Không tìm thấy sản phẩm';
        endif;
        ?>	
    </div>
<div class="clear"></div>
<?php $this->load->view('includes/default/footer');?>