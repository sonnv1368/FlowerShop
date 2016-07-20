<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
	<meta name="author" content="bachnx" />
	<title>Quản trị | Đăng nhập</title>
    	
	<link rel="shortcut icon" href="<?= base_url()?>application/views/includes/admin/favicon.png" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?= base_url()?>application/views/includes/admin/css/login.style.css" media="screen" />
    <script type="text/javascript">
    $(document).ready(function(){
         $(".err_usr").hide();
         $(".err_pwd").hide();
    });
        /**
        * @function validation_form()
        * @description
        */
        function validation_form(){
          
           //Lấy thông tin từ form đăng nhập.
            var _username = $(".username").val();
            var _password = $(".password").val();
            var _user_err = $(".err_usr");
            var _pass_err = $(".err_pwd");
            
            //Kiểm tra tài khoản và mật khẩu có trống hay ko.
            if(_username == "" && _password == ""){
                _user_err.html("Không để trông tên đăng nhập!");
                _pass_err.html("Không để trông mật khẩu");
                _user_err.show(1000);
                _pass_err.show(1000);
                $("#username").focus();
            }else
            
            //Kiểm tra tài khoản có trống hay ko.
            if(_username == ""){
                _user_err.html("Không để trông tên đăng nhập!");
                _pass_err.html("");
                _user_err.show(1000);
                $(".username").focus();
            }else
             //kiểm tra mật khẩu có trống hay ko.
            if(_password == ""){
                _user_err.html("");
                _pass_err.html("Không để trống mật khẩu");
                _pass_err.css('right','-185px');
                _pass_err.show(1000);
                $(".password").focus();
            }else
            //Kiểm tra mật khẩu không được dưới 6 ký tự.
            if(_password.length < 6){
                _user_err.html("");
                _pass_err.html("Mật Khẩu không ngắn hơn 6 ký tự");
                _pass_err.css('right','-239px');
                _pass_err.show(1000);
                $("#password").focus();
            }else{
                //Kết quả kiểm tra đúng => gửi thông tin sang controller xử lý đăng nhập.
                $.post('<?=base_url(); ?>admin/login/checklogin',{username:_username,password:_password},function(data){
                    if(data == "true"){
                        //Kết quá trả về đúng => chuyền hướng tới trang chủ quản trị
                       window.location = '<?=base_url().'admin/home';?>';
                    }else{
                        //Kết quả trả về sai => Thông báo lỗi trên form đăng nhập.
                        $(".err").html("Tên đăng nhập hoặc mật khẩu sai, vui lòng kiểm tra lại");
                    }
                });
            }
        }
    </script>
    
</head>
<body>
  <!--</a>  <div id="wrapper_log">
        <div class="right">
            <h2>Đăng Nhập</h2>
            <span class="err"><?php if(!empty($_adm_err)): echo $_adm_err; endif;?></span>          
               <p>
                    Tên đăng nhập:
                    <input type="text" name="username" id="username" value="" placeholder="Nhập tên tài khoản"/>
                    <p><span class="err_usr"></span></p> 
                </p>
                <p>
                    Mật khẩu:
                    <input type="password" name="password" id="password" value="" placeholder="Nhập tên tài khoản"/>
                    <p><span class="err_pwd"></span></p> 
               </p>
                <p>
                    <button type="submit" name="submit" value="Đăng Nhập" id="submit" onclick="validation_form()">Đăng Nhập</button>
                </p>
            
        </div>
        <div class="clear"></div>
    </div>
    -->
    <div id="wrapper">
		<div id="wrappertop"></div>
        
		<div id="wrappermiddle">

			<h2>Đăng Nhập</h2>
                
			<div id="username_input">
                    <span class="err"><?php if(!empty($_adm_err)): echo $_adm_err; endif;?></span>
				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				
					<input type="text" name="link" id="url" value="Nhập tên tài khoản" onclick="this.value = ''"  class="username"/>
					<img id="url_user" src="<?= base_url()?>application/views/includes/admin/images/mailicon.png" alt="" />
                    <p><span class="err_usr"></span></p>
				
				</div>

				<div id="username_inputright"></div>

			</div>

			<div id="password_input">

				<div id="password_inputleft"></div>

				<div id="password_inputmiddle">
					<input type="password" name="link" id="url" value="Nhập mật khẩu" onclick="this.value = ''" class="password"/>
					<img id="url_password" src="<?= base_url()?>application/views/includes/admin/images/passicon.png" alt="" />
                    <p><span class="err_pwd"></span></p>
				</div>

				<div id="password_inputright"></div>

			</div>

			<div id="submit">
				<input type="image" src="<?= base_url()?>application/views/includes/admin/images/submit_hover.png" id="submit1" value="Đăng Nhập" onclick="validation_form()" />
				<input type="image" src="<?= base_url()?>application/views/includes/admin/images/submit.png" id="submit2" value="Đăng Nhập" onclick="validation_form()" />
               
				
			</div>


			<div id="links_left">

			<a href="#">Quên mật khẩu?</a>

			</div>

		<!--	<div id="links_right"><a href="#">Not a Member Yet?</a></div>-->

		</div>

		<div id="wrapperbottom"></div>
	</div>
</body>
</html>