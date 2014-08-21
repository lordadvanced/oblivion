<head>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

</head>
<script>

function refresh_dish_list(){
    jQuery(document).ready(function() {
TableAdvanced.init();
});
    $('#form_list_dish').load('/dish/getalldish');
}
</script>

            	<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>List Food
							</div>
							<div class="tools">
                            <img onclick="refresh_dish_list();" height="30px" src="/assets/img/button_reload.png" />
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
<div class="portlet-body listfood  table-responsive">
						<!-- de id=sample moi co cai sort-->
							<table class="table table-bordered table-hover table-full-width  table-responsive" id="dishdt">
							<thead>
							<tr>
								<th>
									 Image
								</th>
								<th>
									 Name
								</th>
								<th>
									 Description
								</th>
								<th>
									 Type
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
									 <img src="<?php echo $dish['dish_image'];?>" alt="">
								</td>
								<td>
									<?php echo $dish['dish_name'];?>
								</td>
								<td>
								<?php if(isset($dish['dish_description'])) echo $dish['dish_description'];?>
								</td>
								<td>
									 <?php if(isset($dish['dtype_detail']['dtype_name']))  echo $dish['dtype_detail']['dtype_name'];?>
								</td>
								<td>
									 <a class="edit-dish" href="/dishmanagement/loaddish?dish_id=<?php echo $dish['dish_id'];?>"  data-target="#edit_dish" data-toggle="modal">Edit</a>
									 <a class="delete-dish" href="/dishmanagement/deletedish?dish_id=<?php echo $dish['dish_id'];?>" data-target="#delete_dish" data-toggle="modal">Delete</a>
								</td>
							</tr>
							  <?php };?>	
							</tbody>
							</table>
						</div>
