<div id="login">
<div class="container">
        {{ form('users/login', 'method': 'post','class':'form-signin') }}
        <h2 class="form-signin-heading"><?php echo $t->_("sign_in_title");?></h2>
         {{ text_field('email', 'class': 'input-block-level','placeholder': t['email_address'] ) }}
         {{ text_field('password', 'class': 'input-block-level','placeholder':t['password']) }}
        <label class="checkbox">
        {{ check_field('rememberme',   'value':'remember-me') }}
          <?php echo $t->_("remember_me");?>
        </label>
        <?php
          require_once('../app/plugins/recaptchalib.php');
          $publickey = "6Lfg0PMSAAAAAJwXAaXSsIfkZ6nvT2nDsoJ3hjlT"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
         {{  submit_button('Login', 'class': 'btn btn-large btn-primary') }}
      </form>

</div>
</div>