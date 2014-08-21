 
<select id="dist_type" name="dish_type" class="selectpicker dist_type_list">                                           
<?php
foreach ($dishtypes as $item) { ?>
<option value="<?php echo $item['dtype_id']; ?>"><?php echo $item['dtype_name']; ?></option>
<?php }
; ?>                                         
</select>
<script>
function load_dtype(){
$('.list_dishtype_select').load("/dish/getdishtype");
}
</script>
<img onclick="load_dtype();" height="30px" src="/assets/img/reload.png"/>