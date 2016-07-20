<div class="page-right">
    <div class="right_post">
        <div class="news_notice"></div>
        <table id="tbl_userprofile">
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" name="home_username" value="" placeholder="Nhập tài khoản" id="home_username"/></td>
            </tr>
            <tr>
                <td>Mật khẩu: </td>
                <td><input type="password" name="password" id="home_password" value="" placeholder="Nhập mật khẩu"/></td>
            <tr>
            <tr>
                <td>Nhập lại mật khẩu:</td>
                <td><input type="password" name="re-home_password" id="re_home_password" value="" placeholder="Nhập lại mật khẩu"/></td> 
            </tr>       
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="home_fullname" id="home_fullname" value="" placeholder="Nhập tên đày đủ"/></td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td><input type="radio" value="Nam" id="home_gender" name="home_gender" checked="checked"/> Nam.
            <input type="radio" value="Nữ" id="home_gender" name="home_gender"/> Nữ.</td>
        </tr>
        <br />
        <tr>
            <td>Ngày sinh:</td>
            <td><input type="text" name="home_birthday" id="home_birthday" value="" placeholder="Ngày tháng năm sinh"/></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><input type="text" name="home_address" id="home_address" value="" placeholder="Nhập dịa chỉ"/></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td><input type="text" name="home_phone" id="home_phone" value="" placeholder="Nhập số điện thoại"/></td>
        </tr>
        <tr>
            <td>Địa chỉ email:</td>
            <td><input type="text" name="home_email" id="home_email" value="" placeholder="Nhập email"/></td>
        </tr>
        <tr>
            <td>Tên hiển thị:</td>
            <td><input type="text" name="home_displayname" id="home_displayname" value="" placeholder="Nhập tên hiển thị"/></td>
        </tr>
        <tr>
            <td style="background: none;"></td>
            <td style="background: none;"><button type="submit" name="post" class="post" id="post" onclick="create_membership()"> Tạo tài khoản</button></td>
        </tr>
        </table>
        
    </div>
</div>
<script type="text/javascript">
    function create_membership(){
        var _username = $("#home_username").val(),
            _password = $("#home_password").val(),
            _re_password = $("#re_home_password").val(),
            _fullname = $("#home_fullname").val(),
            _gender   = $("input:radio[name=home_gender]:checked").val(),
            _birthday = $("#home_birthday").val(),
            _address  = $("#home_address").val(),
            _phone    = $("#home_phone").val(),
            _email    = $("#home_email").val(),
            _displayname = $("#home_displayname").val();
        if(_username == ""){
            $(".news_notice").html("Không để trống tài khoản");
        }else if(_password == ""){
            $(".news_notice").html("Không để trống mật khẩu");
        }else if(_password.length < 6){
            $(".news_notice").html("Mật khẩu không ngắn hơn 6 ký tự");
        }else if(_re_password != _password){
            $(".news_notice").html("Mật khẩu không trùng khớp");
        }else if(isNaN(_phone)){
            $(".news_notice").html("Điện thoại nhập phải là số");
        }else{
            $.post('<?= base_url()?>home/membership/index/save',{username:_username,password:_password,fullname:_fullname,gender:_gender,birthday:_birthday,address:_address,phone:_phone,email:_email,disname:_displayname},function(outData){
                alert(outData);
                location.reload();
            });    
        }
        
        
    }
</script>
<style>
    #gender {
    width: 20px;
}
</style>