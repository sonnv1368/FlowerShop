<div class="right_post">
        <div class="news_notice"></div>
        <?php foreach($_edit_member as $_edit): ?>
        <table id="tbl_userprofile">
        <tr>
            <td>Tên đăng nhập:</td>
            <td><input type="text" name="home_username" value="<?= $_edit->taikhoan;?>" placeholder="Nhập tài khoản" id="home_username" readonly="true"/></td>
            <input type="hidden" name="home_hid_id" value="<?= $_edit->ma?>" id="home_hid_id"/>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="password" name="home_password" id="home_password" value="<?= $_edit->matkhau;?>" placeholder="Nhập mật khẩu"/></td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu:</td>
            <td><input type="password" name="re-home_password" id="re-home_password" value="" placeholder="Nhập lại mật khẩu"/></td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="home_fullname" id="home_fullname" value="<?= $_edit->tendaydu?>" placeholder="Nhập tên đày đủ"/></td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td><input type="radio" value="Nam" id="home_gender" name="home_gender" <?php if($_edit->gioitinh == "Nam") echo 'checked="checked"'?>/> Nam.
            <input type="radio" value="Nữ" id="home_gender" name="home_gender"<?php if($_edit->gioitinh == "Nữ") echo 'checked="checked"'?>/> Nữ.</td>
        </tr>
        <br />
        <tr>
            <td>Ngày sinh:</td>
            <td><input type="text" name="home_birthday" id="home_birthday" value="<?= $_edit->namsinh?>" placeholder="Ngày tháng năm sinh"/></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><input type="text" name="home_address" id="home_address" value="<?= $_edit->diachi?>" placeholder="Nhập dịa chỉ"/></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td><input type="text" name="home_phone" id="home_phone" value="<?= $_edit->sodt?>" placeholder="Nhập số điện thoại"/></td>
        </tr>
        <tr>
            <td>Địa chỉ email:</td>
            <td><input type="text" name="home_email" id="home_email" value="<?= $_edit->email?>" placeholder="Nhập email"/></td>
        </tr>
        <tr>
            <td>Tên hiển thị:</td>
            <td><input type="text" name="home_displayname" id="home_displayname" value="<?= $_edit->tenhienthi?>" placeholder="Nhập tên hiển thị"/></td>
        </tr>
        <tr>
            <td style="background: none;"></td>
            <td style="background: none;"><button type="submit" name="post" class="post" id="userprofile_post"> Lưu thay đổi</button></td>
        </tr>
        </table>
        <?php endforeach;?>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".news_notice").hide();
         $("#userprofile_post").click(function(){
             var _password = $("#home_password").val(),
            _fullname = $("#home_fullname").val(),
            _gender   = $("input:radio[name=home_gender]:checked").val(),
            _birthday = $("#home_birthday").val(),
            _address  = $("#home_address").val(),
            _phone    = $("#home_phone").val(),
            _email    = $("#home_email").val(),
            _displayname = $("#home_displayname").val(),
            _hid_id = $("#home_hid_id").val();
           // alert(_username+" >> "+_fullname+" >> "+_hid_id);
            $.post('<?= base_url()?>home/membership/userprofile/save',{id:_hid_id,password:_password,fullname:_fullname,gender:_gender,birthday:_birthday,address:_address,phone:_phone,email:_email,disname:_displayname},function(outData){
                $(".news_notice").show();
                $(".news_notice").html(outData);
            });
         });
    });
</script>