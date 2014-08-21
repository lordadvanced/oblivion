<head>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

</head>
<script>
jQuery(document).ready(function() {
TableAdvanced.init();
});
function refresh_dishtype_list(){
    $('#form_list_dishtype').load('/dishtypemanagement/all');
}
</script>

            	<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i><?php echo $t->_("dishtype_list");?>
							</div>
							<div class="tools">
                            <img onclick="refresh_dishtype_list();" height="30px" src="/assets/img/button_reload.png" />
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
<div class="portlet-body listfood  table-responsive">
						<!-- de id=sample moi co cai sort-->
							<table class="table table-bordered table-hover table-full-width table-responsive" id="dishtypedt">
							<thead>
							<tr>
								<th>
									 Stt
								</th>
								<th>
									 Name
								</th>
								<th>
									 Description
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                             <?php foreach($dish_list as $dish){?>
							<tr>
								<td>
									 <?php echo $dish['dtype_id'];?>
								</td>
								<td>
									<?php echo $dish['dtype_name'];?>
								</td>
								<td>
								<?php if(isset($dish['dtype_description'])) echo $dish['dtype_description'];?>
								</td>
								<td>
									 <a class="edit-dish" href="/dishtypemanagement/loaddishtype?dtype_id=<?php echo $dish['dtype_id'];?>"  data-target="#edit_dishtype" data-toggle="modal">Edit</a>
									 <a class="delete-dish" href="/dishtypemanagement/deletedishtype?dtype_id=<?php echo $dish['dtype_id'];?>" data-target="#delete_dishtype" data-toggle="modal">Delete</a>
								</td>
							</tr>
							  <?php };?>	
							</tbody>
							</table>
						</div>
