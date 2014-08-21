	<!--DEFAULT FOOD&COMBO-->
				<div class="row">
				<!--BODY TEXT-->
					<div class="col-md-10 col-md-offset-1" style="text-align:center; color: #9cd159; font-family: cursive;margin-bottom: -15px;border-top-style: outset;">
						<h1><strong><?php echo $t->_("menu_title");?></strong></h1>
						<br>
					</div>
				<!--Tab content-->
					<div class="col-md-10 col-md-offset-1">
						<div class="box">
							<div>
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab_1_1" data-toggle="tab">
											<h4><strong>Pick Combo</strong></h4>
										</a>
									</li>
									<li class="">
										<a href="#tab_1_2" data-toggle="tab">
											<h4><strong>Pick Each</strong></h4>
										</a>
									</li>
								</ul>
							<div class="tab-content">
							<!--TAB COMBO-->
							<div class="tab-pane fade active in" id="tab_1_1">
							<!-- BEGIN FILTER COMBO-->
									<div class="margin-top-10">
										<div id="homepage_combo" class="row mix-grid">
                                        <script>$('#homepage_combo').load('/combo/gethomepagecombo');</script>
										</div>
                                    </div>
							<!-- END FILTER COMBO-->
								
							
								
							</div>
							<!--TAB EACH-->
							<div class="tab-pane fade" id="tab_1_2">
								<!-- BEGIN FILTER EACH-->
									
							<!-- END FILTER EACH-->
						
							</div>
							</div>
						</div>
					</div>
				
				
				</div>

					</div>
