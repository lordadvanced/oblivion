<div id="tab_1-1" class="tab-pane active">
                                                  
                                                    <!--ADD DISH -->
                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-reorder"></i>
                                                                <?php echo $t->_("add_dish_form");?>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="#" class="collapse">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN ADD DISH FORM-->
                                                            
                                                            <form action="/dishmanagement/insertdish" id="add_dish_form" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                                              <div class="form-group">
                                                                        <label style="width: 100%;text-align: center;" class="control-label col-md-6" name="return_dish_mess" id="return_dish_mess"></label>
                                                                </div>
                                                                <div class="form-body">
                                                                
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                        <?php echo $t->_("name");?></label>
                                                                        <div class="col-md-9">
                                                                            <input id="dish_name" name="dish_name" type="text" class="form-control" placeholder="<?php echo $t->_(" enter_name ");?>">
                                                                            <div id="dish_name_error" name="dish_name_error" class="error dish_name_error" style="display:none;"><br />
                                                                                <?php echo $t->_("dish_name_error");?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("defion");?></label>
                                                                        <div class="col-md-9">
                                                                            <textarea id="dish_desc" name="dish_desc" class="form-control" rows="3" placeholder="<?php echo $t->_(" enter_description ");?>"></textarea>
                                                                            <div id="dish_desc_error" name="dish_desc_error" class="error dish_desc_error" style="display:none;">
                                                                                <br />
                                                                                <?php echo $t->_("dish_desc_error");?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("dish_type");?></label>
                                                                        <div class="col-md-9">
                                                                            <div class="list_dishtype_select" id="list_dishtype_select">
                                                                               <script>$('.list_dishtype_select').load("/dish/getdishtype");</script>
                                                                            </div>
                                                                            <div id="dishtype_error" name="dishtype_error" class="error dishtype_error" style="display:none;">
                                                                                <br />
                                                                                <?php echo $t->_("dishtype_null_error");?></div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">Image Upload</label>
                                                                        <div class="col-md-9">
                                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                <div>
                                                                                    <span class="btn default btn-file">
														<span class="fileinput-new">
															 Select image
														</span>
                                                                                    <span class="fileinput-exists">
															 Change
														</span>
                                                                                    <input type="file" name="files[]" multiple >
                                                                                    </span>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix margin-top-10">
                                                                                <span class="label label-danger">
													 NOTE!
												</span>
                                                                                Image size no more than 3Mb.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                <button type="submit" name="dish_submit" id="dish_submit" value="Send File(s)" class="btn blue"><i class="fa fa-check"></i> Submit</button>
                                                                                <button type="button" class="btn default">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <!--LIST MENU FIELD-->
                                                   <div class="portlet-body form list_dish_full" id="list_dish_full" >
						                      	<!-- BEGIN FORM-->
                                                    <div id="form_list_dish">
                                                            <script>$('#form_list_dish').load('dish/getalldish');</script>
                                                    </div>
						                    	<!-- END FORM-->
					                               	</div>
                                                </div>
                                                