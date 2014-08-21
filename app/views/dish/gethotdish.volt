
    <!--BODY TEXT-->
    <div class="col-md-12" style="text-align:center; color: #9cd159; font-family: cursive;margin-bottom: -15px;margin-top: -20px;">
        <h2><strong><?php echo $t->_("list_hot_food");?></strong></h2>
        <br>
    </div>
    <!--Tab content-->
    <div class="row mix-grid hotpickfood">
        <?php for($i=0;$i<9;$i++){ ?>
        <div class="col-md-4 col-sm-4 mix mix_all" style="display: block; opacity: 1;">
            <div class="mix-inner border-item">
                <img class="img-responsive" src="<?php echo $dish_list[$i]['dish_image'];?>" alt="">
                <div class="mix-details" style="opacity: 0.9;">
                    <h4><?php echo $dish_list[$i]['dish_name'];?></h4>

                    <a class="mix-link" href="/dish/getdishfororder?dish_id=<?php echo $dish_list[$i]['dish_id'];?>"  data-target="#order_dish" data-toggle="modal">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php }; ?>
    </div>

    <!-- END FILTER EACH-->
    <!-- BEGIN MODAL-->
    
