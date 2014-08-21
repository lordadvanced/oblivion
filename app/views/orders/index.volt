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
        <?php $user_profile = $this->session->get('user_profile');?>
        <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
		<div class="page-content" style="min-height:583px !important">
		
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				
	<div class="col-md-12">
	<!--BEGIN TABS-->
	<div class="tabbable tabbable-custom tabbable-full-width">
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#tab_1_1" data-toggle="tab">
				Overview
			</a>
		</li>
		<li class="">
			<a href="#tab_1_2" data-toggle="tab">
				Account
			</a>
		</li>
		<li class="">
			<a href="#tab_3_3" data-toggle="tab">
				Order
			</a>
		</li>
	</ul>
	<div class="tab-content">
	<!--tab_1_1-->
	<div class="tab-pane active" id="tab_1_1">
    <div id="order_list_page" >
		<script>$('#order_list_page').load('/orders/all')</script>
        </div>
	</div>
	<!--tab_1_2-->
	<div class="tab-pane" id="tab_1_3">

	</div>
	<div class="tab-pane" id="tab_3_3">

	</div>
	<!--end tab-pane-->
	</div>
	</div>
	<!--END TABS-->
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
</script>
</html>