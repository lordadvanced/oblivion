<div id="tab_2-2" class="tab-pane">
  <!--ADD DISH TYPE-->
                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-reorder"></i>
                                                                <?php echo $t->_("add_dish_type");?>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="#" class="collapse">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form id="add_dishtype_form" name="add_dishtype_form" action="#" class="form-horizontal form-bordered" >
                                                                <div class="form-body">
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3" name="return_mess" id="return_mess"></label>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("dishtype_name"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" name="dishtype_name" id="dishtype_name" class="form-control" placeholder="<?php echo $t->_("enter_dishtype_name");?>">
                                                                            <div class="error_dishtype" id="error_dishtype" style="display: none;">
                                                                                <?php echo $t->_("dishtype_null");?></div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("dishtype_desc");?></label>
                                                                        <div class="col-md-9">
                                                                            <textarea class="form-control" id="dishtype_desc" name="dishtype_desc" rows="3" placeholder="<?php echo $t->_("enter_dishtype_desc");?>"></textarea>
                                                                            <div class="error_dishtype_desc" id="error_dishtype_desc" style="display: none;">
                                                                                <?php echo $t->_("desc_null");?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                <button name="submit_dishtype" id="submit_dishtype" type="button" onclick="return submit_dish_type();" class="btn blue"><i class="fa fa-check"></i> 
                                                                                    <?php echo $t->_("submit");?></button>
                                                                                <button type="reset" class="btn default">
                                                                                    <?php echo $t->_("reset");?></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body form list_dishtype_full" id="list_dishtype_full" >
						                      	<!-- BEGIN FORM-->
                                                    <div id="form_list_dishtype">
                                                            <script>$('#form_list_dishtype').load('dishtypemanagement/all');</script>
                                                    </div>
						                    	<!-- END FORM-->
					                               	</div>
                                                    </div>