 <!-- BEGIN HEADER -->
 <head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/ldt4.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
     <link href="/assets/css/customization.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/assets/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
<!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
</head>
<!-- END HEAD -->
    <div class="header navbar navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="header-inner">
            <!-- BEGIN LOGO -->
            <a class="navbar-brand" href="Kitchen_home.html">
                <img src="/assets/img/logo.png" alt="logo" class="img-responsive" style="height:40px; width:150px; margin-top:-15px;" />
            </a>
            <!-- END LOGO -->
            <?php $access = $this->session->get('accessCode');
if (isset($access)) { ?>  
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <img src="/assets/img/menu-toggler.png" alt="" />
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
  
            <!-- BEGIN TOP NAVIGATION MENU LEFT-->
            <ul class="nav navbar-nav pull-left">
                <li id="yeah" class="sidebar-toggler-wrapper yeah">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler" data-hover="dropdown">
                        <img class="open-close" src="/assets/img/open.png">
                    </div>

                    <div class="dropdown-menu dropdown-checkboxes pull-right">
                        <label>Open/ Close Sidebar.</label>
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- BEGIN HEADER SEARCH BOX -->
                <form class="search-form" action="#">
                    <input type="text" class="form-control input-medium input-sm" placeholder="Search...">
                    <input type="button" class="submit" />
                </form>
                <!-- END HEADER SEARCH BOX -->

            </ul>
            <!-- END TOP NAVIGATION MENU -->
            <?php }; ?>
            <!-- BEGIN TOP NAVIGATION MENU RIGHT -->


            <ul class="nav navbar-nav pull-right">
                <li  class="cart" id="header_cart">
                    <a style="padding: 0px;" href="/cart/showcart" data-target="#get_shopping_cart" data-toggle="modal">
                         <span class="cart_time">
                        <img src="/assets/img/shopping-cart-icon.png" height="42px" />
                        <span id="cart_quantity" >
                        <?php
                                $cart = $this->session->get('cart');
                                if($cart['dish_id']==null || $cart == "") echo 0;
                                else echo sizeof($cart['dish_id']);
                         ?>
                         </span>
                          items
                          </span>
                    </a>
                </li>
               
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
                            <ul class="dropdown-menu-list scroller" style="height: 170px;">
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

                            </ul>
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
                            <ul class="dropdown-menu-list scroller" style="height: 170px;">
                                <li>
                                    <a href="inbox14c8.html?a=view">
                                        <span class="photo">
													<img src="/assets/img/avatar.jpg" alt=""/>
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
													<img src="/assets/img/avatar.jpg" alt=""/>
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
													<img src="/assets/img/avatar.jpg" alt=""/>
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
                            </ul>
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
                 <?php $user_profile = $this->session->get("user_profile");?>
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img  style="height: 28px;" alt=" <?php echo $user_profile['name'];?>" src="<?php echo $user_profile['avatar'];?>">
								<span class="username hidden-1024">	
                                     <?php echo $user_profile['name'];?>
								</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/users/logout"/assets/">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			<!-- END USER LOGIN DROPDOWN -->
                </li>
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER -->