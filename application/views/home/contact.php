<table id="tbl_userprofile">
    <tr>
        <td>Tên người gửi</td>
        <td><input type="text" name="name" id="name" value=""/></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input type="text" name="email" id="email" value=""/></td>
    </tr>
    <tr>
        <td>Nội dung:</td>
        <td><textarea name="content" id="content" rows="15" cols="70"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><button name="sendmail" id="sendmail" onclick="return send_mail();">Gửi liên hệ</button></td>
    </tr>
</table>
<script type="text/javascript">
    function send_mail(){
        var _name = $("#name").val(),
            _email = $("#email").val(),
            _content=$("#content").val();
            
            $.post('<?=base_url()?>home/home/contact/send',{name:_name,email:_email,content:_content},function(data){
                alert(data);
                location.reload();  
            });
    }
</script>