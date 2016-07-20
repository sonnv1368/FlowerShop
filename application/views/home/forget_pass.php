<div class="news_notice"></div>
<table id="tbl_userprofile">
    <tr>
        <td>Tên đăng nhập hoặc email: </td>
        <td><input type="text" name="name" id="name" value=""/></td>
    </tr>
    <tr>
        <td>Mât khẩu mới: </td>
        <td><input type="password" name="email" id="newpassword" value=""/></td>
    </tr>
    <tr>
        <td>Nhập lại mât khẩu mới: </td>
        <td><input type="password" name="email" id="repassword" value=""/></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="sendmail" id="sendmail" onclick="return send_post();">Reset mật khẩu</button></td>
    </tr>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        $(".news_notice").hide();
    
    });
    function send_post(){
        var _name = $("#name").val(),
            _email = $("#newpassword").val(),
            _content=$("#repassword").val();
            
            if(_name == ""){
                $(".news_notice").show();
                $(".news_notice").html("Không để trống tài khoản hoặc email");
                $("#name").focus();
            }else if(_email == ""){
                $(".news_notice").show();
                $(".news_notice").html("Không để trống mật khẩu");
                $("#newpassword").focus();
            }else if(_email.length < 6){
                $(".news_notice").show();
                $(".news_notice").html("Mật khẩu không ngắn hơn 6 ký tự");
                $("#newpassword").focus();
            }else if(_content == ""){
                $(".news_notice").show();
                $(".news_notice").html("Nhập lại mật khẩu không được trống");
                $("#repassword").focus();
            }else if(_email != _content){
                $(".news_notice").show();
                $(".news_notice").html("Mật khẩu nhập lại không khớp");
                $("#repassword").focus();
            }else{
                $.post('<?=base_url()?>home/membership/forgot_pass/reset',{name:_name,email:_email},function(data){
                    if(data){
                         $(".news_notice").show();
                         $(".news_notice").html("Reset mật khẩu thành công");
                    } else{
                         $(".news_notice").show();
                         $(".news_notice").html("Reset mật khẩu lỗi");
                    }
                });    
            }
            
    }
</script>