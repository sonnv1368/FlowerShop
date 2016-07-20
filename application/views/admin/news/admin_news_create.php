<div class="page-right">
<?php if(empty($_admin_data)): ?>
    <div class="right_post">
        <div class="news_notice"></div>
        <label for="title">
            <input type="text" name="title" value="" placeholder="Nhập tiêu đề bài viết" id="title"/>
        </label>
        <label for="content">
            <textarea name="content" id="content" class="content" rows="15">
            </textarea>
        </label>
        <label for="type">
            <select name="type" id="type">
                <option value="">Chọn loại tin</option>
                <option value="news">Tin tức</option>
                <option value="about">Giới thiệu</option>
            </select>
        </label>
        <label for="post">
            <button type="submit" name="post" class="post" id="post" onclick="post_news()"> Đăng tin</button>
        </label>
    </div>
<?php else: ?>
        <?php foreach($_admin_data as $_admin){?>
            <div class="right_post">
        <div class="news_notice"></div>
        <label for="title">
            <input type="text" name="title" value="<?=$_admin->tieude?>" placeholder="Nhập tiêu đề bài viết" id="title"/>
            <input type="hidden" name="hid_id" id="hid_id" value="<?=$_admin->ma?>"/>
        </label>
        <label for="content">
            <textarea name="content" id="content" class="content" rows="15">    
                <?=$_admin->noidung?>
            </textarea>
        </label>
        <label for="type">
            <select name="type" id="type">
                <option value="">Chọn loại tin</option>
                <option value="news" <?php if($_admin->loai_tin == 'news') echo 'selected=selected';?>>Tin tức</option>
                <option value="about" <?php if($_admin->loai_tin == 'about') echo 'selected=selected';?>>Giới thiệu</option>
            </select>
        </label>
        <label for="post">
            <button type="submit" name="post" class="post" id="post" onclick="save_news()">Lưu tin</button>
        </label>
    </div>
       <?php }?>
<?php endif;?>
</div>
<script type="text/javascript">
    function post_news(){
        var _title = $("#title").val(),
            _content = tinyMCE.get('content').getContent(),
            _type = $("#type option:selected").val();
           
        $.post('<?= base_url()?>admin/news/post_news/post',{title:_title,content:_content,type:_type},function(outData){
            alert(outData);
            location.reload();
        });
    }
    
    function save_news(){
        var _title = $("#title").val(),
            _content = tinyMCE.get('content').getContent(),
            _type = $("#type option:selected").val(),
            _hid  = $("#hid_id").val();
           
        $.post('<?= base_url()?>admin/news/post_news/save',{id:_hid,title:_title,content:_content,type:_type},function(outData){
            alert(outData);
            location.reload();
        });
    }
</script>