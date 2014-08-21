<div id="tab_1-1" class="tab-pane active">

    <!--ADD DISH -->
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>
                <?php echo $t->_("add_combo_form");?>
            </div>
            <div class="tools">
                <a href="#" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN ADD COMBO FORM-->

            <form action="/combomanagement/edit" name="edit_combo_form" id="add_combo_form" method="POST" class="form-horizontal form-bordered" >
                <div class="form-group">
                    <div class="control-label col-md-6" style="display:none;color:green" id="edit_combo_success"><?php echo $t->_("edit_combo_succuss");?></div>
                    <div class="control-label col-md-6" style="display:none;color:red;" id="edit_combo_fail"><?php echo $t->_("edit_combo_fail");?></div>
                    <div class="control-label col-md-6" style="display:none;color:red" id="edit_combo_unknown_error"><?php echo $t->_("unknown_error");?></div>

                </div>
                <input type="hidden"  id="edit_combo_id" value="<?php echo $combo_list['combo_id'];?>" />

                <div class="form-body">

                    <div class="form-group ">
                        <label class="control-label col-md-3">
                            <?php echo $t->_("name");?></label>
                        <div class="col-md-9">
                            <input id="edit_combo_name" name="edit_combo_name" type="text" class="form-control" value="<?php echo $combo_list['combo_name'];?>">
                            <div id="edit_combo_name_error" class="error combo_name_error" style="display:none;">
                                <br />
                                <?php echo $t->_("combo_name_error");?></div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-md-3">
                            <?php echo $t->_("description");?></label>
                        <div class="col-md-9">
                            <textarea id="edit_combo_desc" name="edit_combo_desc" class="form-control" rows="3" placeholder="<?php echo $t->_("enter_description");?>"><?php echo $combo_list['combo_description'];?></textarea>
                            <div id="edit_combo_desc_error" class="error combo_desc_error" style="display:none;">
                                <br />
                                <?php echo $t->_("combo_desc_error");?></div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-md-3">
                            <?php echo $t->_("price");?></label>
                        <div class="col-md-9">
                            <input id="edit_combo_price" name="edit_combo_price" class="form-control" rows="3" value="<?php echo $combo_list['combo_price'];?>"/>
                            <div id="edit_combo_price_error" class="error combo_price_error" style="display:none;">
                                <br />
                                <?php echo $t->_("combo_price_error");?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"><?php echo $t->_("select_dish_list");?></label>
                        <div class="col-md-9">
                        <select id="edit_dish_list" multiple="" class="form-control"  style=" min-height: 200px; ">
                            <?php foreach($dish_list as $dish){ ?>
                            <option value="<?php echo $dish['dish_id'];?>"><?php echo $dish['dish_name'];?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div id="edit_combo_dish_error" class="error combo_dish_error" style="display:none;">
                                <br />
                                <?php echo $t->_("combo_dish_error");?></div>
                    </div>

                </div>
                <div class="form-actions fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="button" onclick="submit_edit_combo();return false;" name="edit_combo_submit" id="edit_combo_submit" value="submit" class="btn blue"><i class="fa fa-check"></i> Submit</button>
                                <button type="button" class="btn default"><?php echo $t->_("close");?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    <!--LIST MENU FIELD-->
    <div class="portlet-body form list_dish_full" id="list_dish_full">
        <!-- BEGIN FORM-->
        <div id="form_list_dish">
            <script>
                $('#form_list_dish').load('/dish/getalldish');
            </script>
        </div>
        <!-- END FORM-->
    </div>
</div>
