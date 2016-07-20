<div class="page-right">
    <?php if(!isset($_pro_data)):?>
        <div class="admin_home">
        <div class="protype_notice"></div>
        <form action="<?=base_url(); ?>admin/products/create_products/savetodb_pro" method="post" name="fl_products" id="fl_products" enctype="multipart/form-data">
            <table class="protype_creat">
                <tr>
                    <td>Tên sản phẩm: </td>
                    <td><input type="text" value="" name="name" id="name" class="name" placeholder="Nhập tên danh mục"/>
                    </td>
                </tr>
                <tr>
                    <td>Danh mục: </td>
                    <td>
                        <select name="danhmuc">
                            <option value="">Chọn</option>
                            <?php 
                                foreach($_adm_type as $type):
                                    echo '<option value="'.$type->ma.'">'.$type->tendanhmuc.'</option>';
                                endforeach;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mô tả: </td>
                    <td><textarea name="desc" id="desc" class="desc">Nhập mô tả cho danh mục</textarea></td>
                </tr>
                <tr>
                    <td>Giá nhập: </td>
                    <td><input type="text" name="inprice" value="" id="inprice" class="price" /></td>
                </tr>
				 <tr>
                    <td>Giá bán: </td>
                    <td><input type="text" name="price" value="" id="price" class="price" /></td>
                </tr>
                <tr>
                    <td>Số lượng: </td>
                    <td><input type="text" name="quantity" value="" id="quantity" class="quantity" /></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện: </td>
                    <td><input type="file" name="products[]" value="" id="products" /></td>
                </tr>  
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Thêm sản phẩm mới" id="submit" class="submit" onclick="return submit_form('fl_products');"/></td>
                </tr>  
            </table>
        </form>
    </div>       
    <?php else: ?>
          <div class="admin_home">
        <div class="protype_notice"></div>
        <?php foreach($_pro_data as $_pro):?>
        <form action="<?=base_url(); ?>admin/products/edit_products/save/<?= $_pro['ma']?>" method="post" name="fl_products" id="fl_products" enctype="multipart/form-data">
            <table class="protype_creat">
                <tr>
                    <td>Tên sản phẩm: </td>
                    <td><input type="text" value="<?=$_pro['tensp']?>" name="name" id="name" class="name" placeholder="Nhập tên danh mục"/>
                        <input type="hidden" value="<?=$_pro['ma']?>" />
                    </td>
                </tr>
                <tr>
                    <td>Danh mục: </td>
                    <td>
                        <select name="danhmuc">
                            <option value="">Chọn</option>
                            <?php 
                                foreach($_adm_type as $type):
                                    if($type->ma == $_pro['ma_danhmuc'] ):
                                        echo '<option value="'.$type->ma.'" selected="selected">'.$type->tendanhmuc.'</option>';
                                    else:
                                        echo '<option value="'.$type->ma.'">'.$type->tendanhmuc.'</option>';
                                    endif;
                                endforeach;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mô tả: </td>
                    <td><textarea name="desc" id="desc" class="desc"><?=$_pro['mota'] ?></textarea></td>
                </tr>
				<tr>
                    <td>Giá nhập: </td>
                    <td><input type="text" name="inprice" value="<?=$_pro['gianhap']?>" id="inprice" class="price" /></td>
                </tr>
                <tr>
                    <td>Giá bán: </td>
                    <td><input type="text" name="price" value="<?=$_pro['giaban']?>" id="price" class="price" /></td>
                </tr>
                <tr>
                    <td>Số lượng: </td>
                    <td><input type="text" name="quantity" value="<?=$_pro['soluong']?>" id="quantity" class="quantity" /></td>
                </tr>
                <tr>
                    <td>Ảnh đại diện: </td>
                    <td>
                    <input type="file" name="products[]" value="" id="products" />
                    <input type="hidden" name="hid_products" value="" id="hid_products"/>
                    </td>
                </tr>  
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Lưu thay đổi" id="submit" class="submit" onclick="return submit_form('fl_products');"/></td>
                </tr>
                 
            </table>
        </form>
         <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>
<script type="text/javascript">
    function submit_form(_form_id){
        $("#hid_products").val($("#products").val());
         $("#"+_form_id).ajaxForm({
            
            success: function(responseText){
                alert("OK");
                $("#"+_form_id).resetForm();
                $(".protype_notice").html(responseText);
                
            }
        });
    }
</script>