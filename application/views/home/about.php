<div class="content">
   <?php if(!empty($_views_content)):
            foreach($_views_content as $content):?>
                <h3><?=$content->tieude?></h3>
                <?= $content->noidung?>       
   <?php    endforeach;
         endif;            
   ?>
</div>