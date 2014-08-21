<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Shooping Cart</h4>
											</div>
                                            <div class="modal-body">
<div class="portlet-body">
    <div class="panel-group accordion" id="accordion3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_4_1">
											 <?php echo $t->_("dish_detail");?>
										</a>
										</h4>
            </div>
            <div id="collapse_4_1" class="panel-collapse collapse in">
                <div class="panel-body">
<div class="row" style="margin-right: 0px;">	
	<div class="row" style="border-bottom: solid 1px black;margin-bottom:10px">
                                                    <div class="col-md-2 col-md-offset-1 bor_cart">
                                                    <?php echo $t->_("image");?>
                                                    </div>
													<div class="col-md-2 col-md-offset-1 bor_cart">
														 <?php echo $t->_("name");?>
													</div>
                                                    <div class="col-md-2 col-md-offset-1 bor_cart">
														 <?php echo $t->_("description");?>
													</div>
													<div class="col-md-3 bor_cart">
														<?php echo $t->_("price");?>
													</div>
												</div>
                                                <div id="list_item" >
                                                <input type="hidden" id="dish_id_list" value="<?php echo $dish_id_list;?>"/>
     <?php for($i=0;$i<sizeof($dish_list);$i++){ ?>
												<div class="row">
                                                    <div class="col-md-2 col-md-offset-1 bor_cart">
                                                    <img src=" <?php echo $dish_list[$i]['dish_image'];?>" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="col-md-2 col-md-offset-1 bor_cart">
                                                    	<p><?php echo $dish_list[$i]['dish_name'];?></p>
                                                    </div>
													<div class="col-md-2 col-md-offset-1 bor_cart">
														<p><?php echo $dish_list[$i]['dish_description'];?></p>
													</div>
													<div class="col-md-3 bor_cart">
														20,000 VND
													</div>
												</div>
      <?php };?>
												<!-- Money 
												<div class="row">
													<div class="col-md-2 col-md-offset-1 bor_cart">
														
													</div>
            	                                    <div class="col-md-2 col-md-offset-1 bor_cart">
															
													</div>
													<div class="col-md-2 col-md-offset-1 bor_cart">
													   <strong>Tong Tien</strong>
													</div>
													<div class="col-md-3 bor_cart">
														<strong>60,000 VND</strong>
													</div>
											</div>												
</div>-->
</div>
<div class="modal-footer">
											<a href="/cart/clearcart"><button class="btn btn-danger" ><?php echo $t->_("clear_cart");?></button></a>	
											<label style="float: right;" id="dish_order_next_step" onclick="load_dish_form_info();" class="btn blue">Next Step</label>
											</div>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_4_2">
											 <?php echo $t->_("order_dish");?>
										</a>
										</h4>
                </div>
                <div id="collapse_4_2" class="panel-collapse collapse">
                    <div class="panel-body" style="height:300px; overflow-y:auto;">
                        <form id="order_form" class="form-horizontal form-bordered" action="/order/add">
                            <div class="form-body">
                                <div class="form-group">
                                    <input type="hidden" id="dish_id" name="dish_id" value="<?php echo $dish_list['dish_id'];?>" />
                                    <label class="control-label col-md-3">
                                        <?php echo $t->_("choose_time");?></label>
                                    <div class="col-md-8">
                                        <input name="dish_time" id="dish_time" class="form-control input-medium date-picker" onmouseover="loaddatetime();" onclick="loaddatetime();" size="16" type="text" value="" />
                                        <div id="order_time_error" class="error order_time_error" style="display:none;">
                                                                                <br />
                                                                                <?php echo $t->_("order_time_null_error");?></div>
                                    </div>
                                     
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">
                                        <?php echo $t->_("dish_time");?></label>
                                    <div class="col-md-8">
                                        <div class="radio-list" style="padding-left: 20px;">
                                            <label class="radio-inline">
                                                <input type="radio" name="dish_time_type" id="dish_time_type" value="am" checked="" />AM</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="dish_time_type" id="dish_time_type" value="pm" checked="" />PM</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">
                                        <?php echo $t->_("description");?></label>
                                    <div class="col-md-9">
                                        <textarea id="dish_note" name="dish_note" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                                                  <label style="float: right;" id="next_step" onclick="load_dish_order_info();" class="btn blue">Next Step</label>
                                 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_4_3">
											 <?php echo $t->_("order_detail");?>
										</a>
										</h4>
                </div>
                <div id="collapse_4_3" class="panel-collapse collapse">
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
																dish name :
															</div>
															<div class="col-md-7 value" id="name_value">
                                                            <?php
                                                                foreach($dish_list as $dish) 
                                                                echo $dish['dish_name'].",";
                                                            ?>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order Date & Time:
															</div>
															<div class="col-md-7 value" id="order_date">
															</div>
														</div>
                                                        <div class="row static-info">
															<div class="col-md-5 name">
																 Order Time Type:
															</div>
															<div class="col-md-7 value">
															     <div class="col-md-7 value" id="order_time">
															     </div>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Order Note:
															</div>
															<div class="col-md-7 value">
															     <div class="col-md-7 value" id="order_note">
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
                                                                    if(isset($admin_option[0]['price']))
                                                                    echo $admin_option[0]['price']." VND";
                                                                    else echo "No have price! Please choose dish again!" 
                                                                 ?>
															     </div>
															</div>
														</div>
                                                        <div class="row static-info" >
                                                        <div class="col-md-7 value">
                                                            <div id="order_success" class="col-md-12 value success" style="display: none;"><?php echo $t->_("order_success");?></div>
                                                            <div id="order_error" class="col-md-12 value error" style="display: none;"><?php echo $t->_("order_error");?></div>
                                                             <div id="order_date_error" class="col-md-12 value error" style="display: none;"><?php echo $t->_("date_order_error");?></div>
                                                        </div>
														</div>
                                                        <div class="form-group" style="float:right;">
                                    <button class="btn btn-danger" data-dismiss="modal">
                                        <?php echo $t->_("close");?></button>
                                    </a>
                                    <a href="#r">
                                   	<button class="btn green" onclick="submit_order_dish();return false;"><?php echo $t->_("check_out");?></button>
                                       </a>

                                </div>
													</div>
												</div>
											</div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>