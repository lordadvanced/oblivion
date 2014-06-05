<!-- BEGIN PAGE LEVEL STYLES -->
<?php echo $this->tag->stylesheetLink('../assets/plugins/select2/select2.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/plugins/select2/select2-metronic.css'); ?>
<!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
<?php echo $this->tag->stylesheetLink('../assets/css/style-metronic.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/css/style.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/css/style-responsive.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/css/plugins.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/css/themes/default.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/css/pages/login.css'); ?>
<?php echo $this->tag->stylesheetLink('../assets/css/custom.css'); ?>
    <!-- END THEME STYLES -->
<div id="login" class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="../assets/img/logo.jpg" alt="" style="margin-top:-40px;"/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content" style="border:solid;color:#4d90fe;">
    <!-- BEGIN LOGIN FORM -->
    <?php echo $this->tag->form(array('users/login', 'class' => 'login-form', 'method' => 'post')); ?>
        <h3 class="form-title"><?php echo $t->_("sign_in_title");?></h3>

        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
			<span>
				 <?php echo $t->_("missing_username_pwd");?>
			</span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9"><?php echo $t->_("email_address");?></label>

            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="<?php echo $t->_("email_address");?>"
                       name="email"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9"><?php echo $t->_("password");?></label>

            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="<?php echo $t->_("password");?>"
                       name="password"/>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-5">
                    <button type="submit" class="btn blue">
                        <?php echo $t->_("login");?> <i class="m-icon-swapright m-icon-white"></i>
                    </button>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"/><?php echo $t->_("remember_me");?>  </label>
                </div>
            </div>
        </div>
        <p><?php $this->flashSession->output() ?></p>
        
        <div class="login-options">
            <h4>Or login with</h4>
            <ul class="social-icons">
                <li>
                    <a class="googleplus" data-original-title="Goole Plus" href="#">
                    </a>
                </li>
            </ul>
        </div>
        <div class="forget-password">
            <h4>Forgot your password ?</h4>

            <p>
                no worries, click
                <a href="javascript:;" id="forget-password">
                    here
                </a>
                to reset your password.
            </p>
        </div>
        <div class="create-account">
            <p>
                Don't have an account yet ?&nbsp;
                <a href="javascript:;" class="register-btn" id="register-btn">
                    Create an account
                </a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="#" method="post">
        <h3>Forget Password ?</h3>

        <p>
            Enter your e-mail address below to reset your password.
        </p>

        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email"
                       name="email"/>
            </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
                <i class="m-icon-swapleft"></i> Back
            </button>
            <button type="submit" class="btn blue pull-right">
                Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="/users/signup" method="post">
        <h3>Sign Up</h3>

        <p>
            Enter your personal details below:
        </p>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Name</label>

            <div class="input-icon">
                <i class="fa fa-font"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Name" name="name"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">RollNo</label>

            <div class="input-icon">
                <i class="fa fa-key"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Roll No" name="rollno"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Phone</label>

            <div class="input-icon">
                <i class="fa fa-phone"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Phone" name="phone"/>
            </div>
        </div>

        <p>
            Enter your account details below:
        </p>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>

            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>

            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password"
                       placeholder="Password" name="password"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>

            <div class="controls">
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                           placeholder="Re-type Your Password" name="rpassword"/>
                </div>
            </div>
        </div>
        <div class="form-group">
        <label>
                 <?php
          
          $publickey = "6LdKPfQSAAAAAKdBMgVKU1FTKlU6VlbC78itFlDE"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>    
        </label>
         </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="tnc"/> I agree to the
                <a href="#">
                    Terms of Service
                </a>
                and
                <a href="#">
                    Privacy Policy
                </a>
            </label>

            <div id="register_tnc_error">
            </div>
        </div>
        <div class="form-actions">
            <button id="register-back-btn" type="button" class="btn">
                <i class="m-icon-swapleft"></i> Back
            </button>
            <button type="submit" id="register-submit-btn" class="btn blue pull-right">
                Sign Up <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    LDT4 - Kitchen Management.
</div>

<div id="loading" class="hidden"></div>
<?php echo $this->tag->javascriptInclude('assets/plugins/jquery-1.10.2.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/jquery-migrate-1.2.1.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/jquery.blockui.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/jquery.cokie.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/uniform/jquery.uniform.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/jquery-validation/dist/jquery.validate.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/plugins/select2/select2.min.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/scripts/core/app.js'); ?>
<?php echo $this->tag->javascriptInclude('assets/scripts/custom/login.js'); ?>
<script>
    jQuery(document).ready(function () {
        App.init();
        Login.init();
    });
</script>
<script>


</script>
</div>