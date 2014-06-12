<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<title>Home Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/assets/css/pages/portfolio.css" rel="stylesheet" type="text/css"/>
<link href="/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-fixed page-sidebar-closed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="Kitchen_home.html">
			<img src="/assets/img/logo.png" alt="logo" class="img-responsive" style="height:40px; width:150px; margin-top:-15px;">
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="/assets/img/menu-toggler.png" alt="">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN HORIZANTAL MENU -->
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
			
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
				<!-- BEGIN TOP NAVIGATION MENU LEFT-->
			<ul class="nav navbar-nav pull-left">
				<!-- BEGIN HEADER SEARCH BOX -->
				<form class="search-form" role="form" action="#">
					<input type="text" class="form-control input-medium input-sm" name="query" placeholder="Search...">
					<input type="button" class="submit" value=" ">
				</form>
				<!-- END HEADER SEARCH BOX -->
			
			</ul>
		<!-- END TOP NAVIGATION MENU -->
		<!-- BEGIN TOP NAVIGATION MENU RIGHT -->
		

			<ul class="nav navbar-nav pull-right">
            <?php $access = $this->session->get('accessCode');
if (!isset($access)) { ?>
            <li class="dropdown user">
				<a href="/users/login" class="dropdown-toggle" data-hover="dropdown" style="padding-top: 11px;" data-close-others="true">
					
								<span class="username hidden-1024">
									 Login
								</span>
					
				</a>
				
			</li>
            <?php } else { ?>
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-warning"></i>
								<span class="badge green">
									 6
								</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							You have 6 new notifications
						</p>
					</li>
					<li style="position: relative; overflow: hidden; width: auto; height: 170px;">
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 170px;"><ul class="dropdown-menu-list scroller" style="height: 170px; overflow: hidden; width: auto;">
							<li>
								<a href="#">
												<span class="label label-sm label-icon label-success">
													<i class="fa fa-plus"></i>
												</span>
													Order successfull.
												<span class="time">
													 Just now
												</span>
								</a>
							</li>
							<li>
								<a href="#">
												<span class="label label-sm label-icon label-danger">
													<i class="fa fa-bolt"></i>
												</span>
													Order Fail.
												<span class="time">
													 15 mins
												</span>
								</a>
							</li>
							<li>
								<a href="#">
												<span class="label label-sm label-icon label-warning">
													<i class="fa fa-bell-o"></i>
												</span>
									2 Hours to Lunch.
												<span class="time">
													 22 mins
												</span>
								</a>
							</li>
							<li>
								<a href="#">
												<span class="label label-sm label-icon label-info">
													<i class="fa fa-bullhorn"></i>
												</span>
									You not have order today.
												<span class="time">
													 40 mins
												</span>
								</a>
							</li>
							
						</ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
					</li>
					<li class="external">
						<a href="Kitchen_inbox.html">
							See all notifications <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-envelope"></i>
								<span class="badge orange">
									 5
								</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							You have 5 new messages
						</p>
					</li>
					<li style="position: relative; overflow: hidden; width: auto; height: 170px;">
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 170px;"><ul class="dropdown-menu-list scroller" style="height: 170px; overflow: hidden; width: auto;">
							<li>
								<a href="inbox14c8.html?a=view">
												<span class="photo">
													<img src="/assets/img/avatar.jpg" alt="">
												</span>
												<span class="subject">
													<span class="from">
														 Admin
													</span>
													<span class="time">
														 Just now
													</span>
												</span>
												<span class="message">
													 Hello, nice to meet you
												</span>
								</a>
							</li>
							<li>
								<a href="Kitchen_inbox.html">
												<span class="photo">
													<img src="/assets/img/avatar.jpg" alt="">
												</span>
												<span class="subject">
													<span class="from">
														 Admin
													</span>
													<span class="time">
														 Yesterday
													</span>
												</span>
												<span class="message">
													 Hello, nice to meet you
												</span>
								</a>
							</li>
							<li>
								<a href="inbox14c8.html?a=view">
												<span class="photo">
													<img src="/assets/img/avatar.jpg" alt="">
												</span>
												<span class="subject">
													<span class="from">
														 Admin
													</span>
													<span class="time">
														 5 days ago
													</span>
												</span>
												<span class="message">
													 Hello, nice to meet you
												</span>
								</a>
							</li>
						</ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
					</li>
					<li class="external">
						<a href="inbox.html">
							See all messages <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="Kitchen_user.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="/assets/img/avatar1_small.jpg">
								<span class="username hidden-1024">
									 <?php echo $this->session->get("name"); ?>
								</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/users/logout">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			<!-- END USER LOGIN DROPDOWN -->
			</li>
            <?php } ?>
            <!-- BEGIN LANGUAGE -->
			<li class="dropdown language">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="/assets/img/flags/us.png">
					<span class="username">
						 US
					</span>
					
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">
							<img alt="" src="/assets/img/flags/es.png"> Spanish
						</a>
					</li>
					<li>
						<a href="#">
							<img alt="" src="/assets/img/flags/de.png"> German
						</a>
					</li>
					<li>
						<a href="#">
							<img alt="" src="/assets/img/flags/ru.png"> Russian
						</a>
					</li>
					<li>
						<a href="#">
							<img alt="" src="/assets/img/flags/fr.png"> French
						</a>
					</li>
				</ul>
			</li>
			
			</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<?php $access = $this->session->get('accessCode');
if (isset($access)) { ?>
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 308px;"><ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200" style="overflow: hidden; width: auto; height: 308px;">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="active ">
					<a href="Kitchen_home.html">
						<i class="fa fa-home"></i>
						<span class="title">
							Home
						</span>
					</a>
				</li>
				<li>
					<a href="Kitchen_order.html">
						<i class="fa fa-shopping-cart"></i>
						<span class="title">
							Order
						</span>
					</a></li>
				<li>
					<a href="Kitchen_pay.html">
						<i class="fa fa-gift"></i>
						<span class="title">
							Payment
						</span>
					</a>
				</li>
				<li>
					<a href="Kitchen_feedback.html">
						<i class="fa fa-comment"></i>
						<span class="title">
							Feedback
						</span>
					</a></li>
				<li>
					<a href="Kitchen_user.html">
						<i class="fa fa-user"></i>
						<span class="title">
							Account
						</span>
					</a></li>
					<li class="last ">
					<a href="Kitchen_management.html">
						<i class="fa fa-users"></i>
						<span class="title">
							Management
						</span>
					</a></li>
			</ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.3; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 308px; background: rgb(161, 178, 189);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
    <?php } ?>
<div class="page-content-wrapper">
		<div class="page-content" style="min-height:602px !important">
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
							 THEME COLOR
						</span>
						<ul>
							<li class="color-black current color-default" data-style="default">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-brown" data-style="brown">
							</li>
							<li class="color-blue" data-style="blue">
							</li>
							<li class="color-grey" data-style="grey">
							</li>
							<li class="color-white color-light" data-style="light">
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
                
	<!--BEGIN TABS-->

	<div class="tabbable tabbable-custom tabbable-full-width">
	<ul class="nav nav-tabs">
		<li class="active">
			<a href="#tab_1_1" data-toggle="tab">
				Manage System
			</a>
		</li>
		<li id="load_user" class="load_user">
			<a class="load_user" href="#tab_1_3" data-toggle="tab">
				Manage User
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
							<i class="fa fa-cog"></i> Change Menu
						</a><span class="after"></span>
					</li>
					<li>
						<a data-toggle="tab" href="#tab_2-2">
							<i class="fa fa-picture-o"></i> Accountant
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tab_3-3">
							<i class="fa fa-eye"></i> Announcement
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tab_4-4	">
							<i class="fa fa-eye"></i> System Settings
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="tab-content">
					<div id="tab_1-1" class="tab-pane active">
					<!--ADD MENU FIELD-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Add Menu
							</div>
							<div class="tools">
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group ">
										<label class="control-label col-md-3">Name</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Enter Name">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Description</label>
										<div class="col-md-9">
											<textarea class="form-control" rows="3" placeholder="Enter Description"></textarea>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Price</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Enter Price">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Type</label>
										<div class="col-md-9">
											<div class="checkbox-list">
											<label class="checkbox-inline">
											<div class="checker"><span><input type="checkbox" id="inlineCheckbox1" value="option1"></span></div> One Combo </label>
											<label class="checkbox-inline">
											<div class="checker"><span><input type="checkbox" id="inlineCheckbox2" value="option2"></span></div> One Food </label>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Image Upload</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
														<span class="fileinput-new">
															 Select image
														</span>
														<span class="fileinput-exists">
															 Change
														</span>
														<input type="file" name="...">
													</span>
													<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
														 Remove
													</a>
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
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Submit</button>
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
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>List Menu
							</div>
							<div class="tools">
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group ">
										<div class="portlet box green">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-reorder"></i>Thit Bo Xao
												</div>
												<div class="tools">
												<a href="#" class="remove">
												</a>
													<a href="#" class="collapse">
													</a>
													
												</div>
											</div>
											<div class="portlet-body form">
												<label class="control-label col-md-3">
													<img src="assets/img/gallery/image2.jpg" alt="" class="img-responsive">
												</label>
												<label class="control-label col-md-2"><input type="text" class="form-control" placeholder="Thit Bo Xao"></label>
												<label class="control-label col-md-4"><input type="text" class="form-control" placeholder="Gom co: Thit bo, xa, ot."></label>
												<label class="control-label col-md-3"><input type="text" class="form-control" placeholder="25,000 VND"></label>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="portlet box green">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-reorder"></i>Ca Ran
												</div>
												<div class="tools">
												<a href="#" class="remove">
												</a>
													<a href="#" class="collapse">
													</a>
													
												</div>
											</div>
											<div class="portlet-body form">
												<label class="control-label col-md-3">
													<img src="assets/img/gallery/image1.jpg" alt="" class="img-responsive">
												</label>
												<label class="control-label col-md-2"><input type="text" class="form-control" placeholder="Ca Ran"></label>
												<label class="control-label col-md-4"><input type="text" class="form-control" placeholder="Ca Ho Tay chien gion."></label>
												<label class="control-label col-md-3"><input type="text" class="form-control" placeholder="35,000 VND"></label>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="portlet box green">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-reorder"></i>Salad
												</div>
												<div class="tools">
												<a href="#" class="remove">
												</a>
													<a href="#" class="collapse">
													</a>
													
												</div>
											</div>
											<div class="portlet-body form">
												<label class="control-label col-md-3">
													<img src="assets/img/gallery/image3.jpg" alt="" class="img-responsive">
												</label>
												<label class="control-label col-md-2"><input type="text" class="form-control" placeholder="Salad"></label>
												<label class="control-label col-md-4"><input type="text" class="form-control" placeholder="Cac loai rau cu qua tron."></label>
												<label class="control-label col-md-3"><input type="text" class="form-control" placeholder="20,000 VND"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					
					</div>
					<!--TAB 2-->
					<div id="tab_2-2" class="tab-pane">
					<!--ADD DAILY COST-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Add Daily Cost
							</div>
							<div class="tools">
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group ">
										<label class="control-label col-md-3">Date</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Date">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Date End</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Date End">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Total Cost</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Total Cost">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Detail Cost</label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Detail Cost">
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Add</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!--CHART-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>INCOME
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_2" class="chart" style="padding: 0px; position: relative;">
							<canvas class="flot-base" width="981" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 981px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 54px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 119px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 185px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 250px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 313px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 378px; text-align: center;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 444px; text-align: center;">14</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 509px; text-align: center;">16</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 575px; text-align: center;">18</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 640px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 706px; text-align: center;">22</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 771px; text-align: center;">24</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 837px; text-align: center;">26</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 902px; text-align: center;">28</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 61px; top: 284px; left: 968px; text-align: center;">30</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 272px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 252px; left: 7px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 233px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 213px; left: 7px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 194px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 175px; left: 7px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 155px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 136px; left: 7px; text-align: right;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 117px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 97px; left: 7px; text-align: right;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 78px; left: 1px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 59px; left: 1px; text-align: right;">110</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 39px; left: 1px; text-align: right;">120</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 20px; left: 1px; text-align: right;">130</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">140</div></div></div><canvas class="flot-overlay" width="981" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 981px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 77px; height: 30px; top: 13px; right: 12px; opacity: 0.85; background-color: rgb(255, 255, 255);"> </div><table style="position:absolute;top:13px;right:12px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(209,38,16);overflow:hidden"></div></div></td><td class="legendLabel">Unique Visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(55,183,243);overflow:hidden"></div></div></td><td class="legendLabel">Page Views</td></tr></tbody></table></div></div>
						</div>
					</div>
					</div>
					<!--TAB 3-->
					<div id="tab_3-3" class="tab-pane">
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-reorder"></i>Send Announcement
								</div>
								<div class="tools">
									<a href="#" class="collapse">
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal form-bordered">
									<div class="form-body">
										<div class="form-group ">
											<label class="control-label col-md-3">Send to</label>
											<div class="col-md-9">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group ">
											<label class="control-label col-md-3"></label>
											<div class="col-md-9">
												<div class="checker"><span><input type="checkbox" id="inlineCheckbox1" value="option1"></span></div> Send to All
											</div>
										</div>
										<div class="form-group ">
										<label class="control-label col-md-3">Content</label>
										<div class="col-md-9">
											<textarea class="form-control" rows="3" placeholder="Content"></textarea>
										</div>
									</div>
									</div>
									<div class="form-actions fluid">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" class="btn blue"><i class="fa fa-check"></i> Send</button>
													<button type="button" class="btn default">Cancel</button>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
					</div>
					<!--TAB 4-->	
					<div id="tab_4-4" class="tab-pane">
						<table class="table table-bordered table-striped">
								<tbody><tr>
									<td>
										Notification to user.
									</td>
									<td>
										<label class="uniform-inline">
											<input type="radio" name="optionsRadios1" value="option1" checked="">
											Yes </label>
										<label class="uniform-inline">
											<input type="radio" name="optionsRadios1" value="option2">
											No </label>
									</td>
								</tr>
								<tr>
									<td>
										Cannot remove menu.
									</td>
									<td>
										<label class="uniform-inline">
											<input type="checkbox" value=""> Yes </label>
									</td>
								</tr>
								<tr>
									<td>
										Notification when receive feedback.
									</td>
									<td>
										<label class="uniform-inline">
											<input type="checkbox" value="" checked=""> Yes </label>
									</td>
								</tr>
							</tbody></table>
					</div>
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
						
						<div id="load" class="load portlet box blue">
						
                      
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
	<!-- END CONTENT -->
</div>
			</div>
		</div>
	<!-- END CONTENT -->
	</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        Ye' Ye'
    </div>
    <div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/plugins/respond.min.js"></script>
<script src="/assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script type="text/javascript" async="" src="http://stats.g.doubleclick.net/dc.js"></script><script src="/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--PLUGIN LEN XUONG-->
<script type="text/javascript" src="/assets/plugins/jquery-mixitup/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="/assets/scripts/core/app.js"></script>
<!--PLUGIN LEN XUONG-->
<script src="/assets/scripts/custom/portfolio.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
   //LEN XUONG
   Portfolio.init();
});
</script>
<script>
$("#load_user").click(function(){
    alert(1);
  $("#load").load("http://doan.com/management/listusers");
});</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->
</div></body>