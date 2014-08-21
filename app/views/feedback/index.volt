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
				<div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <h2><strong>Feed Back</strong></h2>
                        <textarea class="form-control" rows="5	"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Type of feedback:</label>
                        <select class="form-control">
                            <option>Chat luong mon an</option>
                            <option>Thai do phuc vu</option>
                            <option>Gia tien</option>
                            <option>Ban ghe</option>
                            <option>He thong dich vu</option>
                        </select>
                    </div>

                    <div class="form-group" style="text-align:center;">
                        <div class="radio-list">
                            <label>
                                <input type="checkbox" name="tnc"> I agree to the
                                <a href="#">
                                    Terms of Service
                                </a>
                                and
                                <a href="#">
                                    Privacy Policy
                                </a>
                            </label>
                        </div>

                    </div>
                    <div class="form-group" style="text-align:center;">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>
           
			</div>
                <!-- END CONTENT -->
             </div>
    </div>
    <!-- END CONTAINER -->
    <?php require_once('../app/extra/modal.php');?>
    <?php require_once( '../app/menu/footer.php');?>
    
    <script>
$("#load_user").click(function(){
    alert(1);
  $("#load").load("/users/getusers");
});</script>
        <!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->

</html>