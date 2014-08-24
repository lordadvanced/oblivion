<head>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="/assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

</head>
<script>
jQuery(document).ready(function() {       
   TableAdvanced.init();
});
function refresh_order_list(){
    $('#form_list_order').load('/orders/all');
}
</script>

            	<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i><?php echo $t->_("order_list");?>
							</div>
							<div class="tools">
                            <img onclick="refresh_order_list();" height="30px" src="/assets/img/button_reload.png" />
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
<div class="portlet-body listfood">
						<!-- de id=sample moi co cai sort-->
							<table class="table table-bordered table-hover table-full-width" id="orderdt">
							<thead>
							<tr>
								<th style="width: 25px;">
									 <?php echo $t->_("order_id");?>
								</th>
								<th>
									 <?php echo $t->_("order_price");?>
								</th>
								<th>
									 <?php echo $t->_("order_date");?>
								</th>
                                <th>
									 <?php echo $t->_("place_date");?>
								</th>
                                <th>
									 <?php echo $t->_("order_shift");?>
								</th>
                                <th>
									 <?php echo $t->_("order_note");?>
								</th>
								<th>
									 <?php echo $t->_("status");?>
								</th>
							</tr>
							</thead>
							<tbody>
                             <?php foreach($order_list as $order){?>
							<tr>
								<td>
									 <?php if(isset($order['order_id'])) echo $order['order_id'];?>
								</td>
								<td>
									<?php if(isset($order['order_price'])) echo $order['order_price'];?>
								</td>
								<td>
								    <?php if(isset($order['modified'])) echo $order['modified'];?>
								</td>
       	                        <td>
									<?php if(isset($order['apply_date'])) echo $order['apply_date'];?>
								</td>	
                                <td>
									<?php if(isset($order['apply_shift'])) echo $order['apply_shift'];?>
								</td>							
                                <td>
									<?php if(isset($order['order_note'])) echo $order['order_note'];?>
								</td>
                                <td>
                                    <?php if(strtotime($order['apply_date']) < time()){;?>
                                        <span style="color:green;"><?php echo $t->_("complete");?></span>
                                    <?php }else{ ?>
									 <a class="edit-order" href="#"  data-target="#edit_order" data-toggle="modal">Edit</a>
                                    <?php } ?>
                                </td>
							</tr>
							  <?php };?>	
							</tbody>
							</table>
						</div>
