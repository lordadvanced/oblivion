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
    <?php $access=$this->session->get('accessCode'); if (isset($access)) require_once('../app/menu/header_logged_in.php'); else require_once('../app/menu/header_nologin.php'); ?>
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        <?php $access=$this->session->get('accessCode'); $role = $this->session->get('role'); if (isset($access)) { if($role!="") require_once('../app/menu/'.$role.'.php'); } ?>
        <!-- BEGIN CONTENT -->

        <div class="page-content-wrapper">

            <?php if (!isset($access)) { ?>
            <div class="page-content" style="margin-left:0px; !important">

                <?php }else { ?>
                <div class="page-content" style="margin-left:225px; !important">
                    <?php }?>

                    <!-- BEGIN PAGE CONTENT-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row">
                        <!--TEXT IN TOP-->
                        <div class="col-md-6">
                            <!--HOT PICK TEXT-->
                            <div class="col-md-12" style="text-align:center; color: #9cd159; font-family: cursive;margin-bottom: -15px;margin-top: -20px;">
                                <h2><strong>Hot Pick Combo</strong></h2>
                                <br>
                            </div>
                            <!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
                            <div id="wowslider-container1">
                                <div class="ws_images">
                                    <ul>
                                        <li>
                                            <img src="/assets/img/data1/images/image_combo1.jpg" alt="Combo Hai San" title="Combo 1" id="wows1_0" />30,000 VND
                                            <a class="mix-link" href="#form_order_combo" data-toggle="modal"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                        <li>
                                            <img src="/assets/img/data1/images/image_combo2.jpg" alt="Combo Ga" title="Combo 2" id="wows1_1" />30,000 VND
                                            <a class="mix-link" href="#form_order_combo" data-toggle="modal"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                        <li>
                                            <img src="/assets/img/data1/images/image_combo3.jpg" alt="Combo Thap Cam" title="Combo 3" id="wows1_2" />25,000 VND
                                            <a class="mix-link" href="#form_order_combo" data-toggle="modal"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                        <li>
                                            <img src="/assets/img/data1/images/image_combo4.jpg" alt="Combo Tron" title="Combo 4" id="wows1_3" />25,000 VND
                                            <a class="mix-link" href="#form_order_combo" data-toggle="modal"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ws_bullets">
                                    <div>
                                        <a href="#" title="Combo Hai San">
                                            <img src="/assets/img/data1/tooltips/image_combo1.jpg" alt="Combo Hai San" />1</a>
                                        <a href="#" title="Combo Ga">
                                            <img src="/assets/img/data1/tooltips/image_combo2.jpg" alt="Combo Ga" />2</a>
                                        <a href="#" title="Combo Thap Cam">
                                            <img src="/assets/img/data1/tooltips/image_combo3.jpg" alt="Combo Thap Cam" />3</a>
                                        <a href="#" title="Combo Tron">
                                            <img src="/assets/img/data1/tooltips/image_combo4.jpg" alt="Combo Tron" />4</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="load_hot_dish" class="col-md-6">
                            <!--BODY TEXT-->

                            <!--Tab content-->
                            <script>
                                $('#load_hot_dish').load('/dish/gethotdish')
                            </script>

                            <!-- END FILTER EACH-->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->
                    <?php require( '../app/extra/combolist.php');?>

                    <!-- END PAGE CONTENT-->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php require_once( '../app/extra/modal.php');?>
        <?php require_once( '../app/menu/footer.php');?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="/assets/plugins/wowslider/engine1/wowslider.js"></script>
        <script type="text/javascript" src="/assets/plugins/wowslider/engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->

</body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->

</html>