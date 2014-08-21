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
function refresh_combo_list(){
    $('#form_list_combo').load('/combomanagement/allcombo');
}
</script>

            	<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i><?php echo $t->_("combo_list");?>
							</div>
							<div class="tools">
                            <img onclick="refresh_combo_list();" height="30px" src="/assets/img/button_reload.png" />
								<a href="#" class="collapse">
								</a>
							</div>
						</div>
<div class="portlet-body listfood">
						<!-- de id=sample moi co cai sort-->
							<table class="table table-bordered table-hover table-full-width" id="combodt">
							<thead>
							<tr>
								<th style="width: 25px;">
									 <?php echo $t->_("stt");?>
								</th>
								<th>
									 <?php echo $t->_("combo_name");?>
								</th>
								<th>
									 <?php echo $t->_("combo_desc");?>
								</th>
                                <th>
									 <?php echo $t->_("price");?>
								</th>
                                <th>
									 <?php echo $t->_("list_dish_id");?>
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                             <?php foreach($combo_list as $combo){?>
							<tr>
								<td>
									 <?php if(isset($combo['combo_id'])) echo $combo['combo_id'];?>
								</td>
								<td>
									<?php if(isset($combo['combo_name'])) echo $combo['combo_name'];?>
								</td>
								<td>
								    <?php if(isset($combo['combo_description'])) echo $combo['combo_description'];?>
								</td>
       	                        <td>
									<?php if(isset($combo['combo_price'])) echo $combo['combo_price'];?>
								</td>
                                <td>
									<?php if(isset($combo['dish_detail'])){
						              $list_dish_id = null;
                                     foreach($combo['dish_detail'] as $dishitem){  
                                       if($list_dish_id==null) $list_dish_id = $dishitem['dish_id'];
                                       else
                                       $list_dish_id = $dishitem['dish_id'].",".$list_dish_id;
                                     }
                                     echo $list_dish_id;
                                    }?>
								</td>
								<td>
									 <a class="edit-combo" href="/combomanagement/editform?combo_id=<?php echo $combo['combo_id'];?>"  data-target="#edit_combo" data-toggle="modal">Edit</a>
									 <a class="delete-combo" href="/combomanagement/delete?combo_id=<?php echo $combo['combo_id'];?>" data-target="#delete_combo" data-toggle="modal">Delete</a>
								</td>
							</tr>
							  <?php };?>	
							</tbody>
							</table>
						</div>
