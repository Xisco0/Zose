
function _logOut() {
	sessionStorage.removeItem("userLoginDataSession");
	window.parent.location.href = website_url + "/admin/";
}



function formatTime() {
  const now = new Date();
  
  let hours = now.getHours();
  let minutes = now.getMinutes();
  const ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; 
  minutes = minutes < 10 ? '0' + minutes : minutes;
  const timeString = `${hours}<span id="blink">:</span>${minutes} ${ampm}`;
  document.getElementById('time').innerHTML = timeString;
}
setInterval(updateTime, 1000);
updateTime();




function _getActiveLink(divid) {
	$("#dashboard, #staff, #product, #blog, #faq").removeClass("active-li");
	$("#" + divid).addClass("active-li");
	$("#page_title").html($("#_" + divid).html());
}



function _getPage(page, divid) {
   _getActiveLink(divid);
  $('#page-content').html('<div class="ajax-loader"><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
  var action = 'get-page';
  var dataString = 'action=' + action + '&page=' + page;
  $.ajax({
    type: "POST",
    url: admin_portal_dashboard,
    data: dataString,
    cache: false,
    success: function (html) {
      $('#page-content').html(html);
    }
  });
}

function alert_close(){
  $('#overlay-div').fadeOut(500);
}


function _get_form(page){
  var action='get-form';
  $('#overlay-div').html('<div class="ajax-loader"><br><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action=' + action + '&page=' + page;
  $.ajax({
  type: "POST",
  url: admin_portal_dashboard,
  data: dataString,
  cache: false,
  success: function(html){
    $('#overlay-div').html(html);
 }
  });
}


function _add_new_staff(){
  var fullname = $('#fullname').val();
  var phone_number = $('#phone_number').val();
  var email_address = $('#email_address').val();
  var role_id = $('#role_id').val();
  var status_id = $('#status_id').val();

  var email_addressRegex =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var phone_numberRegex =/^[^a-zA-Z]*$/;
  var phone_numberlength =/^\d{11}$/;
  var containsPunctuationOrNumber = /[^\p{L}\s]/gu.test(fullname);

  var select_role = document.getElementById("role_id").value;
  var select_status = document.getElementById("status_id").value;


 

  $('#fullname, #phone_number, #email_address, #role_id, #status_id').removeClass('complain');

  if (fullname == ''){
    $('#fullname').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Fill fullname To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (containsPunctuationOrNumber){
    $('#fullname').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Full name cannot Contain Digits or Dots.</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (email_address=='') {
    $('#email_address').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill email address To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (!email_addressRegex.test(email_address)){
    $('#email_address').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Enter a valid Email To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (phone_number=='') {
    $('#phone_number').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Fill phone number To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }
  else if (!phone_numberRegex.test(phone_number)){
    $('#phone_number').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Enter a valid Phone number To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
 
  }else if (!phone_numberlength.test(phone_number)){
    $('#phone_number').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Enter a valid Phone number To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (select_role=="select_role") {
    $('#role_id').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> ROLE ID ERROR!<br/><span>Select Staff Role To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  
  }else if (select_status=="select_status"){
    $('#status_id').addClass('complain');
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> STATUS ID ERROR!<br /><span>Select Staff Status To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
 
  }else{
    $('#fullname, #phone_number, #email_address, #role_id, #status_id').removeClass('complain');

    if (confirm("Confirm!!\n\n ARE YOU SURE TO PERFORM THIS ACTION ?")) {
      const btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;
  

  var dataString ='fullname=' + fullname + '&phone_number=' + phone_number + '&email_address=' + email_address + '&role_id=' + role_id + '&status_id=' + status_id;

    
    $.ajax({
      type: 'POST',
      url: endpoint +'/add-staff?access_key=' + access_key,
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      cache: false,
      success: function (info){
        var success = info.success;
        var message = info.message;
        var access_check = info.check;
  
        if (access_check==0){
          _logOut();
        }else{
  
        if (success == true){
        
          $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
  
          $('#submit_btn').html(btn_text);
            document.getElementById('submit_btn').disabled = false;
            alert_close();
        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
  
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;
        }
      }
      },
  
    });
  }
  
  }
}

function alert_close(){
  $('#overlay-div').fadeOut(500);
}



function _get_staff_login(staff_id){

  var dataString = 'staff_id=' + staff_id;

  $.ajax({
    type: "POST",
    url: endpoint + '/fetch-login?access_key=' + access_key,
    data: dataString,
    dataType: 'json',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false,
    success: function(info) {
      var success = info.success;
      var message = info.message;
      var access_check = info.check;

      if (access_check==0){
        _logOut();
      }else{

      if (success== true) {
        var staff_data = info.data;
        var staff_fullname = staff_data.fullname;
        var last_login = staff_data.last_login;
        var staff_role = staff_data.role_name;
        var status_name = staff_data.status_name;
      
        
        $("#display-fullname").html(staff_fullname);
        $("#display-last-login").html(last_login);
        $("#display-role-id").html(staff_role);
        $("#display-status-name").html(status_name);


      } else {
     
      }
    }
    }
  });
}



function _all_active_staff(status_id) {
  $('#fetch_all_staff').html('<div class="ajax-loader"><br><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
  var search_txt = $('#search_txt').val();
  var dataString = 'search_txt=' + search_txt + '&status_id=' + status_id;

  $.ajax({
    type: 'POST',
    url: endpoint + '/fetch-login?access_key=' + access_key,
    data: dataString,
    dataType: 'json',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false,
    success: function(info) {
      var fetch = info.data;
      var success = info.success;
      var message = info.message;
      var access_check = info.check;
  
      var text = '';
  
      if (access_check == 0) {
        _logOut();
      } else {
        if (success) {

          for (var i = 0; i < fetch.length; i++) {
            var staff_id = fetch[i].staff_id;
            var fullname = fetch[i].fullname;
            var status_name = fetch[i].status_name;
            var role_name = fetch[i].role_name;
  
            text += '<div class="staff-inner" onclick="_get_form_with_id(' + "'update-staff'" + "," + "'" + staff_id +"'"+')">' +
              '<div class="img-div"><img src="all-images/image_profile.png" alt="passport"></div>' +
              '<div class="staff-name">' +
                '<h3>' + fullname + '</h3>' +
                '<hr>' +
                '<p>ID: ' + staff_id + '</p>' +
                '<span>' + role_name + '</span><br class="clear">' +
                '<span class="active">' + status_name + '</span>' +
              '</div>' +
            '</div>';
          }
  
          $('#fetch_all_staff').html(text);

    
        } else {
          text += '<div class="false-notification-div">' +
            "<p> " + message + " </p>" + '</div>';
          $('#fetch_all_staff').html(text);
        }
      }
    },
  });
}





function _get_form_with_id(page, ids){
  $('#overlay-div').html('<div class="ajax-loader"><br><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
  var action='_get_form_with_id';
  var dataString = 'action=' + action + '&page=' + page + '&ids=' + ids;
  $.ajax({
  type: "POST",
  url: admin_portal_dashboard,
  data: dataString,
  cache: false,
  success: function(html){
      $('#overlay-div').html(html);}
      
  });
}













function _get_role(){ 
  $.ajax({
     type: "POST",
     url: endpoint + '/fetch-role?access_key='+ access_key,
     dataType: 'json',
     beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
     cache: false,
     success: function(info){
      var fetch=info.data;
      var success=info.success;
      var message=info.message;
      var access_check = info.check;

        var text ='';
        if (access_check==0){
          _logOut();
        }else{
      if(success==true){  
        for (var i=0; i<fetch.length; i++){
          var role_id =fetch[i].role_id;
          var role_name =fetch[i].role_name;
          text+='<option value="'+role_id+'">'+role_name+'</option>';  
      } 
      $('#role_id').append(text);
      

      }else{
          text+='<option value="'+role_id+'">'+message+'</option>';
          $('#role_id').append(text);
     }
    }
  }
  });
}








function _get_status(){ 
  $.ajax({
     type: "POST",
     url: endpoint + '/fetch-status?access_key='+ access_key,
     dataType: 'json',
     beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
     cache: false,
     success: function(info){
      var fetch=info.data;
      var success=info.success;
      var message=info.message;
      var access_check = info.check;

        var text ='';
        if (access_check==0){
          _logOut();
        }else{
      if(success==true){  

        for (var i=0; i<fetch.length; i++){
          var status_id =fetch[i].status_id;
          var status_name =fetch[i].status_name;
          text+='<option value="'+status_id+'">'+status_name+'</option>';  
      } 
      $('#status_id').append(text);
      

      }else{
          text+='<option value="'+status_id+'">'+message+'</option>';
          $('#status_id').append(text);
     }
    }
  }
  });
}



function _get_staff_profile(staff_id){
  
  var dataString ='staff_id=' + staff_id;

    $.ajax({
      type: 'POST',
      url: endpoint +'/fetch-staff?access_key=' + access_key,
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      cache: false,
      success: function (info){
        var success = info.success;
        var message = info.message;
        var access_check = info.check;
  
        if (access_check==0){
          _logOut();
        }else{
  
        if (success == true){
        var staff_data = info.data;
        var staff_profile_fullname = staff_data.fullname;
        var last_login = staff_data.last_login;
        var staff_id = staff_data.staff_id;
        var staff_role = staff_data.role_name;
        var status_name = staff_data.status_name;
        var email_address = staff_data.email_address;
        var phone_number = staff_data.phone_number;
        var home_address = staff_data.home_address;
        var date = staff_data.date;

        
        $("#staff-profile-fullname").html(staff_profile_fullname);
        $("#get-staff-last-login").html(last_login);
        $("#get-staff-status-name").html(status_name);

        $("#profile-fullname").val(staff_profile_fullname);
        $("#get-staff-role-id").val(staff_role);
        $("#profile-last-login").val(last_login);
        $("#get-staff-status-name").val(status_name);
        $("#profile-email").val(email_address);
        $("#profile-phone-number").val(phone_number);
        $("#profile-home-address").val(home_address);
        $("#profile-staff-id").val(staff_id);
        $("#profile-date").val(date);

      

        $("#role_id").append('<option value="' + role_id + '" selected="selected">' + role_name +"</option>");
        $("#status_id").append('<option value="' + status_id + '" selected="selected">' + status_name +"</option>");

        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
  
          $('#get_submit_btn').html(btn_text);
          document.getElementById('get_submit_btn').disabled = false;
        }
      }
      },
  
    });
  }


  // function _update_all_staff(staff_id){
  //   var dataString ='fullname=' + fullname + '&phone_number=' + phone_number + '&email_address=' + email_address + '&role_id=' + role_id + '&status_id=' + status_id + '&staff_id=' + staff_id;
  
      
  //     $.ajax({
  //       type: 'POST',
  //       url: endpoint +'/update-staff?access_key=' + access_key,
  //       data: dataString,
  //       dataType: 'json',
  //       beforeSend: function(xhr) {
  //         xhr.setRequestHeader('apiKey', apiKey);
  //       },
  //       cache: false,
  //       success: function (info){
  //         var success = info.success;
  //         var message = info.message;
  //         var access_check = info.check;
    
  //         if (access_check==0){
  //           _logOut();
  //         }else{
    
  //         if (success == true){
          
  //           $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
    
  //           $('#submit_btn').html(btn_text);
  //             document.getElementById('submit_btn').disabled = false;
  //             alert_close();
  //         }else{
  //           $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
    
  //           $('#submit_btn').html(btn_text);
  //           document.getElementById('submit_btn').disabled = false;
  //         }
  //       }
  //       },
    
  //     });
  //   }
  
  