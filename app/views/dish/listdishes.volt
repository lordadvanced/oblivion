<div class="portlet-body">
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
            <?php $i=1; foreach($dish_data as $item){ if($i==1){ ?>

            <li class="active">
                <?php }else{ ?>
                <li>
                    <?php };?>
                    <a href="#tab_6_<?php echo $i;?>" data-toggle="tab">
                        <?php echo $item[ 'dtype_name'];?>
                    </a>
                </li>
                <?php $i++;};?>
        </ul>
        <div class="tab-content">

            <?php $j=1; foreach($dish_data as $item2){ ?>
            <?php if ($j == 1): ?>
            <div class="tab-pane active" id="tab_6_<?php echo $j;?>">
            <?php endif; ?>
             <?php if ($j != 1): ?>
                <div class="tab-pane fade" id="tab_6_<?php echo $j;?>">
                   <?php endif; ?>
                        <div class="col-md-8" id="load_dishes_<?php echo $j;?>">
                            <div class="row mix-grid hotpickfood">
                                <?php foreach($item2[ 'data'] as $dish){ ?>
                                <p>


                                    <div class="col-md-4 col-sm-4 mix " style="display: block; opacity: 1;">
                                        <div class="mix-inner border-item">
                                            <img class="img-responsive" src="<?php echo $dish['dish_image'];?>" alt="">
                                            <div class="mix-details" style="opacity: 0.9;">
                                                <h4><?php echo $dish['dish_name'];?></h4>

                                                <a class="mix-link" href="/dish/getdishfororder?dish_id=<?php echo $dish['dish_id'];?>" data-target="#order_dish" data-toggle="modal">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </p>
                                <?php };?>
                            </div>
                        </div>
                </div>
                <?php $j++; };?>

            
        </div>
    </div>
</div>