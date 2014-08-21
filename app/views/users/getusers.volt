<?php
 foreach ($users as $user){ ?>
<div class="form-group ">
										<div class="col-md-2">
										<img src="<?php if($user['avatar']) echo $user['avatar'];else echo "/assets/img/noavatar.jpg";?>" alt="" class="img-responsive">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="<?php echo $user['name'];?>" readonly="">
											<input type="text" class="form-control" placeholder="<?php echo $user['email'];?>" readonly="">
										</div>
										<div class="col-md-2">
											<div class="radio-list">
												
												<input type="radio" value="option1" checked=""> Active						
												<input type="radio" value="option2"> Inactive
											</div>
										</div>
										<div class="col-md-2">
											<a class="order" href="#l">
												Change Order
											</a>
										</div>
										<div class="col-md-2">
											<a class="order" href="#l">
												Change Money
											</a>
										</div>
</div>
<? };?>