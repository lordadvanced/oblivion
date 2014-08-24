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
                    <div class="col-md-12">
                        <!--BEGIN TABS-->
                     
                            <div class="tab-content">
                               <table  width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr>
					<td width="600" valign="top" align="center">
						<div class="form-signin" style="margin:0 auto; color: #333333; text-align:left; width:530px; min-height:300px;">	
	<form name="orderChk" action="/page/doorder/" method="post">
		<table border="0" width="100%" align="center">
			
			<tbody><tr>
				<td align="left">
					<div class="cattitle">
						<u>Hướng dẫn thanh toán</u>
					</div>
					<div style="text-align:justify" id="guideDIV">
					Bước 1: <b><a href="https://www.vietcombank.com.vn/IBanking/" target="_blank">Click vào đây</a></b> để đăng nhập vào tài khoản Vietcombank của bạn tại 1 cửa sổ (hoặc tab) mới, <font color="red">lưu ý không đóng (tắt) trang web này</font>. <br>
					Bước 2: Chuyển khoản theo thông tin bên dưới, chú ý chuyển đúng số tiền và ghi chính xác nội dung chuyển tiền. <br>
					Bước 3: Sau khi chuyển khoản thành công bạn quay lại trang (cửa sổ, tab) này và click vào nút <b>"xác nhận đã chuyển khoản"</b> bên dưới. Tài khoản sẽ được nạp tiền hoặc mã thẻ sẽ hiện trên màn hình ngay sau đó.
					</div>
				</td>
			</tr>
			<tr>
				<td align="left">
					<fieldset>
						<legend><?php echo $t->_("order_information");?></legend>
						<table class="table table-bordered table-hover" width="100%" border="0" align="center">
							<tbody><tr>
						        <td width="30%" height="25" align="right" bgcolor="#F1F9FE">
						            <?php echo $t->_("order");?>: 
						        </td>
						        <td width="70%" align="left">
						            <?php echo $t->_("refill_account_balance");?>- <?php echo $t->_("amount");?>: <b><?php echo $data_list['amount'];?></b>						        </td>
						    </tr>
						    <tr>
						        <td width="30%" height="25" align="right" bgcolor="#F1F9FE">
						            <?php echo $t->_("money_have_to_pay");?>: 
						        </td>
						        <td width="70%" align="left">
						            <b><?php echo $data_list['amount'];?></b> đ
						        </td>
						    </tr>
							<tr>
								<td width="30%" height="25" align="right" bgcolor="#F1F9FE">
									<?php echo $t->_("payment_method");?>: 
								</td>
								<td width="70%" align="left">
									Bank tranfer at <b>Vietcombank</b>
								</td>
							</tr>
						</tbody></table>			
					</fieldset>		
				</td>
			</tr>
			<tr>
				<td align="left">
					<fieldset>
						<legend><?php echo $t->_("bank_information");?> <?php echo $data_list['method'];?></legend>
						<table class="table table-bordered table-hover" width="100%" border="0" align="center">
							<tbody><tr>
						        <td width="30%" height="25" align="right" bgcolor="#F1F9FE">
						            <?php echo $t->_("account_receiver");?>: 
						        </td>
						        <td width="70%" align="left">
						            <b><?php echo $data_list['payee_id'];?></b>
						        </td>
						    </tr>
						    <tr>
						        <td width="30%" height="25" align="right" bgcolor="#F1F9FE">
						            <?php echo $t->_("account_holder");?>: 
						        </td>
						        <td width="70%" align="left">
						            <b><?php echo $data_list['payee_name'];?></b>
						        </td>
						    </tr>
						    <tr>
						        <td width="30%" height="25" align="right" bgcolor="#F1F9FE">
						            <?php echo $t->_("amount");?>: :
						        </td>
						        <td width="70%" align="left">
						            <b><?php echo $data_list['amount'];?></b>
						        </td>
						    </tr>
							<tr>
						        <td width="30%" height="25" align="right" bgcolor="#F1F9FE">
						            <?php echo $t->_("memo");?>:
						        </td>
						        <td width="70%" height="25" align="left">
						            <b><font color="red"><?php echo $data_list['command'];?></font></b>
						        </td>
						    </tr>
						</tbody></table>			
					</fieldset>		
				</td>
			</tr>
			<tr>
				<td align="center">
					<br>
					<input type="hidden" name="orderNumber" value="113305090814-593977">
					<input type="submit" name="submit" value="<?php echo $t->_("paid_confirm");?>" class="btn small blue">
				</td>
			</tr>
		</tbody></table>
	</form>			
</div>					</td>
					<td width="300" valign="top" align="center">
						<div class="form-signin-3" style="float: left; width:300px; margin:0 auto;">
	<div class="cattitle">
		<center>Thông tin lưu ý</center>
	</div>
	<div class="form-signin-2" style="width:290px; float:left; color: #333333; text-align:justify; padding-top:10px;padding-bottom:10px;">
		- Kiểm tra kỹ các thông tin trước khi thực hiện thanh toán.<br><br>
		- Chuyển <font color="red">đúng số tiền</font> và <font color="red">ghi chính xác nội dung chuyển tiền</font> theo yêu cầu của đơn hàng (nên copy-paste từ ô Thông tin chuyển khoản bên trái). Mọi 
		trường hợp chuyển sai số tiền, ghi không đúng nội dung sẽ được hoàn trả lại và trừ đi phí phát sinh (nếu có). 
		<br>Chú ý với một số ngân hàng có tính phí chuyển khoản thì <font color="red">không được chọn "người nhận trả phí"</font>, nếu chọn "người nhận trả phí" hệ thống sẽ không xác thực được đã chuyển khoản vì số tiền chúng tôi nhận được không đúng với số tiền của đơn hàng.<br><br>
		<!--
		- Sau khi chuyển khoản có thể có một số trường hợp ngân hàng chậm cập nhật sao kê (lịch sử giao dịch) dẫn đến việc hệ thống không xác nhận được bạn đã chuyển khoản. Trong trường
		hợp này vui lòng đợi 1 đến vài phút để ngân hàng cập nhật.<br /><br />
		//-->
		- <font color="red">Thời gian gần đây ngân hàng Vietcombank không cập nhật sao kê đối với các giao dịch sau 20h (8h tối), quý khách giao dịch trong khoảng thời gian từ 8h tối đến 3h sáng qua Vietocmbank có thể bị chậm hơn so với bình thường, rất mong quý khách thông cảm.</font><br>
	</div>
</div>					</td>
				</tr>
			</tbody></table>
                            </div>
                        </div>
                        <!--END TABS-->
                    
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
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
