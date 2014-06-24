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
    if($role=="user") require_once('/../app/menu/'.$role.'.php');
	
     } ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
	   <div class="page-content">
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
			<div class="row">
				<!--TEXT IN TOP-->
					<div class="col-md-8 col-md-offset-2" style="text-align:center; color: #4d90fe; font-family: cursive;border-bottom-style:inset;">
						<h1>Canteen FPT University - Hoa Lac</h1>
						<br>
					</div>
					<!--HOT PICK TEXT-->
					<div class="col-md-8 col-md-offset-2" style="text-align:center; color: #9cd159; font-family: cursive;margin-bottom: -30px;">
						<h2><strong>Hot Pick</strong></h2>
						<br>
					</div>
				<!-- SLIDE IMAGE-->
					<div class="col-md-8 col-md-offset-2" style="border-top-style: outset;">
						<div id="myCarousel" class="carousel image-carousel slide">
							<div class="carousel-inner">
								<div class="item ">
									<img src="/assets/img/gallery/image_combo3.jpg" class="img-responsive" alt="" style="width:100%;height:350px;">

									<div class="carousel-caption">
										<h4>
											Combo Thap Cam
										</h4>
											<a class="mix-link" href="#form_order_combo" data-toggle="modal">
												<img src="/assets/img/order-2.png" class="img-responsive" alt="" style="height:50px; margin-left: 350px;;">
											</a>
										
									</div>
								</div>
								<div class="item">
									<img src="/assets/img/gallery/image_combo1.jpg" class="img-responsive" alt="" style="width:100%;height:350px;">

									<div class="carousel-caption">
										<h4>
											
												Combo Hai San
											
											
										</h4>
										<a class="mix-link" href="#form_order_combo" data-toggle="modal">
												<img src="/assets/img/order-2.png" class="img-responsive" alt="" style="height:50px; margin-left: 350px;;">
											</a>
									</div>
								</div>
								<div class="item active">
									<img src="/assets/img/gallery/image_combo2.jpg" class="img-responsive" alt="" style="width:100%;height:350px;">

									<div class="carousel-caption">
										<h4>
											
												Combo Ga
											
											<a class="mix-link" href="#form_order_combo" data-toggle="modal">
												<img src="/assets/img/order-2.png" class="img-responsive" alt="" style="height:50px; margin-left: 350px;;">
											</a>
										</h4>
									</div>
								</div>
								<div class="item">
								<div class="item">
									<img src="/assets/img/gallery/image1.jpg" class="img-responsive" alt="" style="width:100%;height:350px;">

									<div class="carousel-caption">
										<h4>
											
												Ca Ran
											
											<a class="mix-link" href="#form_order_combo" data-toggle="modal">
												<img src="/assets/img/order-2.png" class="img-responsive" alt="" style="height:50px; margin-left: 350px;;">
											</a>
										</h4>
									</div>
								</div>
								</div>
								<div class="item">
								<div class="item">
									<img src="/assets/img/gallery/image2.jpg" class="img-responsive" alt="" style="width:100%;height:350px;">

									<div class="carousel-caption">
										<h4>
											
												Thit Bo Xao
											
											<a class="mix-link" href="#form_order_combo" data-toggle="modal">
												<img src="/assets/img/order-2.png" class="img-responsive" alt="" style="height:50px; margin-left: 350px;;">
											</a>
										</h4>
									</div>
								</div>
								</div>
								<div class="item">
								<div class="item">
									<img src="/assets/img/gallery/image3.jpg" class="img-responsive" alt="" style="width:100%;height:350px;">

									<div class="carousel-caption">
										<h4>
											
												Salad
												
											<a class="mix-link" href="#form_order_combo" data-toggle="modal">
												<img src="/assets/img/order-2.png" class="img-responsive" alt="" style="height:50px; margin-left: 350px;;">
											</a>
										</h4>
										
									</div>
								</div>
								</div>
								
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">
								<i class="m-icon-big-swapleft m-icon-white"></i>
							</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">
								<i class="m-icon-big-swapright m-icon-white"></i>
							</a>
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="">
								</li>
								<li data-target="#myCarousel" data-slide-to="1" class="">
								</li>
								<li data-target="#myCarousel" data-slide-to="2" class="active">
								</li>
								<li data-target="#myCarousel" data-slide-to="3" class="">
								</li>
								<li data-target="#myCarousel" data-slide-to="4" class="">
								</li>
								<li data-target="#myCarousel" data-slide-to="5" class="">
								</li>
							</ol>
						</div>
					</div>
				
					<div class="row">
				<!--BODY TEXT-->
					<div class="col-md-8 col-md-offset-2" style="text-align:center; color: #9cd159; font-family: cursive;margin-bottom: -40px;border-top-style:outset;">
						<h2><strong>Hot Food Today</strong></h2>
						<br>
					</div>
				<!--Tab content-->
					<div class="col-md-10 col-md-offset-1">
						<div class="box">
							<div>
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab_1_1" data-toggle="tab">
											<strong>Pick Combo</strong>
										</a>
									</li>
									<li class="">
										<a href="#tab_1_2" data-toggle="tab">
											<strong>Pick Each</strong>
										</a>
									</li>
								</ul>
							<div class="tab-content">
							<!--TAB COMBO-->
							<div class="tab-pane fade active in" id="tab_1_1">
							<!-- BEGIN FILTER COMBO-->
									<div class="margin-top-10">
										<div class="row mix-grid">
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image_combo1.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Combo Hai San</h3><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>
												Gom co: Muc, Ca Ran, Rau Luoc<br><br>
												Gia Tien: 50,000 VND
														</p>
														
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image_combo2.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Combo Thit</h3><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>
												Gom co: Bo Xao, Suon Ran.<br><br>
												Gia Tien: 60,000 VND
											</p>
														
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image_combo3.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Combo Da Dang</h3>
														<p>
												Gom co: Suon xao, Muc, Rau.<br><br>
												Gia tien: 40,000 VND
											</p>
														<i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image_combo4.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Combo Chay</h3><i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<p>
												Gom co: Canh cai, Rau, Qua<br><br>
												Gia Tien: 30,000 VND
											</p>
														
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
											<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image4.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Gai xinh</h3>
														<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>em nay rat xinh dep, yeah yeah</p>
														
														<br>
														<p>Gia tien: 200,000 VND</p>
														
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image5.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Gai xinh</h3>
														<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>em nay rat xinh dep, yeah yeah</p>
														<br>
														<p>Gia tien: 200,000 VND</p>
														
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image8.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<a href="#"><h3>Bun Cha</h3></a>
														<i class="fa fa-star"></i><i class="fa fa-star"></i>
														<p>Mon an tuyet voi buoi trua</p>
														<br>
														<p>Gia tien: 200,000 VND</p>
														
														<i class="fa fa-star-half-o"></i>
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image9.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<a href="Pho Bo"><h3>Gai xinh</h3></a>
														<i class="fa fa-star"></i><i class="fa fa-star"></i>
														<p>Dac san mien Bac</p>
														<br>
														<p>Gia tien: 200,000 VND</p>
														
														<i class="fa fa-star"></i>
														<a class="mix-link" href="#form_order_combo" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
										
										</div>
									</div>
							<!-- END FILTER COMBO-->
								
								<!-- BEGIN MODAL COMBO-->
								<div id="form_order_combo" class="modal fade" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Order</h4>
											</div>
											<!--MODAL CONTENT-->
											<div class="row">
												<!--PICKED-->
												<div class="col-md-7 col-md-offset-1">
													<div class="row-offset-1">
														<div class="row">
															<div class="col-md-6">
																<img src="/assets/img/gallery/image_combo1.jpg" alt="" class="img-responsive" style="margin-top:6px;">
																
										
															</div>
															<div class="col-md-6">
																<h3>
																	<a href="page_blog_item.html">
																		Combo Hai San
																	</a>
																</h3>

																<p>
																	Gom co: Muc chien, Ca Ran, Rau Luoc<br>
																	Gia Tien: 50,000 VND
																</p>

																<div class="row">
																	<div class="col-md-10 col-md-offset-1">
																		<a class="btn order" href="#l">
																			<img src="/assets/img/success-icon.png">
																		</a>
																		<a class="btn order" href="#l">
																			<img src="/assets/img/cancel.png">
																		</a>
																	</div>
																</div>
															
															</div>
														</div>
													</div>
												</div>
												<!--MONEY-->
												<div class="col-md-3"><br>

													<div class="portlet sale-summary">
														<div class="portlet-title">
															<div class="caption">
																Money
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
																																		 Amount: <i class="fa fa-img-down"></i>
																																	</span>
																																	<span class="sale-num">
																																		 350,000 VND
																																	</span>
																</li>
																<li>
																																	<span class="sale-info">
																																		 Must Pay: <i class="fa fa-img-down"></i>
																																	</span>
																																	<span class="sale-num">
																																		 100,000 VND
																																	</span>
																</li>
																<br><br>
																<li>
																	<strong>
																																	<span class="sale-info">
																																		 Balance: 
																																	</span>
																																	<span class="sale-num">
																																		 250,000 VND
																																	</span>
																	</strong>
																</li>
															</ul>
														</div>
													</div>
												</div>

											</div>

											<!--END MODAL CONTENT-->
											<div class="modal-footer">
												<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
												<button class="btn green" data-dismiss="modal">Save changes</button>
											</div>
										</div>
									</div>
								</div>
								<!-- END MODAL COMBO-->
								
							</div>
							<!--TAB EACH-->
							<div class="tab-pane fade" id="tab_1_2">
								<!-- BEGIN FILTER EACH-->
									<div class="margin-top-10">
										<div class="row mix-grid">
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image1.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Ca Chep Ran</h3>
														<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>Ca tuoi song ruoi nuoc sot.<br><br>
														Gia Tien: 50,000 VND</p>
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image2.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Thit Bo Xao Xa Ot</h3>
														<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>Thit bo than thai lat.<br><br>
														Gia Tien: 50,000 VND</p>
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image3.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Salad Trai Cay</h3>
														<i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
														<p>Gom cac loai rau cu qua tuoi mat.<br><br>
												Gia Tien: 20,000 VND</p>
														
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image4.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Muc Ong Chien Toi</h3><i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<p>Muc ong thai lat.<br><br>
												Gia tien: 40,000 VND</p>
														
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
											<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image5.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Nem Ran</h3><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>Nem Ran tueyt voi.<br><br>
												Gia Tien: 30,000 VND</p>
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image6.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Rau Luoc</h3><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
														<p>Gom Ca rot,Sup Lo.<br><br>
												Gia Tien: 20,000 VND</p>
														
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image8.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Bun Cha</h3><i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
														<p>Mon an tuyet voi buoi trua<br><br>Gia tien: 30,000VND</p>
													
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
											<div class="col-md-3 col-sm-4 mix  mix_all" style="border-bottom-style: inset; border-right-style: inset; display: block; opacity: 1;">
												<div class="mix-inner">
													<img class="img-responsive" src="/assets/img/gallery/image9.jpg" alt="">
													<div class="mix-details" style="opacity: 0.9;">
														<h3>Pho Bo</h3><i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<p>Dac san mien Bac<br><br>Gia tien: 25,000 VND</p>
														
														
														<a class="mix-link" href="#form_order" data-toggle="modal">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<a class="mix-preview fancybox-button" href="/assets/img/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
															<i class="fa fa-search"></i>
														</a>
													</div>
												</div>
											
											</div>
										
										</div>
									</div>
							<!-- END FILTER EACH-->
							<!-- BEGIN MODAL-->
								<div id="form_order" class="modal fade" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h4 class="modal-title">Order</h4>
											</div>
											<!--MODAL CONTENT-->
											<div class="row">
												<!--PICKED-->
												<div class="col-md-7 col-md-offset-1">
													<div class="row-offset-1">
														<div class="row">
															<div class="col-md-6">
																<img src="/assets/img/gallery/image1.jpg" alt="" class="img-responsive">
																<ul class="list-inline">
																	<li>
																		<i class="fa fa-calendar"></i>
																		<a href="#">
																			May 12, 2014
																		</a>
																	</li>
																	<li>
																		<i class="fa fa-comments"></i>
																		<a href="#">
																			38 Comments
																		</a>
																	</li>
																</ul>
																<ul class="list-inline blog-tags">
																	<li>
																		<i class="fa fa-tags"></i>
																		<a href="#">
																			Ca
																		</a>,
																		<a href="#">
																			Ran
																		</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6">
																<h3>
																	<a href="page_blog_item.html">
																		Ca Ran Viet Nam
																	</a>
																</h3>

																<p>
																	Ca tuoi song, lam sach, uop gia vi, sau do cho vao dau gia chien ron. Vot ra ruoi
																	nuoc sot<br>
																	Gia Tien: 50,000 VND
																</p>

																<div class="row">
																	<div class="col-md-10 col-md-offset-1">
																		<a class="btn order" href="#l">
																			<img src="/assets/img/success-icon.png">
																		</a>
																		<a class="btn order" href="#l">
																			<img src="/assets/img/cancel.png">
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<img src="/assets/img/gallery/image2.jpg" alt="" class="img-responsive">
																<ul class="list-inline">
																	<li>
																		<i class="fa fa-calendar"></i>
																		<a href="#">
																			May 12, 2014
																		</a>
																	</li>
																	<li>
																		<i class="fa fa-comments"></i>
																		<a href="#">
																			20 Comments
																		</a>
																	</li>
																</ul>
																<ul class="list-inline blog-tags">
																	<li>
																		<i class="fa fa-tags"></i>
																		<a href="#">
																			Thit Bo
																		</a>,
																		<a href="#">
																			Xao
																		</a>,
																		<a href="#">
																			Cay
																		</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6">
																<h3>
																	<a href="page_blog_item.html">
																		Thit Bo Xao Xa Ot
																	</a>
																</h3>

																<p>
																	Thit bo than thai lat, xao chung voi xa ot duoc thai soi.<br>
																	Gia Tien: 50,000 VND
																</p>

																<div class="row">
																	<div class="col-md-10 col-md-offset-1">
																		<a class="btn order" href="#l">
																			<img src="/assets/img/success-icon.png">
																		</a>
																		<a class="btn order" href="#l">
																			<img src="/assets/img/cancel.png">
																		</a>
																	</div>
																</div>
															</div>

														</div>

													</div>
												</div>
												<!--MONEY-->
												<div class="col-md-3"><br>

													<div class="portlet sale-summary">
														<div class="portlet-title">
															<div class="caption">
																Tai Khoan
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
																																		 Amount: <i class="fa fa-img-down"></i>
																																	</span>
																																	<span class="sale-num">
																																		 350,000 VND
																																	</span>
																</li>
																<li>
																																	<span class="sale-info">
																																		 Must Pay: <i class="fa fa-img-down"></i>
																																	</span>
																																	<span class="sale-num">
																																		 100,000 VND
																																	</span>
																</li>
																<br><br>
																<li>
																	<strong>
																																	<span class="sale-info">
																																		 Balance: 
																																	</span>
																																	<span class="sale-num">
																																		 250,000 VND
																																	</span>
																	</strong>
																</li>
															</ul>
														</div>
													</div>
												</div>

											</div>

											<!--END MODAL CONTENT-->
											<div class="modal-footer">
												<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
												<button class="btn green" data-dismiss="modal">Save changes</button>
											</div>
										</div>
									</div>
								</div>
								<!-- END MODAL-->
							</div>
							</div>
						</div>
					</div>
				<!-- SLIDE IMAGE-->
					<div class="col-md-8 col-md-offset-2" style="padding-top: 60px;padding-bottom: 40px;border-top-style: outset;">
						<div id="myCarousel" class="carousel image-carousel slide">
							<div class="carousel-inner">
								<div class="item ">
									<img src="/assets/img/gallery/main2.jpg" class="img-responsive" alt="">

									<div class="carousel-caption">
										<h4>
											<a href="page_news_item.html">
												Phong An
											</a>
										</h4>

										<p>
											Xay dung rong rai thoang mat, cung voi ban ghe da sac mau, tao cam giac thoai mai khi an.
										</p>
									</div>
								</div>
								<div class="item active">
									<img src="/assets/img/gallery/main1.jpg" class="img-responsive" alt="">

									<div class="carousel-caption">
										<h4>
											<a href="page_news_item.html">
												Truong Dai Hoc FPT
											</a>
										</h4>

										<p>
											Duoc xay dung tai Hoa Lac, voi khuon vien 5ha.
										</p>
									</div>
								</div>
								<div class="item">
									<img src="/assets/img/gallery/main3.jpg" class="img-responsive" alt="">

									<div class="carousel-caption">
										<h4>
											<a href="page_news_item.html">
												Nha Bep Dam Bao Ve Sinh
											</a>
										</h4>

										<p>
											Day chuyen khep kin, dam bao an toan ve sinh thuc pham.
										</p>
									</div>
								</div>
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">
								<i class="m-icon-big-swapleft m-icon-white"></i>
							</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">
								<i class="m-icon-big-swapright m-icon-white"></i>
							</a>
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="">
								</li>
								<li data-target="#myCarousel" data-slide-to="1" class="active">
								</li>
								<li data-target="#myCarousel" data-slide-to="2" class="">
								</li>
							</ol>
						</div>
					</div>
				
				</div>
			
					</div>
				<!-- END PAGE CONTENT-->
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