 <!-- BEGIN HEADER -->
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
                
               
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                   <a href="/users/login" class="dropdown-toggle"  style="padding-top: 11px;padding-right:10px"
				   data-close-others="true">
					
								<span class="username">
									 Login
								</span>
					
				</a>
                    <!-- END USER LOGIN DROPDOWN -->
                </li>
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER -->