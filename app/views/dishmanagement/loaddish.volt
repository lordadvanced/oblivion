<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>List Food
        </div>
        <div class="tools">
            <a href="#" data-dismiss="modal" class="close"></a>
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN ADD DISH FORM-->

        <form action="/dishmanagement/updatedish" id="update_dish_form" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
            <div class="form-group">
                <label style="width: 100%;text-align: center;" class="control-label col-md-6" id="return_update_dish_mess"></label>
            </div>
            <div class="form-body">
                           <input id="dish_di" name="dish_id" type="hidden" value="<?php echo $dish_list['dish_id']; ?>" />
                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("name");?></label>
                    <div class="col-md-9">
                        <input id="dish_update_name" name="dish_update_name" type="text" class="form-control" value="<?php echo $dish_list['dish_name']; ?>">
                        <div id="dish_update_name_error" class="error dish_name_error" style="display:none;">
                            <br />
                            <?php echo $t->_("dish_name_error");?></div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">
                        <?php echo $t->_("description");?></label>
                    <div class="col-md-9">
                        <textarea id="dish_update_desc" name="dish_update_desc" class="form-control" rows="3" value="<?php echo $dish_list['dish_description']; ?>"><?php echo $dish_list['dish_description']; ?></textarea>
                        <div id="dish_update_desc_error" class="error dish_desc_error" style="display:none;">
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
                        <div id="dishtype_update_error"  class="error dishtype_error" style="display:none;">
                            <br />
                            <?php echo $t->_("dishtype_null_error");?></div>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label col-md-3">Image Upload</label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div>
                                <span><img src="<?php echo $dish_list['dish_image']; ?>" style="height:150px"></span>
                                <input type="hidden" value="<?php echo $dish_list['dish_image']; ?>" name="old_img" id="old_img" />
                                </br>
                                <span class="btn default btn-file">
														<span class="fileinput-new">
															 Select image
														</span>
                                <span class="fileinput-exists">
															 Change
														</span>
                                <input type="file" name="files[]" multiple>
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
                            <button type="submit" onclick="submit_edit_dish();" name="dish_update_submit" id="dish_update_submit" value="Send File(s)" class="btn blue"><i class="fa fa-check"></i> Submit</button>
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