<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	<h4 class="modal-title"><?php echo $t->_("dish_for_order");?></h4>
</div>
<div class="modal-body">
<div id="collapse_3_1" class="panel-collapse in">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-5">
																<img style="width:200px" src="<?php echo $dish_list['dish_image'];?>" alt="" class="img-responsive">
																<ul class="list-inline blog-tags">
																	<li>
																		<i class="fa fa-tags"></i>
																		<a href="#">
																		<?php echo $dish_list['dtype_detail']['dtype_name'];?>
																		<input type="hidden" id="dish_id" value="<?php echo $dish_list['dish_id'];?>" />
                                                                        </a>
																	</li>
																</ul>
															</div>
															<div class="col-md-5">
																<h3>
																	
																		<?php echo $dish_list['dish_name'];?>
																
																</h3>

																<p>
																	<?php echo $dish_list['dish_description'];?><br>
																	<?php echo $t->_("dish_price");?>: 50,000 VND
																</p>
                                                               <?php
            $access = $this->session->get('accessCode');
             if(isset($access)){ ?>                                 
																<div class="row">
																	<div class="col-md-10 col-md-offset-1">
																		<a class="btn order" href="#" onclick="add_cart();return false;">
																			<img src="/assets/img/success-icon.png">
																		</a>
																		<a class="btn order" data-dismiss="modal" href="#l">
																			<img src="/assets/img/cancel.png">
																		</a>
																	</div>
																</div>
                                                                <? };?>
															</div>
		</div>
        	<div class="col-md-12">
                <div class="control-label col-md-12" style="display:none;color:green" id="add_cart_success"><?php echo $t->_("add_cart_success");?></div>
                <br />
                <div class="control-label col-md-12" style="display:none;color:red" id="add_cart_fail"><?php echo $t->_("add_cart_fail");?></div>                       
                <br />
                <div class="control-label col-md-12" style="display: none;color:green" id="return_mess_price" ><?php echo $t->_("suggest_dish_price");?><span id="mess_price"></span></div>
                <br />
                <div class="control-label col-md-12" style="display: none;color:green" id="return_mess_dtypename" ><?php echo $t->_("suggest_dtype_name");?><span id="mess_dtypename"></span></div>
            </div>
            
	</div>
    </div>
    
</div>