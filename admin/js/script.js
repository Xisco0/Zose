

function alert_close(){
  $('#overlay-div').fadeOut(500);
}

  function _next_page(next_id) {
    $('.log-div').hide();
    $('#'+next_id).fadeIn(1000);
  }
    
  function _get_page(page){
    $('#overlay-div').html('<div class="ajax-loader"><br><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
    var action='get-form';
    var dataString ='action='+ action+'&page='+ page;
    $.ajax({
    type: "POST",
    url:  admin_login_local_url,
    data: dataString,
    cache: false,
    success: function(html){
      $('#overlay-div').html(html);}
   });
  }

  function _get_section(page){
    $('#overlay-div').html('<div class="ajax-loader"><br><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
    var action='password-reset-successful';
    var dataString ='action='+ action+'&page='+ page;
    $.ajax({
    type: "POST",
    url:  admin_login_local_url,
    data: dataString,
    cache: false,
    success: function(html){
    $('#overlay-div').html(html);}
  });
  }
  
  



  function _reset_password(){
    var email_address = $('#reset_password_email').val();

    var email_addressRegex =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email_address== ''){
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill email To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (!email_addressRegex.test(email_address)){
      $('#email_address').addClass('complain');
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Invalid email address</span>').fadeIn(500).delay(3000).fadeOut(100);
    } else{
      const btn_text = $("#submit_button").html();
      $("#submit_button").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_button").disabled = true;

      var dataString ='email_address=' + email_address;

      $.ajax({
        type: 'POST',
        url: endpoint +'/reset-password',
        data: dataString,
        dataType: 'json',
        beforeSend: function(xhr) {
          xhr.setRequestHeader('apiKey', apiKey);
        },
        cache: false,
        success: function (info){
          var success = info.success;
          var message = info.message;
       
         

          if (success == true){
            sessionStorage.setItem("resetPasswordDataSession", JSON.stringify(info));
  
            $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $("#email").val("");

            $('#submit_button').html(btn_text);
              document.getElementById('submit_button').disabled = false;
              _get_resetPass_form();
          }else{
            $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
    
            $('#submit_button').html(btn_text);
            document.getElementById('submit_button').disabled = false;
          }
        
       },
    
    });
    

      
    }


  }



  function _get_resetPass_form(){
    var resetPasswordDataSession = JSON.parse(sessionStorage.getItem("resetPasswordDataSession"));
    var action='reset_password';
    $('#overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
    var dataString ='action='+ action;
    $.ajax({
    type: "POST",
    url: admin_login_local_url,
    data: dataString,
    cache: false,
    success: function(html){
      $('#overlay-div').html(html);
      $('#pass_fullname').html(resetPasswordDataSession.fullname);
      $('#pass_email').html(resetPasswordDataSession.email_address);
    }
   });
  }




  function _finish_reset_password(){
    var resetPasswordDataSession = JSON.parse(sessionStorage.getItem("resetPasswordDataSession"));

    var staff_id = resetPasswordDataSession.staff_id;
    var otp = $('#otp').val();
    var create_password = $('#create_password').val();
    var confirm_password = $('#confirm_password').val();


    if (otp== ''){
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OTP ERROR!<br /><span>Enter OTP To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
    
    }else if (create_password== '') {
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill password To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
    
    }else if (confirm_password== '') {
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill confirm password To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
   
    }else if (confirm_password != create_password) {
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Incorrect confirm password </span>').fadeIn(500).delay(3000).fadeOut(100);
   
    }else{
      const btn_text = $("#submit_button").html();
      $("#submit_button").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_button").disabled = true;


      var dataString ='otp=' + otp + '&password=' + create_password +  '&staff_id=' + staff_id;

      $.ajax({
        type: 'POST',
        url: endpoint +'/finish-reset-password',
        data: dataString,
        dataType: 'json',
        beforeSend: function(xhr) {
          xhr.setRequestHeader('apiKey', apiKey);
        },
        cache: false,
        success: function (info){
          var success = info.success;
          var message = info.message;
         
        
          if (success == true){
    
            $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
            $("#otp,#create_password,#confirm_password").val("");
     
            sessionStorage.removeItem("resetPasswordDataSession");
              _finish_password();
          }else{
            $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
    
            $('#submit_button').html(btn_text);
            document.getElementById('submit_button').disabled = false;
          }
        
       },
    
    });
    
    }

  }


  
  function _finish_password(){
    var action='password_reset_successful';
    $('#overlay-div').html('<div class="ajax-loader"><br><img src="all-images/ajax-loader.gif"/></div>').fadeIn(500);
    var dataString ='action='+ action;
    $.ajax({
    type: "POST",
    url: admin_login_local_url,
    data: dataString,
    cache: false,
    success: function(html){
      $('#overlay-div').html(html);
    }
    });
  }






  function _resend_otp(){
    var resetPasswordDataSession = JSON.parse(sessionStorage.getItem("resetPasswordDataSession"));
    var staff_id = resetPasswordDataSession.staff_id;

      var dataString = '&staff_id=' + staff_id;

      $.ajax({
        type: 'POST',
        url: endpoint +'/resend-otp',
        data: dataString,
        dataType: 'json',
        beforeSend: function(xhr) {
          xhr.setRequestHeader('apiKey', apiKey);
        },
        cache: false,
        success: function (info){
          var success = info.success;
          var message = info.message;
         
        
          if (success == true){
    
            $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);

          }else{
            $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
    
           
          }
        
       },
    
    });
    
    }

  





  
    function _login_admin_dashboard(){
      var email_address = $('#email_address').val();
      var password = $('#password').val();
  
      var email_addressRegex =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      
      $('#email_address, #password').removeClass('complain');
      if (email_address== ''){
        $('#email_address').addClass('complain');
        $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill email To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
      }else if (!email_addressRegex.test(email_address)){
        $('#email_address').addClass('complain');
        $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Invalid email address</span>').fadeIn(500).delay(3000).fadeOut(100);
      } else if (password== ''){
        $('#password').addClass('complain');
        $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill password To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
      } else{
        $('#email_address, #password').removeClass('complain');

        const btn_text = $("#login_submit_button").html();
        $("#login_submit_button").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
        document.getElementById("login_submit_button").disabled = true;
  
        var dataString ='email_address=' + email_address + '&password=' + password;
  
        $.ajax({
          type: 'POST',
          url: endpoint +'/login',
          data: dataString,
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader('apiKey', apiKey);
          },
          cache: false,
          success: function (info){
            var success = info.success;
            var message = info.message;
            var access_key = info.access_key;
            var staff_id = info.staff_id;

       
           
            if (success== true){
              sessionStorage.setItem("access_key", JSON.stringify(access_key));
              sessionStorage.setItem("staff_id", JSON.stringify(staff_id));

              $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(800).fadeOut(100);

              window.parent.location.href = admin_portal_local;

              $('#login_submit_button').html(btn_text);
              document.getElementById('login_submit_button').disabled = false;

            }else{
              $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
    
            $('#login_submit_button').html(btn_text);
            document.getElementById('login_submit_button').disabled = false;
            }
          
         },
      
      });
      
  
        
      }
  
  
    }





