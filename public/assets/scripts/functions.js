$(document).ready(function()
{
  $(document).on('hidden.bs.modal', function(e)
  {
    var target = $(e.target);
    target.removeData('bs.modal').find(".modal-content").html('');
  });
  setNavigation();
  $("#manager_user").click(function()
  {
    get_user_lists();
  });
  $('#close_addfund_form').click(function()
  {
    $('#form_addfund').removeClass("in");
    $('#form_addfund').css("display", "none");
  });
  $('#submit_add_fund').click(function()
  {
    var money = $("input#money_fund").val();
    var bank = $("input#bank").val();
    $('#form_addfund').addClass("in");
    $('#form_addfund').css("display", "block");
  });
  $('#dish_submit').click(function()
  {
    // validate and process form here
    $("div#dish_name_error").hide();
    $("div#dish_desc_error").hide();
    $("div#dishtype_error").hide();
    var dish_name = $("input#dish_name").val();
    var dish_desc = $("textarea#dish_desc").val();
    var dishtype_id = $("select#dist_type").val();
    if (dish_name == "")
    {
      $("div#dish_name_error").show();
      $("input#dish_name").focus();
      return false;
    }
    else
    if (dish_desc == "" || dish_desc == null)
    {
      $("div#dish_desc_error").show();
      $("input#dish_desc_error").focus();
      return false;
    }
    else if (dishtype_id == "" || dishtype_id == null)
    {
      $("div#dishtype_error").show();
      $("select#list_dishtype_select").focus();
      return false;
    }
    $("#add_dish_form").unbind('submit').bind('submit', function(e)
    {
      $.ajax(
      {
        url: '/dishmanagement/insertdish/',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        success: function(data)
        {
          //alert(1);
          //alert(JSON.stringify(data));
          var queryCbrtInfo = JSON.parse(data);
          switch (queryCbrtInfo.message)
          {
          case 1:
            $('#add_dish_form')[0].reset();
            $('#return_dish_mess').html("<p style='color:green'>This dish added successful</p>");
            break;
          case 2:
            $('#add_dish_form')[0].reset();
            $("#return_dish_mess").html("<p style='color:red'>This dish is existed</p>");
            break;
          case 3:
            $("#return_dish_mess").html("<p style='color:red'>Please try to uplaod file again</p>");
            break;
          default:
            $("#return_dish_mess").html("<p style='color:red'>Unknow Error</p>");
            break;
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
          alert(jqXHR.status);
          //alert(textStatus);
        },
      });
      e.preventDefault();
      return false;
    });
  });
  $("#submit_payment").click(function()
  {
    $("div#amount_error").hide();
    $("div#method_error").hide();
    var amount = $("input#amount").val();
    if (amount == "" || amount == null)
    {
      $("div#amount_error").show();
      $("input#amount").focus();
      return false;
    }
    if ($('#method').is(':checked'))
    {
      return true;
    }
    else
    {
      $("div#method_error").show();
      return false;
    }
  });
  $("#user_profile_submit").click(function()
  {
    // validate and process form here
    $("div#full_name_error").hide();
    $("div#dob_error").hide();
    $("div#bodtype_error").hide();
    var full_name = $("input#full_name").val();
    //var dish_desc = $("textarea#dish_desc").val();
    var dob = $("input#dob").val();
    if (full_name == "" || full_name == null)
    {
      $("div#full_name_error").show();
      $("input#full_name").focus();
      return false;
    }
    if (dob == "" || dob == null)
    {
      $("div#dob_error").show();
      $("input#dob").focus();
      return false;
    }
    if (dob == "" || dob == null)
    {
      $("div#dob_error").show();
      $("input#dob").focus();
      return false;
    }
    if (ValidateDate(dob) == false)
    {
      $("div#dobtype_error").show();
      $("input#dob").focus();
      return false;
    }
    $("#change_userprofile_form").unbind('submit').bind('submit', function(e)
    {
      $.ajax(
      {
        url: '/account/updateuser/',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        success: function(data)
        {
          //alert(1);
          //alert(JSON.stringify(data));
          var queryCbrtInfo = JSON.parse(data);
          switch (queryCbrtInfo.message)
          {
          case 1:
            $('html, body').animate(
            {
              scrollTop: '0px'
            }, 0);
            $('#change_userprofile_form')[0].reset();
            $('#return_edituser_mess').html("<p style='color:green'>User Information Updated</p>");
            break;
          case 2:
            //$('#change_userprofile_form')[0].reset();
            $('html, body').animate(
            {
              scrollTop: '0px'
            }, 0);
            $("#return_edituser_mess").html("<p style='color:red'>User Information Update Fail</p>");
            break;
          default:
            $('#return_edituser_mess').focus();
            $("#return_edituser_mess").html("<p style='color:red'>Unknow Error</p>");
            break;
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
          alert(jqXHR.status);
          //alert(textStatus);
        },
      });
      e.preventDefault();
      return false;
    });
  });
});
//function 

function submit_edit_dish()
{
  // validate and process form here
  $("div#dish_update_name_error").hide();
  $("div#dish_update_desc_error").hide();
  $("div#dishtype_update_error").hide();
  var dish_name = $("input#dish_update_name").val();
  var dish_desc = $("textarea#dish_update_desc").val();
  var dishtype_id = $("select#dist_type").val();
  if (dish_name == "")
  {
    $("div#dish_update_name_error").show();
    $("input#dish_update_name").focus();
    return false;
  }
  else
  if (dish_desc == "" || dish_desc == null)
  {
    $("div#dish_update_desc_error").show();
    $("input#dish_update_desc_error").focus();
    return false;
  }
  else if (dishtype_id == "" || dishtype_id == null)
  {
    $("div#dishtype_update_error").show();
    $("select#list_dishtype_select").focus();
    return false;
  }
  $("#update_dish_form").unbind('submit').bind('submit', function(e)
  {
    $.ajax(
    {
      url: '/dishmanagement/updatedish/',
      type: 'POST',
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      success: function(data)
      {
        //alert(1);
        //alert(JSON.stringify(data));
        var queryCbrtInfo = JSON.parse(data);
        switch (queryCbrtInfo.message)
        {
        case 1:
          $('#return_update_dish_mess').html("<p style='color:green'>This dish updated</p>");
          break;
        case 2:
          $("#return_update_dish_mess").html("<p style='color:red'>Update dish fail</p>");
          break;
        default:
          $("#return_dish_mess").html("<p style='color:red'>Unknow Error</p>");
          break;
        }
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        alert(jqXHR.status);
        //alert(textStatus);
      },
    });
    e.preventDefault();
    return false;
  });
}

function list_dish_type()
{
  var link = "/dish/getdishtype";
  //$('#list_dishtype_select').children().unwrap();
  $.ajax(
  {
    type: "GET",
    url: link,
    cache: false,
    success: function(data)
    {
      //alert(JSON.stringify(data));
      // $('#dist_type_list').children().unwrap();
      $("div#dishtype_error").hide();
      $('#list_dishtype_select').empty();
      $('#list_dishtype_select').append(data);
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      //alert(textStatus);
    },
  });
}

function submit_dish_type()
{
  var dishtype_name = $('#dishtype_name').val();
  var dishtype_desc = $('#dishtype_desc').val();
  $('#error_dishtype').hide();
  $('#error_dishtype_desc').hide();
  if (dishtype_name == null || dishtype_name == "")
  {
    $('#error_dishtype').show();
    return false;
  }
  if (dishtype_desc == null || dishtype_desc == "")
  {
    $('#error_dishtype_desc').show();
    return false;
  }
  {
    //    if(foodtype_desc==null || foodtype_desc==""){
    //        $('#foodtype_desc').after("<p style='color:red'>Please enter Description</p>");
    //    }
    //    alert(foodtype_desc);
    //    alert(foodtype_name);
    var data =
    {
      dishtype_name: dishtype_name,
      dishtype_desc: dishtype_desc
    }
    var link = "/dishtypemanagement/adddishtype";
    $.ajax(
    {
      type: "GET",
      url: link,
      data: data,
      cache: false,
      success: function(data)
      {
        var queryCbrtInfo = JSON.parse(data.message);
        // alert(queryCbrtInfo);
        switch (queryCbrtInfo)
        {
        case 1:
          $('#error_dishtype').children().unwrap();
          $("#return_mess").html("<p style='color:red'>This dishtype is existed</p>");
          break;
        case 2:
          $('#error_dishtype').children().unwrap();
          $("#return_mess").html("<p style='color:green'>This dishtype added successful</p>");
          $('#dishtype_desc').val('');
          $('#dishtype_name').val('');
          break;
        default:
          $('#error_dishtype').children().unwrap();
          $("#return_mess").html("<p style='color:red'>Unknow Error</p>");
          break;
        }
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        $("#return_mess").html("<p style='color:red'>Unknow Error</p>");
      },
      dataType: 'json'
    });
    // alert(foodtype_desc);
    // alert(foodtype_name);
  }
}

function submit_edit_dish_type()
{
  var dishtype_name = $('#update_dishtype_name').val();
  var dishtype_desc = $('#update_dishtype_desc').val();
  var dtype_id = $('#dtype_id').val();
  $('#error_dishtype').hide();
  $('#error_dishtype_desc').hide();
  if (dishtype_name == null || dishtype_name == "")
  {
    $('#error_update_dishtype').show();
    return false;
  }
  if (dishtype_desc == null || dishtype_desc == "")
  {
    $('#error_update_dishtype_desc').show();
    return false;
  }
  //    if(foodtype_desc==null || foodtype_desc==""){
  //        $('#foodtype_desc').after("<p style='color:red'>Please enter Description</p>");
  //    }
  //    alert(foodtype_desc);
  //    alert(foodtype_name);
  var data =
  {
    dishtype_name: dishtype_name,
    dishtype_desc: dishtype_desc,
    dtype_id: dtype_id
  };
  var link = "/dishtypemanagement/update";
  $.ajax(
  {
    type: "POST",
    url: link,
    data: data,
    cache: false,
    success: function(data)
    {
      var queryCbrtInfo = JSON.parse(data.message);
      switch (queryCbrtInfo)
      {
      case 1:
        $('div#update_fail_dtype').css('display', 'block');
        break;
      case 2:
        $('div#update_success_dtype').css('display', 'block');
        $('#form_list_dishtype').load('/dishtypemanagement/all');
        break;
      default:
        $('div#update_unknown_dtype').css('display', 'block');;
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      //alert(jqXHR.status);
      //alert(textStatus);
    },
    dataType: 'json'
  });
  // alert(foodtype_desc);
  // alert(foodtype_name);
};
//function load foodtype for adding

function get_food_type()
{
  //    alert(foodtype_desc);
  //    alert(foodtype_name);
  var link = "/food/getfoodtype";
  $.ajax(
  {
    type: "GET",
    url: link,
    data: data,
    cache: false,
    success: function(data)
    {
      var queryCbrtInfo = JSON.parse(data.message);
      // alert(queryCbrtInfo);
      switch (queryCbrtInfo)
      {
      case 1:
        $("#return_mess").html("<p style='color:red'>This foodtype is existed</p>");
        break;
      case 2:
        $("#return_mess").html("<p style='color:green'>This foodtype added successful</p>");
        $('#foodtype_desc').val('');
        $('#foodtype_name').val('');
        break;
      default:
        $("#return_mess").html("<p style='color:red'>Unknow Error</p>");
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      alert(textStatus);
    },
    dataType: 'json'
  });
  // alert(foodtype_desc);
  // alert(foodtype_name);
}

function get_user_lists()
{
  //    alert(foodtype_desc);
  //    alert(foodtype_name);
  var link = "/users/getusers";
  $.ajax(
  {
    type: "GET",
    url: link,
    cache: false,
    success: function(data)
    {
      //alert(JSON.stringify(data));
      $('#form-body-users').children().unwrap();
      $('#form-body-users').append(data);
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};

function setNavigation()
{
  var path = window.location.pathname;
  path = path.replace(/\/$/, "");
  path = decodeURIComponent(path);
  $(".page-sidebar-menu a").each(function()
  {
    var href = $(this).attr('href');
    if (path.substring(0, href.length) == href)
    {
      $(this).closest('li').addClass('active');
    }
  });
};

function ValidateDate(dtValue)
{
  var dtRegex = new RegExp(/\b\d{4}[\/-]\d{1,2}[\/-]\d{1,2}\b/);
  return dtRegex.test(dtValue);
}
$(document).ready(function()
{
  //hide
  var slide = true;
  $(".yeah").click(function()
  {
    if (slide)
    {
      var abc = document.getElementById("page-sidebar-menu");
      abc.style.display = "none";
      $('.open-close').attr('src', 'assets/img/close.png');
      slide = false;
    }
    else
    {
      var abc = document.getElementById("page-sidebar-menu");
      abc.style.display = "";
      $('.open-close').attr('src', 'assets/img/open.png');
      slide = true
    }
  });
  $("form.search-form input.input-medium").hover(function()
  {
    $(this).toggleClass("input-fix");
  });
});

function loaddatetime()
{
  $('.date-picker').datepicker(
  {
    rtl: App.isRTL(),
    autoclose: true
  });
  //$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
}

function load_order_info()
{
  var date = $('#combo_time').val();
  var time_type = $('#combo_time_type').val();
  var combo_note = $('#combo_note').val();
  //alert(date+'|'+time_type+'|'+combo_note);
  if (date == null || date == "")
  {
    $('#order_time_error').show();
    return false;
  }
  else
  {
    $('#collapse_3_2').removeClass('in');
    $('#order_time_error').hide();
    $('#order_date').append(date);
    $('#order_time').append(time_type);
    $('#order_note').append(combo_note);
    $('#collapse_3_3').addClass('in');
  }
};

function back_load_dish_order_info()
{
  $('#collapse_4_1').removeClass('in');
  $('#collapse_4_2').addClass('in');
}

function load_dish_form_info()
{
  $('#collapse_4_1').removeClass('in');
  $('#collapse_4_2').addClass('in');
};

function load_dish_order_info()
{
  var date = $('#dish_time').val();
  var time_type = $('#dish_time_type').val();
  var dish_note = $('#dish_note').val();
  //alert(date+'|'+time_type+'|'+combo_note);
  if (date == null || date == "")
  {
    $('#order_time_error').show();
    return false;
  }
  else
  {
    $('#collapse_4_2').removeClass('in');
    $('#order_time_error').hide();
    $('#order_date').append(date);
    $('#order_time').append(time_type);
    $('#order_note').append(dish_note);
    $('#collapse_4_3').addClass('in');
  }
};

function submit_order()
{
  var date = $('#combo_time').val();
  var time_type = $('#combo_time_type').val();
  var combo_note = $('#combo_note').val();
  var combo_id = $('#combo_id').val();
  // alert(date+'|'+time_type+'|'+combo_note);
  var data =
  {
    apply_date: date,
    apply_shift: time_type,
    combo_note: combo_note,
    combo_id: combo_id
  };
  $.ajax(
  {
    url: '/orders/add/',
    type: 'POST',
    data: data,
    cache: false,
    success: function(data)
    {
      var queryCbrtInfo = JSON.parse(data);
      switch (queryCbrtInfo.message)
      {
      case 1:
        $('#submit_order_button').css('display', 'none');
        $('#order_success').show();
        break;
      case 2:
        $('#submit_order_button').css('display', 'none');
        $('#order_date_error').show();
        break;
      case 3:
        $('#submit_order_button').css('display', 'none');
        $('#order_error').show();
        break;
      default:
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};

function submit_order_dish()
{
  var date = $('#dish_time').val();
  var time_type = $('#dish_time_type').val();
  var combo_note = $('#dish_note').val();
  var dish_id = $('#dish_id_list').val();
  //alert(dish_id);
  // alert(date+'|'+time_type+'|'+combo_note);
  var data =
  {
    apply_date: date,
    apply_shift: time_type,
    combo_note: combo_note,
    dishes: dish_id
  };
  $.ajax(
  {
    url: '/orders/add/',
    type: 'POST',
    data: data,
    cache: false,
    success: function(data)
    {
      var queryCbrtInfo = JSON.parse(data);
      switch (queryCbrtInfo.message)
      {
      case 1:
        $('#submit_order_button').css('display', 'none');
        $('#order_success').show();
        break;
      case 2:
        $('#submit_order_button').css('display', 'none');
        $('#order_date_error').show();
        break;
      case 3:
        $('#submit_order_button').css('display', 'none');
        $('#order_error').show();
        break;
      default:
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};

function submit_combo()
{
  // validate and process form here
  $("div#combo_name_error").hide();
  $("div#combo_desc_error").hide();
  $("div#combo_price_error").hide();
  $("div#combo_dish_error").hide();
  var combo_name = $("input#combo_name").val();
  var combo_desc = $("textarea#combo_desc").val();
  var combo_price = $("input#combo_price").val();
  var dish_id = $("select#dish_list").val();
  if (combo_name == "")
  {
    $("div#combo_name_error").show();
    $("input#combo_name").focus();
    return false;
  }
  else
  if (combo_desc == "" || combo_desc == null)
  {
    $("div#combo_desc_error").show();
    $("input#combo_desc_error").focus();
    return false;
  }
  else
  if (combo_price == "" || combo_price == null)
  {
    $("div#combo_price_error").show();
    $("input#combo_price_error").focus();
    return false;
  }
  else if (dish_id == "" || dish_id == null)
  {
    $("div#combo_dish_error").show();
    $("select#dish_list").focus();
    return false;
  }
  var data =
  {
    combo_name: combo_name,
    combo_desc: combo_desc,
    combo_price: combo_price,
    dish_list: dish_id
  };
  var link = '/combomanagement/add';
  $.ajax(
  {
    type: "POST",
    url: link,
    data: data,
    cache: false,
    success: function(data)
    {
      //alert(1);
      //alert(JSON.stringify(data));
      var queryCbrtInfo = JSON.parse(data);
      switch (queryCbrtInfo.message)
      {
      case 1:
        $("input#combo_name").val('');
        $("textarea#combo_desc").val('');
        $("input#combo_price").val('');
        $("select#dish_list").val('');
        $('#add_combo_success').show();
        $('#add_combo_success').focus();
        $('#form_list_combo').load('/combomanagement/allcombo');
        break;
      case 2:
        $('#add_combo_form')[0].reset();
        $('#add_combo_fail').show();
        break;
      default:
        $('#unknown_error').show();
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      //alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};

function submit_edit_combo()
{
  // validate and process form here
  $("div#edit_combo_name_error").hide();
  $("div#edit_combo_desc_error").hide();
  $("div#edit_combo_price_error").hide();
  $("div#edit_combo_dish_error").hide();
  var combo_name = $("input#edit_combo_name").val();
  var combo_desc = $("textarea#edit_combo_desc").val();
  var combo_price = $("input#edit_combo_price").val();
  var combo_id = $("input#edit_combo_id").val();
  var dish_id = $("select#edit_dish_list").val();
  if (combo_name == "")
  {
    $("div#edit_combo_name_error").show();
    $("input#edit_combo_name").focus();
    return false;
  }
  else
  if (combo_desc == "" || combo_desc == null)
  {
    $("div#edit_combo_desc_error").show();
    $("input#edit_combo_desc_error").focus();
    return false;
  }
  else
  if (combo_price == "" || combo_price == null)
  {
    $("div#edit_combo_price_error").show();
    $("input#edit_combo_price_error").focus();
    return false;
  }
  else if (dish_id == "" || dish_id == null)
  {
    $("div#edit_combo_dish_error").show();
    $("select#edit_dish_list").focus();
    return false;
  }
  var data =
  {
    combo_id: combo_id,
    combo_name: combo_name,
    combo_desc: combo_desc,
    combo_price: combo_price,
    dish_list: dish_id
  };
  var link = '/combomanagement/edit';
  $.ajax(
  {
    type: "POST",
    url: link,
    data: data,
    cache: false,
    success: function(data)
    {
      //alert(1);
      //alert(JSON.stringify(data));
      var queryCbrtInfo = JSON.parse(data);
      switch (queryCbrtInfo.message)
      {
      case 1:
        $('#edit_combo_success').show();
        $('#edit_combo_success').focus();
        $('#form_list_combo').load('/combomanagement/allcombo');
        break;
      case 2:
        $('#edit_combo_fail').show();
        break;
      default:
        $('#unknown_error').show();
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      //alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};

function delete_combo()
{
  var combo_id = $('#combo_del_id').val();
  $.ajax(
  {
    type: "POST",
    url: "/combomanagement/del",
    data: {
      combo_id: combo_id
    },
    cache: false,
    success: function(result)
    {
      var queryCbrtInfo = JSON.parse(result);
      //alert(JSON.stringify(queryCbrtInfo));
      switch (queryCbrtInfo.message)
      {
      case 1:
        $('#delete_combo_success').show();
        $('#delete_combo_submit').hide();
        $('#form_list_combo').load('/combomanagement/allcombo');
        break;
      case 2:
        $('#delete_combo_fail').show();
        break;
      default:
        $('#del_unknown_error').show();
        break;
      }
    },
    error: function(request, status, err)
    {
      //alert('Unknown Error');
    }
  });
}

function add_cart()
{
  var dish_id = $('#dish_id').val();
  // alert(date+'|'+time_type+'|'+combo_note);
  $('#add_cart_fail').hide();
  $('#add_cart_success').hide();
  var data =
  {
    dish_id: dish_id
  };
  $.ajax(
  {
    url: '/cart/addcart/',
    type: 'POST',
    data: data,
    cache: false,
    success: function(data)
    {
      var queryCbrtInfo = JSON.parse(data);
      var data = queryCbrtInfo.data;
      switch (queryCbrtInfo.message)
      {
      case 1:
        $('span#cart_quantity').html(data.cart_quantity);
        $('#add_cart_success').show();
        $('#add_cart_fail').hide();
        $("#mess_price").html(data.price + " VND");
        $("#return_mess_price").show();
        if (data.dtype_name !== "none")
        {
          $("#mess_dtypename").html(data.dtype_name);
          $("#return_mess_dtypename").show();
        }
        else
        {
          $("#return_mess_dtypename").hide();
        }
        break;
      case 2:
        $('#add_cart_success').hide();
        $('#add_cart_fail').show();
        $("#mess_price").html(data.price + " VND");
        $("#return_mess_price").show();
        if (data.dtype_name !== "none")
        {
          $("#mess_dtypename").html(data.dtype_name);
          $("#return_mess_dtypename").show();
        }
        else
        {
          $("#return_mess_dtypename").hide();
        }
        break;
      case 3:
        alert(3);
        break;
      default:
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};

function change_pwd()
{
  var new_pwd = $('#new_pwd').val();
  var old_pwd = $('#old_pwd').val();
  var retype_new_pwd = $('#retype_new_pwd').val();
  $('#oldpwd_null').hide();
  $('#newpwd_null').hide();
  $('#retype_match').hide();
  $('#changepwd_success').hide();
  $('#changepwd_error').hide();
  $('#oldpwd_error').hide();
  $('#changepwd_unerror').hide();
  $('#newpwd_same').hide();
  if (old_pwd == "" || old_pwd == null)
  {
    $('#oldpwd_null').show();
    return false;
  }
  if (new_pwd == "" || new_pwd == null)
  {
    $('#newpwd_null').show();
    return false;
  }
  if (new_pwd != retype_new_pwd)
  {
    $('#retype_match').show();
    return false;
  }
  if (new_pwd == old_pwd)
  {
    $('#newpwd_same').show();
    return false;
  }
  var data =
  {
    old_pwd: old_pwd,
    new_pwd: new_pwd
  };
  $.ajax(
  {
    url: '/users/changepwd/',
    type: 'POST',
    data: data,
    cache: false,
    success: function(data)
    {
      var queryCbrtInfo = JSON.parse(data);
      var data = queryCbrtInfo.data;
      switch (queryCbrtInfo.message)
      {
      case 1:
        $('#changepwd_success').show();
        break;
      case 2:
        $('#oldpwd_error').show();
        break;
      case 3:
        $('#oldpwd_error').show();
        break;
      default:
        $('changepwd_unerror').show();
        break;
      }
    },
    error: function(jqXHR, textStatus, errorThrown)
    {
      alert(jqXHR.status);
      //alert(textStatus);
    },
  });
};