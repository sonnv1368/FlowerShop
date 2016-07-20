	$(document).ready(function(){
	       $("#price_name").hide();
	     var url = window.location;
         var pathname = url.pathname.split('/')[1];
         var base_url = url.protocol+'//'+url.host+'/'+pathname+'/';
         
		//Examples of how to assign the Colorbox event to elements
		$(".group1").colorbox({rel:'group1'});
		$(".group2").colorbox({rel:'group2', transition:"fade"});
		$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		$(".ajax").colorbox();
		$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
		$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"50%"});
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});

		$('.non-retina').colorbox({rel:'group5', transition:'none'})
		$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
		
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
        
        $("#submit").click(function(){
            var _uname = $("#username").val(),
                _upass = $("#password").val();
            $.post(base_url+'home/home/login',{username:_uname,password:_upass},function(outData){
                if(outData == 'true'){
                    window.location = base_url+'home/home/';
                }else{
                    alert("Sai tài khoản hoặc mật khẩu!");
                }
            });
        });
        
        $("#addcart").click(function(){
            var pid = $("#hid_id").val();
            var qty = $("#quantity").val();
            $.post(base_url+'home/cart/add_cart',{id:pid,quantity:qty},function(data){
                if(data == "true"){
                    window.location = base_url+'home/cart/';
                }
                if(data == "false"){
                    alert("Số lượng không đủ để đáp ứng");
                }
            });
        });
        
        $("#logout").click(function(){
            $.post(base_url+'home/home/logout',function(){
                window.location = base_url+'home/home/';
            });
                
        });
        
        $(".search").keypress(function(e){
            if(e.keyCode == 13){
                 var _search = $(".search").val();
                     
                 $.post(base_url+'home/products/search',{name: _search},function(data){
                    
                    $("#main_right").html(data);
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
            }
        });
        
         $(".ico_search").click(function(){
                var _search = $(".search").val();
               
                $.post(base_url+'home/products/search',{name: _search},function(data){
                    $("#main_right").html(data);
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
         });
         
      //   $(".search").autocomplete(base_url+'home/products/search/auto',{selectFirst:true});
         
         $("#user_login_name").click(function(){
            var _id = $("#username_log").val();
               
                $.post(base_url+'home/membership/userprofile',{uname: _id},function(data){
                    $("#main_right").html(data);
                });
         });
         
         $("input:radio[name=type_search]").change(function(){
            if($(this).val() == 'price'){
                $("#price_name").show();
                $(".search").attr("disabled", "disabled"); 
            }else{
                $("#price_name").hide();
                $(".search").removeAttr("disabled");
            }
         });    
         
         $("#price_name").change(function(){
            var _price = $("#price_name option:selected").val();
            
            $.post(base_url+'home/products/search',{price: _price},function(data){
                    $("#main_right").html(data);
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    return false;
                });
         });   
         
         
      $("#jquery_link a").click(function(){
		var url = $(this).attr("href");
		$.ajax({
			type: "POST",
			url: url,
			async: true,
			beforeSend: function(){
				$("#main_right").html("");
			},
			success: function(kq){
				$("#main_right").html(kq);
			}
		})
        
      /*  $.post(url,{ajax:'ajax'},function(data){
            $("#main_right").html(data);
        });*/
		return false;
	}); 
});

    function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    return false
		 }

 		 return true					
	}         