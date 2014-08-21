<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i><?php echo $t->_("delete_dish_info");?>
        </div>
        <div class="tools">
            <a href="#" data-dismiss="modal" class="close"></a>
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN ADD DISH FORM-->

        <form action="/dishmanagement/deletedish" id="del_dish_form" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
            <div class="form-group">
                <label style="width: 100%;text-align: center;" class="control-label col-md-3" name="return_dish_mess" id="return_dish_mess"></label>
            </div>
            <input type="hidden" name="dish_id" id="dish_id" value="<?php echo $dish_list['dish_id'];?>" />
            <div class="form-body">

                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("name");?></label>
                    <div class="col-md-9">
                        <label ><?php echo $dish_list['dish_name']; ?></label>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("description");?></label>
                    <div class="col-md-5">
                        <label ><?php echo $dish_list['dish_description']; ?></label>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("dish_type");?></label>
                    <div class="col-md-5">
                        <label ><?php echo $dish_list['dtype_detail']['dtype_name']; ?></label>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">Image Upload</label>
                    <div class="col-md-6">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div>
                                <span><img src="<?php echo $dish_list['dish_image']; ?>" style="height:150px"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" name="delete_dish_submit" id="del_dish_submit" value="Send File(s)" class="btn red"><i class="fa fa-check"></i> <?php echo $t->_("confirm_del_button");?></button>
                            <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
</div>