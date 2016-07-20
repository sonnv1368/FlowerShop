<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title><?= $_title;?></title>
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="shortcut icon" href="<?= base_url()?>application/views/includes/admin/favicon.png" />
	<link rel="apple-touch-icon" href="<?= base_url()?>application/views/includes/admin/apple-touch-icon.png" />
	<link rel="stylesheet" href="<?= base_url()?>application/views/includes/admin/css/style.css?v=2" />
	
	<!-- fluid 960 -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/admin/css/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/admin/css/layout.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/admin/css/grid.css" media="screen" />
	<!-- superfish menu -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/admin/css/superfish.css" media="screen" />
	<!-- tags css -->
	<link rel="stylesheet" href="<?= base_url()?>application/views/includes/admin/css/jquery.tagsinput.css" />
	<!-- treeview css -->
	<link rel="stylesheet" href="<?= base_url()?>application/views/includes/admin/css/jquery.treeview.css" />
	<!-- dataTable css -->
	<link rel="stylesheet" href="<?= base_url()?>application/views/includes/admin/css/demo_table_jui.css" />


	<!-- fluid GS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>application/views/includes/admin/css/fluid.gs.css" media="screen" />
	<!--[if lt IE 8 ]>
	<link rel="stylesheet" type="text/css" href="css/fluid.gs.lt_ie8.css" media="screen" />
	<![endif]-->

	<!-- //jqueryUI css -->
	<link type="text/css" href="<?= base_url()?>application/views/includes/admin/css/custom-theme/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
	
	<!-- //jquery -->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
	<script src="<?= base_url()?>application/views/includes/admin/js/libs/jquery-1.5.1.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<!-- //jqueryUI -->
	<script type="text/javascript" src="<?= base_url()?>application/views/includes/admin/js/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>application/views/includesadmin//js/jquery-fluid16.js"></script>
	<script src="<?= base_url()?>application/views/includes/admin/js/plugins.js"></script>
	<script src="<?= base_url()?>application/views/includes/admin/js/script.js"></script>
	
	<!-- //xoxco tags plugin https://github.com/xoxco/jQuery-Tags-Input -->
	<script src="<?= base_url()?>application/views/includes/admin/js/jquery.tagsinput.min.js"></script>
	<link rel="stylesheet" href="<?= base_url()?>application/views/includes/admin/css/jquery.tagsinput.css">
	
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<!-- modernizr -->
	<script src="<?= base_url()?>application/views/includes/admin/js/libs/modernizr-1.7.min.js"></script>
	
	<!-- superfish menu and needed js for menu -->
	<script src="<?= base_url()?>application/views/includes/admin/js/superfish.js"></script>
	<script src="<?= base_url()?>application/views/includes/admin/js/supersubs.js"></script>
	<script src="<?= base_url()?>application/views/includes/admin/js/hoverIntent.js"></script>

	<!-- treeview -->
	<script src="<?= base_url()?>application/views/includes/admin/js/jquery.treeview.js"></script>
	
	<!-- dataTable -->
	<script src="<?= base_url()?>application/views/includes/admin/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="<?= base_url()?>public/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
    
    tinyMCE.init({
	   //     mode : "textareas"
       
       
       	// General options
            mode : "textareas",
            theme : "advanced",
           // plugins : "safari,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager",
             
            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,|,image,,link,unlink",//,fontsizeselect",
          //  theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        //    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        //    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,
             
            // Drop lists for link/image/media/template dialogs
            /*template_external_list_url : "js/template_list.js",
            external_link_list_url : "js/link_list.js",
            external_image_list_url : "js/image_list.js",
            media_external_list_url : "js/media_list.js"*/
	});
		$(function(){

			
			//treeview for inner menus
			$("#browser").treeview({
				toggle: function() {
					console.log("%s was toggled.", $(this).find(">span").text());
				}
			});
			
			// menu superfish
			$('#navigationTop').superfish();
			
			// tags
			$("#tags_input").tagsInput();
			
			// dataTable
			var uTable = $('#example').dataTable( {
				"sScrollY": 200,
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			} );
			$(window).bind('resize', function () {
				uTable.fnAdjustColumnSizing();
			} );
			

			// Accordion
			$("#accordion").accordion({ header: "h3" });

			// Accordion2
			$("#accordion2").accordion({ header: "h3" });

			// Tabs
			$('#tabs').tabs();
			$('#tabsOut').tabs();


			// Dialog			
			$('#dialog').dialog({
				autoOpen: false,
				width: 600,
				buttons: {
					"Ok": function() { 
						$(this).dialog("close"); 
					}, 
					"Cancel": function() { 
						$(this).dialog("close"); 
					} 
				}
			});
			
			// Dialog Link
			$('#dialog_link').click(function(){
				$('#dialog').dialog('open');
				return false;
			});

			// Datepicker
			$('#datepicker').datepicker({
				inline: true
			});
			
			// Slider
			$('#slider').slider({
				range: true,
				values: [17, 67]
			});
			
			// Progressbar
			$("#progressbar").progressbar({
				value: 20 
			});
			
			//hover states on the static widgets
			$('#dialog_link, ul#icons li').hover(
				function() { $(this).addClass('ui-state-hover'); }, 
				function() { $(this).removeClass('ui-state-hover'); }
			);
			
		});
  
	</script>

</head>
<body>
<?php $name_session = $this->session->userdata('fl_adm_in'); ?>
    <div class="user-info">
                    <p>Xin chào, <?php 
                     if(isset($name_session['username'])): echo "<a href=\"".base_url()."admin/membership/system_user/edit/".$name_session["ma"]."\">".$name_session['username']."</a>"; endif;
                      ?> | 
                    <a href="<?=base_url()?>admin/login/logout">Đăng xuất</a></p>
                </div>
	<div class="container_16">
		<header>
			<div class="grid_16">
				<h1 id="branding"><a href="<?= base_url();?>home/home" target="_blank"><img src="<?= base_url()?>application/views/includes/admin/img/logo.png" /></a></h1>
			</div>
			<div class="clear"></div>
			<div class="grid_16">
				<ul class="sf-menu" id="navigationTop">
                    <?php if($name_session['ma_quyen'] == 1){?><li><a href="<?= base_url();?>admin/home/inventory">Báo cáo và thống kê</a></li><?php }?>
					<?php if($name_session['ma_quyen'] == 1){?><li><a href="<?= base_url();?>admin/membership/system_user">Quản lý nhân viên</a></li><?php }?>
					<?php if($name_session['ma_quyen'] == 1 || $name_session['ma_quyen'] == 2){?><li><a href="<?= base_url();?>admin/products/index">Quản lý sản phẩm</a></li>
                    <li><a href="<?= base_url();?>admin/products/index/type">Quản lý danh mục</a></li>
                    <li><a href="<?= base_url();?>admin/products/view_order">Quản lý đơn hàng</a></li><?php }?>
                    <?php if($name_session['ma_quyen'] == 1 || $name_session['ma_quyen'] == 3){?><li><a href="<?= base_url();?>admin/news">Quản lý tin tức</a></li><?php }?>
                    <?php if($name_session['ma_quyen'] == 1){?><li><a href="<?= base_url();?>admin/membership">Quản lý thành viên</a></li>
                    <li><a href="<?= base_url();?>admin/home/cofiguration">Quản lý cài đặt</a></li><?php }?>
				</ul>
                
			</div>
        </header>