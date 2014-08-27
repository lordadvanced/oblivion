<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i><?php echo $t->_("delete_order_info");?>
        </div>
        <div class="tools">
            <a href="#" data-dismiss="modal" class="close"></a>
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN ADD DISH FORM-->

        <div class="panel-body" style="height:400px; overflow-y:auto;">
                    <div class="col-md-12 col-sm-12">
												<div class="portlet yellow box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i><?php echo $t->_("order_detail");?>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																Dish Name :
															</div>
															<div class="col-md-7 value" id="name_value">
                                                            <?php
                                                                foreach($order_detail['dish_detail'] as $dish) 
                                                                echo $dish['dish_name'].",";
                                                            ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order Date & Time:
															</div>
															<div class="col-md-7 value" id="order_date">
                                                            <?php echo $order_detail['apply_date'];?>
															</div>
														</div>
                                                        <div class="row static-info">
															<div class="col-md-5 name">
																 Order Time Type:
															</div>
															<div class="col-md-7 value">
															     <div class="col-md-7 value" id="order_time">
                                                                 <?php echo $order_detail['apply_shift'];?>
															     </div>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order Note:
															</div>
															<div class="col-md-7 value">
															     <div class="col-md-7 value" id="order_note">
                                                                 <?php echo $order_detail['order_note'];?>
															     </div>
															</div>
														</div>
                                                        <div class="row static-info">
															<div class="col-md-5 name">
																 <?php echo $t->_("total");?>:
															</div>
															<div class="col-md-7 value">
															     <div class="col-md-7 value">
                                                                 <?php
                                                                    $admin_option = $this->session->get('admin_option');
                                                                    if(isset($order_detail['order_price']))
                                                                    echo $order_detail['order_price']." VND";
                                                                    else echo "No have price!" 
                                                                 ?>
															     </div>
															</div>
														</div>
                                                        <div class="row static-info" >
                                                        <div class="col-md-7 value">
                                                            <div id="delete_order_success" class="col-md-12 value success" style="display: none;"><?php echo $t->_("delete_combo_success");?></div>
                                                            <div id="delete_order_fail" class="col-md-12 value error" style="display: none;"><?php echo $t->_("delete_combo_error");?></div>
                                                             <div id="del_unknown_error" class="col-md-12 value error" style="display: none;"><?php echo $t->_("unknown");?></div>
                                                        </div>
														</div>
                                                        <div class="form-group" style="float:right;">
                                
                          
                                   
                                        <button class="btn green" data-dismiss="modal">
                                        <?php echo $t->_("close");?></button>
                                    <input type="hidden" id="order_id_del" value="<?php echo $order_detail['order_id'];?>" />
                                   	<button onclick="delete_order();return false;" id="delete_order_submit" class="btn btn-danger"><?php echo $t->_("delete");?></button>

                           

                                </div>
													</div>
												</div>
											</div>
                    </div>
        <!-- END FORM-->
    </div>
</div>
</div>