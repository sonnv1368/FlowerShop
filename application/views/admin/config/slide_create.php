<div class="page-right">
    <div class="right_post">
        <div class="slide_notice"></div>
        <form action="<?= base_url()?>admin/home/cofiguration/save" method="post" enctype="multipart/form-data" id="image-config" >
        <label for="title">
            <input type="text" name="name" value="" placeholder="Nhập tên cấu hình" id="name" style="width: 90%;"/>
        </label>
        <label for="content">
            <textarea name="content" id="desc" class="desc" rows="10" style="width: 90%;">
            </textarea>
        </label>
        <label>
            <span class="image"><input type="file" name="slide[]" value="" placeholder="Nhập tên cấu hình" /></span>
            <a href="#" id="add_filr" onclick="return add_images()" >Thêm ảnh</a>
        </label>
        <br />
        <label for="type">
            <select name="type" style="width: 40%;">
                <option value="">Chọn</option>
                <option value="img">Ảnh</option>
                <option value="yahoo">Nick Yahoo</option>
            </select>
        </label>
        
        <label for="post">
            <input type="submit" name="post" class="post" id="post" value="Tạo cài đặt" style="width: 50%;" onclick="return submit_form('image-config');"/>
        </label>
        </form>
    </div>
</div>
<script type="text/javascript">
    function add_images(){
        var _images = '<input type="file" name="slide[]" value="" placeholder="Nhập tên cấu hình" />';
       
        $(".image").append(_images);
    }
    
    function submit_form(_form_id){
         $("#"+_form_id).ajaxForm({
            
            success: function(responseText){
                alert("OK");
                $("#"+_form_id).resetForm();
                $(".slide_notice").html(responseText);
                
            }
        });
    }
</script>