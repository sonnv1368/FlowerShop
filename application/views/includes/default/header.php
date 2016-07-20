<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flowershop.com</title>

<link rel="shortcut icon" href="<?= base_url()?>application/views/includes/default/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/default/css/style.css"/>
<!--<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/default/css/ui-tabs.css"/>-->
<link rel="stylesheet" href="<?= base_url()?>application/views/includes/default/css/colorbox.css" />
<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/default/css/preview.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/default/css/wt-rotator.css"/>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/default/css/jquery.autocomplete.css"/>
<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/jquery-1.9.1.js"></script> 
<script src="<?= base_url()?>application/views/includes/default/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/jquery.wt-rotator.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/preview.js"></script>
<!--<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/ui-tabs.js"></script>-->  
<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/jquery.elevateZoom-2.5.5.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/core.js"></script>
<script type="text/javascript" src="<?= base_url()?>application/views/includes/default/js/jquery.autocomplete.pack.js"></script>
</head>
<body>
<?php 
    $check_session = $this->defaultlib->check_session('fl_home_in');
    $session =    $this->session->userdata('fl_home_in'); ?>
	<div id="wrapper">
		<div class="header">
			<img class="logo" src="<?= base_url()?>application/views/includes/default/images/logo.png" width="" height=""/>
            <a href="<?=base_url()?>home/cart/"><img class="card_logo" src="<?= base_url()?>application/views/includes/default/images/scart.png" width="" height=""/></a>
			<div class="menu">
				<ul>
					<li><a href="<?=base_url()?>home/home/index"><img src="<?= base_url()?>application/views/includes/default/images/home.png" />Trang chủ</a></li>
					<li><a href="<?=base_url()?>home/home/about"><img src="<?= base_url()?>application/views/includes/default/images/cut.png" />Giới thiệu</a></li>
					<li><a href="<?=base_url()?>home/products/"><img src="<?= base_url()?>application/views/includes/default/images/edit.png" />Sản phẩm</a></li>
                    <li><a href="<?=base_url()?>home/home/news"><img src="<?= base_url()?>application/views/includes/default/images/new.png" />Tin tức</a></li>
					<li><a href="<?=base_url()?>home/home/contact"><img src="<?= base_url()?>application/views/includes/default/images/cut.png" />Liên hệ</a></li>
                    
				</ul>
                <?php if($check_session):?>
                    <span class="login_name">
                    <ul>
                        <li>Xin chào:<a href="#" id="user_login_name"><?=$session['username']; ?></a>
                            <ul>
                                <li><a href="<?=base_url()?>home/cart/">Xem giỏ hàng</a></li>
                                <li><a href="<?=base_url()?>home/cart/view_order">Xem đơn hàng</a></li>
                                <li><a href="#" title="Đăng xuất" id="logout">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </span>
                <input type="hidden" id="username_log" value="<?=$session['username']?>" />
                <?php endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="wt-rotator">
            <a href="#"></a>            
            <div class="desc"></div>
            <div class="preloader"></div>
            <div class="c-panel">
                <div class="thumbnails">
                    <ul>
                    <?php 
                        $_list_img = $this->defaultlib->get_setting('noidung','caidat');
                        foreach($_list_img as $list){
                            echo '<li>';
                            echo '<a href="http://'.$list.'" title="Hoa Tuoi Dep"></a>';
                            echo '</li>';
                        }
                    ?>
                    </ul>
                </div>     
            </div>
        </div>	
		</div>