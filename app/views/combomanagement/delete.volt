<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i><?php echo $t->_("delete_combo_info");?>
        </div>
        <div class="tools">
            <a href="#" data-dismiss="modal" class="close"></a>
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN ADD DISH FORM-->

        <form action="/combomanagement/del" name="del_combo_form" id="del_combo_form" method="POST" class="form-horizontal form-bordered">
            <div class="form-group">
                <div class="control-label col-md-6" style="display:none;color:green" id="delete_combo_success"><?php echo $t->_("delete_combo_success");?></div>
                <div class="control-label col-md-6" style="display:none;color:red;" id="delete_combo_fail"><?php echo $t->_("delete_combo_fail");?></div>
                <div class="control-label col-md-6" style="display:none;color:red" id="del_unknown_error"><?php echo $t->_("unknown_error");?></div>

            </div>
            <input type="hidden"  id="combo_del_id" value="<?php echo $combo_list['combo_id'];?>" />
            <div class="form-body">

                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("name");?></label>
                    <div class="col-md-9">
                        <label ><?php echo $combo_list['combo_name']; ?></label>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("description");?></label>
                    <div class="col-md-5">
                        <label ><?php echo $combo_list['combo_description']; ?></label>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("price");?></label>
                    <div class="col-md-5">
                        <label ><?php echo $combo_list['combo_price']; ?></label>

                    </div>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="uutton" onclick="delete_combo();return false;" id="delete_combo_submit" value="delete" class="btn btn-danger"><i class="fa fa-check"></i> <?php echo $t->_("confirm_del_button");?></button>
                            <button type="button" data-dismiss="modal" class="btn default"><?php echo $t->_("close");?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
</div>