<div class="page-right">
    <?php if(empty($_edit_member)):  ?>
    <div class="right_post">
        <div class="news_notice"></div>
        <label for="username">
            Tên đăng nhập:
            <input type="text" name="username" value="" placeholder="Nhập tài khoản" id="username"/>
        </label>
        <label for="password">
            Mật khẩu:
            <input type="password" name="password" id="mb_password" value="" placeholder="Nhập mật khẩu"/>
        </label>
        <label for="re-password">
            Nhập lại mật khẩu:
            <input type="password" name="re-password" id="re-mb_password" value="" placeholder="Nhập lại mật khẩu"/>
        </label>
        <label for="fullname">
            Họ và tên
            <input type="text" name="fullname" id="fullname" value="" placeholder="Nhập tên đày đủ"/>
        </label>
        <label for="re-password">
            Giới tính:
            <input type="radio" value="Nam" id="gender" name="gender"/> Nam.
            <input type="radio" value="Nữ" id="gender" name="gender"/> Nữ.
        </label>
        <br />
        <label for="birthday">
            Ngày sinh:
            <input type="text" name="birthday" id="birthday" value="" placeholder="Ngày tháng năm sinh"/>
        </label>
        <label for="address">
            Địa chỉ:
            <input type="text" name="address" id="address" value="" placeholder="Nhập dịa chỉ"/>
        </label>
        <label for="phone">
            Số điện thoại:
            <input type="text" name="phone" id="phone" value="" placeholder="Nhập số điện thoại"/>
        </label>
        <label for="email">
            Địa chỉ email:
            <input type="text" name="email" id="email" value="" placeholder="Nhập email"/>
        </label>
        <label for="displayname">
            Tên hiển thị:
            <input type="text" name="displayname" id="displayname" value="" placeholder="Nhập tên hiển thị"/>
        </label>
        <label for="post">
            <button type="submit" name="post" class="post" id="post" onclick="post_news()"> Tạo tài khoản</button>
        </label>
    </div>
    <?php else: ?>
    <div class="right_post">
        <div class="news_notice"></div>
        <?php foreach($_edit_member as $_edit): ?>
        <label for="username">
            Tên đăng nhập:
            <input type="text" name="username" value="<?= $_edit->taikhoan;?>" placeholder="Nhập tài khoản" id="username" readonly="true"/>
            <input type="hidden" name="hid_id" value="<?= $_edit->ma?>" id="hid_id"/>
        </label>
        <label for="password">
            Mật khẩu:
            <input type="password" name="password" id="mb_password" value="<?= $_edit->matkhau;?>" placeholder="Nhập mật khẩu"/>
        </label>
        <label for="re-password">
            Nhập lại mật khẩu:
            <input type="password" name="re-password" id="re-mb_password" value="" placeholder="Nhập lại mật khẩu"/>
        </label>
        <label for="fullname">
            Họ và tên
            <input type="text" name="fullname" id="fullname" value="<?= $_edit->tendaydu?>" placeholder="Nhập tên đày đủ"/>
        </label>
        <label for="re-password">
            Giới tính:
            <input type="radio" value="Nam" id="gender" name="gender" <?php if($_edit->gioitinh == "Nam") echo 'checked="checked"'?>/> Nam.
            <input type="radio" value="Nữ" id="gender" name="gender"<?php if($_edit->gioitinh == "Nữ") echo 'checked="checked"'?>/> Nữ.
        </label>
        <br />
        <label for="birthday">
            Ngày sinh:
            <input type="text" name="birthday" id="birthday" value="<?= $_edit->namsinh?>" placeholder="Ngày tháng năm sinh"/>
        </label>
        <label for="address">
            Địa chỉ:
            <input type="text" name="address" id="address" value="<?= $_edit->diachi?>" placeholder="Nhập dịa chỉ"/>
        </label>
        <label for="phone">
            Số điện thoại:
            <input type="text" name="phone" id="phone" value="<?= $_edit->sodt?>" placeholder="Nhập số điện thoại"/>
        </label>
        <label for="email">
            Địa chỉ email:
            <input type="text" name="email" id="email" value="<?= $_edit->email?>" placeholder="Nhập email"/>
        </label>
        <label for="displayname">
            Tên hiển thị:
            <input type="text" name="displayname" id="displayname" value="<?= $_edit->tenhienthi?>" placeholder="Nhập tên hiển thị"/>
        </label>
        <label for="post">
            <button type="submit" name="post" class="post" id="post" onclick="post_edit()"> Lưu thay đổi</button>
        </label>
        <?php endforeach;?>
    </div>
    <?php endif;?>
</div>
<script type="text/javascript">
    function post_news(){
        var _username = $("#username").val(),
            _password = $("#mb_password").val(),
            _fullname = $("#fullname").val(),
            _gender   = $("input:radio[name=gender]:checked").val(),
            _birthday = $("#birthday").val(),
            _address  = $("#address").val(),
            _phone    = $("#phone").val(),
            _email    = $("#email").val(),
            _displayname = $("#displayname").val();
            
        $.post('<?= base_url()?>admin/membership/action/save',{username:_username,password:_password,fullname:_fullname,gender:_gender,birthday:_birthday,address:_address,phone:_phone,email:_email,disname:_displayname},function(outData){
            alert(outData);
            location.reload();
        });
        
    }
    
     function post_edit(){
        var _password = $("#mb_password").val(),
            _fullname = $("#fullname").val(),
            _gender   = $("input:radio[name=gender]:checked").val(),
            _birthday = $("#birthday").val(),
            _address  = $("#address").val(),
            _phone    = $("#phone").val(),
            _email    = $("#email").val(),
            _displayname = $("#displayname").val(),
            _id = $("#hid_id").val();
            
        $.post('<?= base_url()?>admin/membership/action/save-edit',{id:_id,password:_password,fullname:_fullname,gender:_gender,birthday:_birthday,address:_address,phone:_phone,email:_email,disname:_displayname},function(outData){
            alert(outData);
            location.reload();
        });
        
    }
</script>
<style>
    #gender {
    width: 20px;
}
</style>