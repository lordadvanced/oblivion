<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/assets/css/portfolio.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/wowslider/engine1/style.css" media="screen" />
    <script type="text/javascript" src="/assets/plugins/wowslider/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/ldt4.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed page-sidebar-fixed">
     <?php $access = $this->session->get('accessCode');
if (isset($access))   require_once('../app/menu/header_logged_in.php');
else 	require_once('../app/menu/header_nologin.php');
      
     ?>
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        <?php $access = $this->session->get('accessCode');
$role = $this->session->get('role');
if (isset($access)) {
    if($role!="") require_once('../app/menu/'.$role.'.php');
	
     } ?>
        <!-- BEGIN CONTENT -->
      
        <div class="page-content-wrapper">
       
        <?php if (isset($access)) { ?>
            <div class="page-content">
        <?php }else { ?>
        <div class="page-content" style="margin-left:0px;">
        <?php }?>    
               <!-- BEGIN PAGE CONTENT-->
                 <form action="/payment/addfund" method="post" >
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-left: 0px;">
				 <div class="col-md-3 " style="border: solid 2px #4d90fe;">
                    <h3>Input Infomation</h3><br>
                  

                        <div class="col-md-3">
                            Money
                        </div>
                           
                        <div class="col-md-9">
                            <input type="text" id="amount" name="amount" class="form-control input-sm" placeholder="000,000,000 VND"/>
                        </div>

                    <br>

                    <div class="col-md-12 btn-pay">
                        <button type="submit" id="submit_payment" name="submit_payment" class="btn green">Submit</button>
                         <div id="amount_error" name="method_error" class="error method_error" style="display:none;"><?php echo $t->_("amount_null");?></div>

                    </div>
                    <br><br><br>
                    <strong>
                        <p> - Can not pay over 5,000,000 VND/ day
                            <br>
                            - If you can't pay. Please read <a href="#">FAQ</a>
                        </p>
                    </strong>
  
                </div>
                <div class="col-md-5 bank " style="border: solid 2px #4d90fe;margin-left: 10px;">
                    <strong>
                        <h3>Choose Bank</h3></strong>

                        <div class="col-md-7" style="display: block;">
                            <img src="assets\img\bank\bank_1.png">
                            <br />
                            <input id="method" name="method" value="vietcombank" type="radio" /><label for="method">VietcomBank</label> 
                             <div id="method_error" name="method_error" class="error method_error" style="display:none;"><?php echo $t->_("method_null");?></div>                     
                        </div>
                         
               </div>
               
                <div class="col-md-3" style="padding-left: 30px;border: solid 2px #4d90fe;margin-left: 10px;"><br>

                    <div class="portlet sale-summary">
                        <div class="portlet-title">
							
										<strong style="font-size:20px;">
																	<span class="sale-info">
																		 Balance: 
																	</span><br> 
																	<span class="sale-num">
																		 350,000 VND
																	</span>
										</strong>
							<br><br><br>
								<div class="caption" style="font-size:22px;">
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
																		&nbsp; &nbsp; 220,000 VND
																	</span>
									</li>
									<br><br>
									
								</ul>
							</div> </div>
                </div>

            </div>
			</div>
                <!-- END PAGE CONTENT-->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <?php  require_once('../app/menu/footer.php');?>      
                <!-- BEGIN PAGE LEVEL PLUGINS -->
         <script type="text/javascript" src="/assets/plugins/wowslider/engine1/wowslider.js"></script>
        <script type="text/javascript" src="/assets/plugins/wowslider/engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->  
       
</body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->

</html>