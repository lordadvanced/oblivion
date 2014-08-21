<?php foreach($combo_list as $combo){ ?>
<div class="col-md-4 col-sm-4 mix " style="display: block; opacity: 1;">
    <div class="mix-inner border-item">
        <img class="img-responsive" src="<?php echo $combo['dish_detail'][0]['dish_image'];?>" alt="">
        <div class="mix-details" style="opacity: 0.9;">
            <h3><?php echo $combo['combo_name'];?></h3><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
            <p>
                <?php echo $t->_("included");?>:
                <?php echo $combo[ 'combo_description'];?>
                <br>
                <br>
                <?php echo $t->_("price");?>:
                <?php echo $combo[ 'combo_price'];?>VND
            </p>
            <?php
            $access = $this->session->get('accessCode');
             if(isset($access)){ ?>
             <a class="mix-link" href="/combo/getcombofororder?combo_id=<?php echo $combo['combo_id'];?>"  data-target="#pick_combo_modal" data-toggle="modal">
                <i class="fa fa-shopping-cart"></i>
            </a>
            <?php } else {?>
            <a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
                <i class="fa fa-search"></i>
            </a>
            <?php };?>
        </div>
    </div>
</div>
<?php }; ?>