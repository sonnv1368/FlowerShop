<div class="content">
    <?php if(!empty($_news_data)):  
            foreach($_news_data as $_data){?>
                <div class="news-block">
                    <?php $img = $this->defaultlib->get_thumbs($_data->noidung); ?>
                     <img src="<?= $img?>" width="150" height="150"/>
                   <p><h3><a href="<?=base_url()?>home/home/news/views/<?=$_data->ma?>"><?php echo $_data->tieude; ?></a></h3></p>                 
                   <?php $this->defaultlib->title_limits(400,$_data->noidung); ?>
                </div>
    <?php   }
           endif;
    ?>
</div>