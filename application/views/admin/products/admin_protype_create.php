<div class="page-right">
    <?php if(empty($_cate_data)){ ?>
            <div class="admin_home">
        <div class="protype_notice"></div>
        <form action="<?=base_url(); ?>admin/products/create_categories/savetodb" method="post" name="fl_protype" id="fl_protype" enctype="multipart/form-data">
            <table class="protype_creat">
                <tr>
                    <td>Tên danh mục: </td>
                    <td><input type="text" value="" name="name" id="name" class="name" placeholder="Nhập tên danh mục"/></td>
                </tr>
                <tr>
                    <td>Mô tả: </td>
                    <td><textarea name="desc" id="desc" class="desc">Nhập mô tả cho danh mục</textarea></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện: </td>
                    <td><input type="file" name="protype[]" value="" id="protype" /></td>
                </tr>  
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Tạo danh mục" id="submit" class="submit" onclick="return submit_form('protype');"/></td>
                </tr>  
            </table>
        </form>
    </div>
        
    <?php }else{ ?>
        <div class="admin_home">
        <div class="protype_notice"></div>
        <?php  foreach($_cate_data as $_cate): ?>
        <form action="<?=base_url(); ?>admin/products/edit_cate_products/save-cate/<?=$_cate->ma?>" method="post" name="fl_protype" id="fl_protype" enctype="multipart/form-data">
            <table class="protype_creat">
                <tr>
                    <td>Tên danh mục: </td>
                    <td><input type="text" value="<?=$_cate->tendanhmuc?>" name="name" id="name" class="name" placeholder="Nhập tên danh mục"/></td>
                </tr>
                <tr>
                    <td>Mô tả: </td>
                    <td><textarea name="desc" id="desc" class="desc"><?=$_cate->mota ?></textarea></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện: </td>
                    <td><input type="file" name="protype[]" value="" id="protype" />
                        <input type="hidden" name="hid_protype" value="" id="hid_protype" />
                        <img src="<?=$_cate->anh?>" width="200" height="200"/>
                    </td>
                </tr>  
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Lưu thay đổi" id="submit" class="submit" onclick="return submit_form('protype');"/></td>
                </tr>  
            </table>
        </form>
        <?php endforeach;?>
    </div>
    <?php }?>
</div>
<script type="text/javascript">
    
    function submit_form(_form_id){
        $("#hid_protype").val($("#protype").val());
         $("#"+_form_id).ajaxForm({

            success: function(responseText){
                alert("OK");
                $("#"+_form_id).resetForm();
                $(".protype_notice").html(responseText);
                
            }
        });
    }
</script>