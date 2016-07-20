<div class="page-right">
    <?php if(empty($_edit_human)):  ?>
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
        <label for="roles">
            Quyền quản trị:
            <select name="roles" id="roles">
                <option value="">Chọn</option>
                <?php foreach($_role_data as $_role):
                            echo '<option value="'.$_role->ma.'">'.$_role->ten.'</option>';
                      endforeach;
                ?>
            </select>
        </label>       
        <label for="post">
            <button type="submit" name="post" class="post" id="post" onclick="post_news()"> Tạo tài khoản</button>
        </label>
    </div>
    <?php else: ?>
    <div class="right_post">
        <div class="news_notice"></div>
        <?php foreach($_edit_human as $_edit): ?>
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
        <label for="roles">
            Quyền quản trị:
            <select name="roles" id="roles">
                <option value="">Chọn</option>
                <?php foreach($_role_data as $_role):
                            if($_role->ma == $_edit->ma_quyen){
                                echo '<option value="'.$_role->ma.'" selected="selected">'.$_role->ten.'</option>';    
                            }else{
                                echo '<option value="'.$_role->ma.'">'.$_role->ten.'</option>';
                            }
                            
                      endforeach;
                ?>
            </select>
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
            _role = $("#roles option:selected").val();
            
        $.post('<?= base_url()?>admin/membership/system_user/save',{username:_username,password:_password,fullname:_fullname,gender:_gender,address:_address,phone:_phone,email:_email,roles:_role},function(outData){
            $(".news_notice").html(outData);
        });
        
    }
    
     function post_edit(){
        var _password = $("#mb_password").val(),
            _fullname = $("#fullname").val(),
            _gender   = $("input:radio[name=gender]:checked").val(),
            _address  = $("#address").val(),
            _phone    = $("#phone").val(),
            _email    = $("#email").val(),
            _roles    = $("#roles option:selected").val(),
            _id = $("#hid_id").val();
            
        $.post('<?= base_url()?>admin/membership/system_user/save-edit',{id:_id,password:_password,fullname:_fullname,gender:_gender,address:_address,phone:_phone,email:_email,roles:_roles},function(outData){
            $(".news_notice").html(outData);
        });
        
    }
</script>
<style>
    #gender {
    width: 20px;
}
</style>