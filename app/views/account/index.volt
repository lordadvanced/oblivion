<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- BEGIN BODY -->

<body class="page-header-fixed page-sidebar-fixed">
    <?php $access=$this->session->get('accessCode'); if (isset($access)) require_once('../app/menu/header_logged_in.php'); else require_once('../app/menu/header_nologin.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $access=$this->session->get('accessCode'); $role = $this->session->get('role'); if (isset($access)) { if($role!="") require_once('../app/menu/'.$role.'.php'); } ?>
        <?php $user_profile = $this->session->get('user_profile');?>
        <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
		<div class="page-content" style="min-height:583px !important">
		
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				
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
		<li class="">
			<a href="#tab_3_3" data-toggle="tab">
				Order
			</a>
		</li>
	</ul>
	<div class="tab-content">
	<!--tab_1_1-->
	<div class="tab-pane active" id="tab_1_1">
		<div class="row">
			<div class="col-md-3" style="margin-left:10px;">
				<img style="width: 250px;" src="<?php echo $user_profile['avatar'];?>" class="img-responsive border-content-big" alt="">
				<a href="#" class="profile-edit" style="margin-left:5px;"></a>
                	<h1><?php echo $user_profile['name'];?></h1>
						<p></p>
						<ul class="list-inline">
							<li>
								<i class="fa fa-calendar"></i> <?php echo $user_profile['date_of_birth'];?>
							</li>
							<li>
								<i class="fa fa-star"></i><?php if(isset($user_profile['phone'])) echo $user_profile['phone'];?>
							</li>
						</ul>
			</div>
			<div class="col-md-8">
				<div class="row ">
					<div class="col-md-7 profile-info border-content-big" style="padding-bottom: 35px;border-right: 2.5px solid #adadad;border-left: 2.5px solid #adadad;">
					
						
						<label ><?php echo $t->_("name");?></label>
						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
								<label  class="form-control input-large" ><?php echo $user_profile['name'];?></label>
						</div>
						
						<label><?php echo $t->_("email_address");?></label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
							<label class="form-control input-large"><?php echo $user_profile['email'];?></label>
						</div>
                       <label><?php echo $t->_("gender");?></label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-male"></i>
												</span>
							<label class="form-control input-large"><?php if(isset($user_profile['gender']))  echo $user_profile['gender'];?></label>
						</div>
                        <label><?php echo $t->_("religion");?></label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-plus"></i>
												</span>
							<label class="form-control input-large"><?php if(isset($user_profile['religion'])) echo $user_profile['religion'];?></label>
						</div>
                        <label><?php echo $t->_("nationality");?></label>

						<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-location-arrow"></i>
												</span>
							<label class="form-control input-large"><?php if(isset($user_profile['nationality'])) echo $user_profile['nationality'];?></label>
						</div>
					</div>
					<!--end col-md-8-->
					<div class="col-md-5 profile-info" style="">
						<div class="portlet sale-summary" style="padding-top:15px;">
							<div class="portlet-title">
							
										<strong style="font-size:24px;">
																	<span class="sale-info">
																		 <?php echo $t->_("balance");?>: 
																	</span> 
																	<span class="sale-num" style="font-size:20px;">
																		<?php echo $user_profile["balance"];?> VND
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
																		 220,000 VND
																	</span>
									</li>
									<br><br>
									
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
					<li class="active">
						<a data-toggle="tab" href="#tab_1-1">
							<i class="fa fa-cog"></i> <?php echo $t->_("change_profile");?>
						</a>
													<span class="after">
													</span>
					</li>
					<li>
						<a data-toggle="tab" href="#tab_2-2">
							<i class="fa fa-picture-o"></i> <?php echo $t->_("account_history");?>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tab_3-3">
							<i class="fa fa-lock"></i><?php echo $t->_("account_setting");?>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="tab-content">
					<!--CHANGE PROFILE-->
					<div id="tab_1-1" class="tab-pane active">
						<!--PORTLET CHANGE PROFILE-->
						<div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-reorder"></i>
                                                              <?php echo $t->_("change_user_form");?>                                                           </div>
                                                            <div class="tools">
                                                                <a href="#" class="collapse">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN USER PROFILE FORM-->
                                                            
                                                            <form action="/account/updateuser" name="change_userprofile_form" id="change_userprofile_form" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                                              <div class="form-group">
                                                                        <label style="width: 100%;text-align: center;" class="control-label col-md-3" name="return_edituser_mess" id="return_edituser_mess"></label>
                                                                </div>
                                                                <div class="form-body">
                                                                
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                        <?php echo $t->_("full_name");?></label>
                                                                        <div class="col-md-9">
                                                                            <input id="full_name" name="full_name" type="text" class="form-control" placeholder="<?php echo $t->_("enter_full_name");?>">
                                                                            <div id="full_name_error" name="full_name_error" class="error full_name_error" style="display:none;"><br>
                                                                               <?php echo $t->_("fname_null");?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
										<label class="col-md-3 control-label"><?php echo $t->_("gender");?></label>
										<div class="col-md-2">
											<select class="form-control" name="gender" id="gender">
												<option value="<?php echo $t->_("male");?>"><?php echo $t->_("male");?></option>
												<option value="<?php echo $t->_("female");?>"><?php echo $t->_("female");?></option>
												<option <?php echo $t->_("other");?>><?php echo $t->_("other");?></option>
											</select>
										</div>
									</div>
                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                        <?php echo $t->_("dob");?></label>
                                                                        <div class="col-md-9">
                                                                            <input id="dob" name="dob" type="text" class="form-control" placeholder="<?php echo $t->_("dob_ex");?>">
                                                                            <div id="dob_error" name="dob_error" class="error dob_error" style="display:none;"><br>
                                                                               <?php echo $t->_("dob_null");?></div>
                                                                               <div id="dobtype_error" name="dobtype_error" class="error dobtype_error" style="display:none;"><br>
                                                                               <?php echo $t->_("dobtype_error");?></div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                        <?php echo $t->_("mobile_number");?></label>
                                                                        <div class="col-md-9">
                                                                            <input id="mobile_number" name="mobile_number" type="text" class="form-control" placeholder="<?php echo $t->_("enter_mobile");?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3">
                                                                            <?php echo $t->_("description");?></label>
                                                                        <div class="col-md-9">
                                                                            <textarea id="user_desc" name="user_desc" class="form-control" rows="3" placeholder="<?php echo $t->_('enter_description');?> "></textarea>

                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group ">
                                                                        <label class="control-label col-md-3"><?php echo $t->_("upload_img");?></label>
                                                                        <div class="col-md-9">
                                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <img src="<?php echo $user_profile['avatar'];?>" style="width:150px" />
                                                                                <div>
                                                                                    <span class="btn default btn-file">
														<span class="fileinput-new">
															 Select image
														</span>
                                                                                    <span class="fileinput-exists">
															 Change
														</span>
                                                                                    <input type="file" name="files[]" multiple="">
                                                                                    </span>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix margin-top-10">
                                                                                <span class="label label-danger">
													 NOTE!
												</span>
                                                                                Image size no more than 3Mb.</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                <button type="submit" name="user_profile_submit" id="user_profile_submit" value="Send File(s)" class="btn blue"><i class="fa fa-check"></i> Submit</button>
                                                                                <button type="button" class="btn default">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
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
					<div id="tab_2-2" class="tab-pane">
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
										<input type="checkbox" value=""> Yes 
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
										Hide when i choose food
									</td>
									<td>
										
											<input type="checkbox" value="" checked=""> Yes 
									</td>
								</tr>
								<tr>
									<td>
										Language
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
	<div class="tab-pane" id="tab_3_3">
				<!--CALENDAR ORDER-->
									<table class="hisCalendar" align="center">
										<tbody><tr class="monthname topcalendar"><td colspan="7"><h1><strong>July 2014</strong></h1></td></tr>
										<tr class="dayname"><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr>
										<tr class="daycalendar"><td class="noneday">29</td><td class="noneday">30</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
										<tr class="daycalendar"><td td="" class="blue-cell">6</td><td td="" class="blue-cell">7</td><td>8</td><td class="blue-cell">9</td><td>10</td><td>11</td><td>12</td></tr>
										<tr class="daycalendar"><td td="" class="blue-cell">13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
										<tr class="daycalendar"><td>20</td><td>21</td><td>22</td><td class="blue-cell">23</td><td>24</td><td>25</td><td>26</td></tr>
										<tr class="daycalendar"><td>28</td><td>28</td><td>29</td><td>30</td><td>31</td><td class="noneday">1</td><td class="noneday">2</td></tr>										
									<tr class="botcalendar"><td colspan="7"><h3><strong>Order History</strong></h3></td></tr>
									</tbody></table>
								</div>
	</div>
	<!--end tab-pane-->
	</div>
	</div>
	<!--END TABS-->
				</div>
				
			</div>
		</div>
	<!-- END CONTENT -->
	</div>
<!-- END CONTAINER -->
<?php require_once( '../app/menu/footer.php');?>
<script>
			$( function() {
			  $('.daycalendar td').click( function() {
				$(this).toggleClass("blue-cell");
			  } );
			} );		
</script>
    <script>
$("#load_user").click(function(){
    alert(1);
  $("#load").load("/users/getusers");
});</script>
        <!-- Mirrored from www.keenthemes.com/preview/metronic_admin/page_portfolio.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 22 Mar 2014 18:50:43 GMT -->

</html>