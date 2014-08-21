<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- BEGIN BODY -->

<body class="page-header-fixed page-sidebar-fixed">
    <?php $access=$this->session->get('accessCode'); if (isset($access)) require_once('../app/menu/header_logged_in.php'); else require_once('../app/menu/header_nologin.php'); ?>
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $access=$this->session->get('accessCode'); $role = $this->session->get('role'); if (isset($access)) { if($role!="") require_once('../app/menu/'.$role.'.php'); } ?>
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <!--BEGIN TABS-->
                        <div class="tabbable tabbable-custom tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">
				<?php echo $t->_("manage_system");?>;
			</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" class="manager_user" id="manager_user" data-toggle="tab">
				<?php echo $t->_("manager_user");?>
			</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!--tab_1_1-->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row profile-account">
                                        <div class="col-md-3">
                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab_1-1">
                                                        <i class="fa fa-cog"></i> <?php echo $t->_("dish_management");?>
                                                    </a><span class="after"></span>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_2-2">
                                                        <i class="fa fa-cog"></i> <?php echo $t->_("dishtype_management");?>
                                                    </a><span class="after"></span>
                                                </li>

                                                <li class="">
                                                    <a data-toggle="tab" href="#tab_3-3">
                                                        <i class="fa fa-eye"></i><?php echo $t->_('combo_management');?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_4-4	">
                                                        <i class="fa fa-eye"></i> Add Clgt
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_5-5	">
                                                        <i class="fa fa-eye"></i> System Settings
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a data-toggle="tab" href="#tab_6-6">
                                                        <i class="fa fa-picture-o"></i> Accountant
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <?php require('../app/extra/tabs/management_tab_1.php');?>
                                                <!--TAB 2-->
                                                 <?php require('../app/extra/tabs/management_tab_2.php');?>
                                                <!--TAB 3-->
                                                 <?php require('../app/extra/tabs/management_tab_3.php');?>
                                                <!--TAB 4-->
                                                 <?php require('../app/extra/tabs/management_tab_4.php');?>
                                                 <!--TAB 5-->
                                                 <?php require('../app/extra/tabs/management_tab_5.php');?>
                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>

                                </div>
                                <!--tab manager user-->
                                <div class="tab-pane" id="tab_1_3">
                                    <div class="row profile-account">
                                        <div class="col-md-3">
                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab_1-1">
                                                        <i class="fa fa-cog"></i> User
                                                    </a>
                                                    <span class="after">
													</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div id="tab_1-1" class="tab-pane active">
                                                    <!--SEARCH-->
                                                    <div class="box">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <div class="input-group input" style="margin-bottom:25px;">
                                                                <input type="text" class="form-control" placeholder="Name or Email">
                                                                <span class="input-group-btn">
													<button class="btn blue" type="button">Search!</button>
												</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--LIST-->

                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-reorder"></i>User
                                                            </div>
                                                            <div class="tools">
                                                                <a href="#" class="collapse">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered">
                                                               <div class="form-body form-body-users" id="form-body-users">
                                                                 
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </div>
                                <!--end tab-pane-->
                            </div>
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <?php require_once('../app/extra/modal.php');?>
    <?php require_once( '../app/menu/footer.php');?>
    
    <script>
jQuery(document).ready(function() {       
   TableAdvanced.init();
});
$("#load_user").click(function(){
//    alert(1);
  $("#load").load("/users/getusers");
});</script>
        <!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->

</html>