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
$role = $this->session->get('role');
if (isset($access)) {
    if($role!="") require_once('/../app/menu/'.$role.'.php');
	
     } ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
	   <div class="page-content" style="min-height:609px !important">
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
							<li class="color-purple" data-style="purple">
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
						<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="row profile">
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
			<a href="#tab_1_3" data-toggle="tab">
				Account
			</a>
		</li>
	</ul>
	<div class="tab-content">
	<!--tab_1_1-->
	<div class="tab-pane active" id="tab_1_1">
		<div class="row">
			<div class="col-md-3">
				<img src="/assets/img/avatar.jpg" class="img-responsive" alt="" style="margin-left:5px;">
				<a href="#" class="profile-edit" style="margin-left:5px;"></a>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-8 profile-info">
						<h1>Thanh Yey Cai Dep</h1>
						<a href="#">
							www.KitchenLDT4.com
						</a>
						<p></p>
						<ul class="list-inline">
							<li>
								<i class="fa fa-map-marker"></i> Ha Noi
							</li>
							<li>
								<i class="fa fa-calendar"></i> 28 September 1991
							</li>
							<li>
								<i class="fa fa-briefcase"></i> Designer
							</li>
							<li>
								<i class="fa fa-star"></i> 0915467899
							</li>
						</ul>
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" value="Dao Ngoc Thanh" disabled="">
						<label>Email Address</label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
							<input type="text" class="form-control" value="daothanh.dnt@gmail.com" disabled="">
						</div>
						<label for="exampleInputPassword1">Password</label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
							<input type="password" class="form-control" id="exampleInputPassword1" value="**************" disabled="">
						</div>
						<label>Address</label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-bell"></i>
												</span>
							<input type="text" class="form-control" value="Ho Tay, Ha Noi" disabled="">
						</div>
					</div>
					<!--end col-md-8-->
					<div class="col-md-4">
						<div class="portlet sale-summary">
							<div class="portlet-title">
								<div class="caption">
									Amount
								</div>
								<div class="tools">
									<a class="reload" href="javascript:;">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<ul class="list-unstyled">
									<li>
																	<span class="sale-info">
																		 To day spent: <i class="fa fa-img-up"></i>
																	</span>
																	<span class="sale-num">
																		 45,000 VND
																	</span>
									</li>
									<li>
																	<span class="sale-info">
																		 Week spent: <i class="fa fa-img-down"></i>
																	</span>
																	<span class="sale-num">
																		 220,000 VND
																	</span>
									</li>
									<br><br>
									<li>
										<strong>
																	<span class="sale-info">
																		 Balance: 
																	</span>
																	<span class="sale-num">
																		 350,000 VND
																	</span>
										</strong>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--end col-md-4-->
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--tab_1_2-->
	<div class="tab-pane" id="tab_1_3">
		<div class="row profile-account">
			<div class="col-md-3">
				<ul class="ver-inline-menu tabbable margin-bottom-10">
					<li class="">
						<a data-toggle="tab" href="#tab_1-1">
							<i class="fa fa-cog"></i> Change Profile
						</a>
													<span class="after">
													</span>
					</li>
					<li class="active">
						<a data-toggle="tab" href="#tab_2-2">
							<i class="fa fa-picture-o"></i> Account History
						</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#tab_3-3">
							<i class="fa fa-lock"></i> Account Settings
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="tab-content">
					<!--CHANGE PROFILE-->
					<div id="tab_1-1" class="tab-pane">
						<!--PORTLET CHANGE PROFILE-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-reorder"></i>Change Profile
								</div>
								<div class="tools">
									<a href="#" class="collapse">
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<div class="col-md-10 col-md-offset-1">
								<form action="#" class="form-horizontal form-bordered">
									<div class="form-body">
									<!--CONTENT-->
												<div class="form-group">
													<label class="control-label">First Name</label>
													<input type="text" placeholder="Thanh" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label">Last Name</label>
													<input type="text" placeholder="Dao" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label">Mobile Number</label>
													<input type="text" placeholder="0915467899" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label">About</label>
													<textarea class="form-control" rows="3" placeholder="Kit Chen mana ger !!..."></textarea>
												</div>
												<div class="form-group">
													<label class="control-label">Website</label>
													<input type="text" placeholder="http://www.mywebsite.com" class="form-control">
												</div>						
												<p>
												Upload image from your computer to change Avatar
												</p>
												<div class="form-group">
													<div class="fileinput fileinput-new" data-provides="fileinput">
														<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
															<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
														</div>
														<div>
																						<span class="btn default btn-file">
									
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
																					<span>
																						Image size can not more than 3mb.
																					</span>
													</div>
												</div>												
									</div>
									<div class="form-actions fluid">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-offset-3 col-md-9">
													<a href="#" class="btn green">
														Save
													</a>
													<a href="#" class="btn default">
														Cancel
													</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
								</div>
							</div>	
						</div>
						<!--PORTLET CHANGE PASSWORD-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-reorder"></i>Change Password
								</div>
								<div class="tools">
									<a href="#" class="collapse">
									</a>
								</div>
							</div>
							
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<div class="col-md-10 col-md-offset-1">
								<form action="#" class="form-horizontal form-bordered">
									<div class="form-body">
									<!--CONTENT-->
												<div class="form-group">
													<label class="control-label">Current Password</label>
													<input type="password" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label">New Password</label>
													<input type="password" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label">Re-type New Password</label>
													<input type="password" class="form-control">
												</div>	
									</div>
									<div class="form-actions fluid">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-offset-3 col-md-9">
													<a href="#" class="btn green">
														Save
													</a>
													<a href="#" class="btn default">
														Cancel
													</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
								</div>
							</div>	
						</div>
					</div>
					<!--USER HISTORY-->
					<div id="tab_2-2" class="tab-pane active">
						<!--ORDER HISTORY-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-reorder"></i>Order History
								</div>
								<div class="tools">
									<a href="#" class="collapse">
									</a>
								</div>
							</div>
							<!-- BEGIN FORM-->
							<div class="portlet-body form">
								
								<div class="col-md-10 col-md-offset-1">
									<table class="table table-bordered table-striped">
									<tbody><tr>
										<th><span>Date</span></th>
										<th><span>Name of Food</span></th>		
										<th><span>Price (VND)</span></th>
										<th><span>Total (VND)</span></th>
									  </tr>
									<tr>
										  <td>6/6/2014</td>
										  <td>
											Bo Xao Toi<br>Ca Ran<br>Rau Luoc
										  </td>		
										  <td>
											25,000<br>25,000<br>15,000
										  </td>
										  <td>65,000</td>
										</tr>
										<tr>
										  <td>5/6/2014</td>
										  <td>
											Salad<br>Rau Luoc
										  </td>		
										  <td>
											20,000<br>15,000
										  </td>
										  <td>35,000</td>
										</tr>
										<tr>
										  <td>4/6/2014</td>
										  <td>
											Bun Bo<br>Salad<br>Rau Luoc
										  </td>		
										  <td>
											25,000<br>20,000<br>15,000
										  </td>
										  <td>60,000</td>
										</tr>
								</tbody></table>

									<!--
									<table id="keywords" cellspacing="0" cellpadding="0">
									<thead>
									  <tr>
										<th><span>Date</span></th>
										<th><span>Name of Food</span></th>		
										<th><span>Price (VND)</span></th>
										<th><span>Total (VND)</span></th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										  <td>6/6/2014</td>
										  <td>
											Bo Xao Toi<br>Ca Ran<br>Rau Luoc
										  </td>		
										  <td>
											25,000<br>25,000<br>15,000
										  </td>
										  <td>65,000</td>
										</tr>
										<tr>
										  <td>5/6/2014</td>
										  <td>
											Salad<br>Rau Luoc
										  </td>		
										  <td>
											20,000<br>15,000
										  </td>
										  <td>35,000</td>
										</tr>
										<tr>
										  <td>4/6/2014</td>
										  <td>
											Bun Bo<br>Salad<br>Rau Luoc
										  </td>		
										  <td>
											25,000<br>20,000<br>15,000
										  </td>
										  <td>60,000</td>
										</tr>
									</tbody>
								  </table>
								  -->
								</div>
							</div>	
						</div>
						<!--CANCEL HISTORY-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-reorder"></i>Cancel Order History
								</div>
								<div class="tools">
									<a href="#" class="collapse">
									</a>
								</div>
							</div>
							<!-- BEGIN FORM-->
							<div class="portlet-body form">
								<div class="col-md-10 col-md-offset-1">
								<table class="table table-bordered table-striped">
										<tbody><tr>
										  <th><span>Date</span></th>
										  <th><span>Name of Food</span></th>		
										  <th><span>Price (VND)</span></th>
										</tr>
										<tr>
										  <td>3/6/2014</td>
										  <td>
											Combo 2
										  </td>		
										  <td>
											40,000
										  </td>
										</tr>
										<tr>
										  <td>2/6/2014</td>
										  <td>
											Combo 4
										  </td>		
										  <td>35,000</td>
										</tr>
										<tr>
										  <td>1/6/2014</td>
										  <td>
											Combo 2
										  </td>		
										  <td>60,000</td>
										</tr>
								</tbody></table>
								
								</div>
							</div>	
						</div>
						<!--PAYMENT HISTORY-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-reorder"></i>Payment History
								</div>
								<div class="tools">
									<a href="#" class="collapse">
									</a>
								</div>
							</div>
							<!-- BEGIN FORM-->
							<div class="portlet-body form">
								
								<div class="col-md-10 col-md-offset-1">
									<table class="table table-bordered table-striped">
										<tbody><tr>
										  <th><span>Date</span></th>
										  <th><span>Bank Name</span></th>
										  <th><span>Bank Account</span></th>	
										  <th><span>Money</span></th>
										  <th><span>Status</span>
										</th></tr>
										<tr>
										  <td>28/5/2014</td>
										  <td>Thanh Yey Cai Dep</td>		
										  <td>AgriBank</td>
										  <td>1,000,000</td>
										  <td>Successfull</td>
										</tr>
										<tr>
										  <td>27/5/2014</td>
										  <td>Thanh Yey Cai Dep</td>		
										  <td>AgriBank</td>
										  <td>1,000,000</td>
										  <td>Fail</td>
										</tr>
										<tr><td>1/5/2014</td>
										  <td>Thanh Yey Cai Dep</td>		
										  <td>AgriBank</td>
										  <td>500,000</td>
										  <td>Successfull</td>
									</tr></tbody></table>
								
								</div>
							</div>	
						</div>
					</div>
					<!--USER SETTING-->
					<div id="tab_3-3" class="tab-pane">
						<form action="#">
							<table class="table table-bordered table-striped">
								<tbody><tr>
									<td>
										Recevie email from admin.
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
										I dont want sombody view my profile
									</td>
									<td>
										
											<input type="checkbox" value=""> Yes 
									</td>
								</tr>
								<tr>
									<td>
										Hide when i choose food.
									</td>
									<td>
										
											<input type="checkbox" value="" checked=""> Yes 
									</td>
								</tr>
								<tr>
									<td>
										Hide when i choose food.
									</td>
									<td>
										<label class="uniform-inline">
											<input type="radio" name="language" value="option3" checked="">
											English </label>
										<label class="uniform-inline">
											<input type="radio" name="language" value="option4">
											Vietnam </label>
									</td>
								</tr>
							</tbody></table>
							<!--end profile-settings-->
							<div class="margin-top-10">
								<a href="#" class="btn green">
									Save
								</a>
								<a href="#" class="btn default">
									Cancel
								</a>
							</div>
						</form>
					
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
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->
</div></body>