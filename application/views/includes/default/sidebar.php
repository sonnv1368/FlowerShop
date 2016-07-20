<?php 
    $check_session = $this->defaultlib->check_session('fl_home_in');
    $session =    $this->session->userdata('fl_home_in'); ?>
<div class="sidebar">
	<div class="widget">
		<h3>Danh mục sản phẩm</h3>
		<div class="content-side"> 
            <ul class="categories">
			<?php 
                $_sidebar_data = $this->defaultlib->get_categories();
            if(!empty($_sidebar_data)):
                    foreach($_sidebar_data->result() as $s_data):?>
                    <li><a href="<?=base_url()?>home/products/view_cate/<?= $s_data->tendanhmuc;?>/<?=$s_data->ma?>"><?= $s_data->tendanhmuc;?></a></li>
                  <?php  endforeach;
            endif;
            ?>
		</ul>
        </div>
        <div class="clear"></div>
	</div>
    <div class="widget">
     <?php  if(!$check_session):?>  <h3>Đăng nhập</h3> 
        <div class="content-side">
            <div class="login">
                
                    <p>Tên đăng nhập: </p>
            		<input type="text" value="" name="username" id="username" placeholder="Nhập tên tài khoản" />
                    <p>Mật khẩu: </p>
            		<input type="password" value="" name="password" id="password" placeholder="Nhập mật khẩu" />
            		<button type="submits" value="" name="submit" id="submit" >Đăng nhập</button>
                    <p><a href="<?=base_url()?>home/membership/forgot_pass/"> Quên mật khẩu</a></p>
                    <p><a href="<?=base_url()?>home/membership/index/create">Đăng ký tài khoản mới</a></p>
                
             </div>
        </div>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
    <div class="widget">
		<h3>Tìm kiếm</h3>
		<div class="content-side"> 
            <p>Tìm kiếm sản phẩm theo: </p>
            <p>
                <input type="radio" name="type_search" id="type_search" value="name" checked="checked"/>Tên.
                <input type="radio" name="type_search" id="type_search" class="price" value="price"/>Giá.
                <select name="price_range" id="price_name">
                    <option value="">Chọn</option>
                    <option value="giaban > 0 and giaban <=100000">Từ 0 - 100.000</option>
                    <option value="giaban > 100000 and giaban <=200000">Từ 100.000 - 200.000</option>
                    <option value="giaban > 200000 and giaban <=500000">Từ 200.000 - 500.000</option>
                    <option value="giaban > 500000 and giaban <=1000000">Từ 500.000 - 1000.000</option>
                    <option value="giaban > 1000000">lớn hơn 1000.000</option>
                </select>
            </p>
            <input type="text" name="search" id="search" class="search" value="" placeholder="Tìm kiếm" />
            <img src="<?=SITE_URL?>application/views/includes/default/images/search_ico.png" class="ico_search"/>
        </div>
        <div class="clear"></div>
	</div>
    <div class="widget">
		<h3>Hỗ trợ trực tuyến</h3>
		<div class="content-side"> 
            <ul class="categories">
			 <li>
                <p>Hỗ trợ 1:</p>
                <a href="ymsgr:sendIM?phuonghy_k16">
                <img border="0" src="http://opi.yahoo.com/online?u=phuonghy_k16&m=g&t=2&l=us" />
                </a>
             </li>
             <li>
                <p>Hỗ trợ 2:</p>
                <a href="ymsgr:sendIM?nguyenphuong91">
                <img border="0" src="http://opi.yahoo.com/online?u=nguyenphuong91&m=g&t=2&l=us" />
                </a>
             </li>
             <li>
                <p style="font-weight: bold;">Hotline: 0974064338</p>
             </li>  
            </ul>
        </div>
        <div class="clear"></div>
	</div>
</div>