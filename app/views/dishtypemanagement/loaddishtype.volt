<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i><?php echo $t->_("edit_dishtype");?>
        </div>
        <div class="tools">
            <a href="#" data-dismiss="modal" class="close"></a>
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN ADD DISH FORM-->

        <form id="update_dishtype_form" name="update_dishtype_form" action="/dishtypemanagement/update" class="form-horizontal form-bordered" method="POST" >
                                                                <div class="form-body">
                                                                    <input type="hidden" id="dtype_id" name="dtype_id" value="<?php echo $list['dtype_id'];?>"/>
                                                                    <div class="form-group ">
                                                                        <div class="control-label col-md-6" style="display:none;color:green" id="update_success_dtype"><?php echo $t->_("update_success_dtype");?></div>
                                                                        <div class="control-label col-md-6" style="display:none;color:red;" id="update_fail_dtype"><?php echo $t->_("update_fail_dtype");?></div>
                                                                        <div class="control-label col-md-6" style="display:none;color:red" id="update_unknown_dtype"><?php echo $t->_("update_unknown_dtype");?></div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("dishtype_name"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <input value="<?php echo $list['dtype_name'];?>" type="text" name="update_dishtype_name" id="update_dishtype_name" class="form-control" placeholder="<?php echo $t->_("enter_dishtype_name");?>">
                                                                            <div class="error_update_dishtype" id="error_update_dishtype" style="display: none;">
                                                                                <?php echo $t->_("dishtype_null");?></div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("dishtype_desc");?></label>
                                                                        <div class="col-md-9">
                                                                            <textarea class="form-control" id="update_dishtype_desc" name="update_dishtype_desc" rows="3" placeholder="<?php echo $t->_("enter_dishtype_desc");?>"><?php echo $list['dtype_description'];?></textarea>
                                                                            <div class="error_update_dishtype_desc" id="error_update_dishtype_desc" style="display: none;">
                                                                                <?php echo $t->_("desc_null");?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-offset-3 col-md-9">
                                                                              <div class="col-md-offset-3 col-md-9">
                            <button type="button" onclick="submit_edit_dish_type();" name="dtype_update_submit" id="dtype_update_submit" value="update" class="btn blue"><i class="fa fa-check"></i><?php echo $t->_('submit');?></button>
                            <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                        </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
        <!-- END FORM-->
    </div>
</div>
</div>