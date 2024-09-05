document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
document.querySelector(".preloader").style.display = "none";
document.getElementById("content").style.display = "block";
}, 800);
});



function _LoginAdmins() {
    const email= $('#email').val();
    const password = $('#password').val();
  
    $('#email, #password').removeClass('complain');
  
    if (email== '') {
      $('#email').addClass('complain');
      $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div> Email ERROR!<br /><span>Check  Email And Try Again</span>').fadeIn(500).delay(3000).fadeOut(100);
    
    } else if (password== '') {
      $('#password').addClass("complain");
      $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div> Password ERROR!<br /><span>Check Password And Try Again <span>').fadeIn(500).delay(3000).fadeOut(100);
    
    } else {
        $('#email, #password').removeClass('complain');
  
      if (confirm("Confirm!!\n\n ARE YOU SURE TO PERFORM THIS ACTION ?")) {
        const btn_text = $("#submit_btn").html();
        $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
        document.getElementById("submit_btn").disabled = true;
  
        const form_data = new FormData();
        form_data.append("email", email);
        form_data.append("password", password);

        
        $.ajax({
          type: "POST",
          url: endPoint + 'request-loan',
          data: form_data,
          dataType: "json",
          contentType: false,
          cache: false,
          headers: {
            'apiKey': apiKey,  
          },
          processData: false,
          success: function (info) {
            const success = info.success;
            const message = info.message;
  
            if (success == true) {
              $("#success-div").html('<div><i class="bi-check"></i></div>' + message +"" ).fadeIn(500).delay(5000).fadeOut(100); 
              $("#email").val("");
              $("#password").val("");
            } else {
              $("#warning-div").html('<div><i class="bi-exclamation-octagon-fill"></i></div> ' + message +"").fadeIn(500) .delay(5000).fadeOut(100);
            }
            $("#submit_btn").html(btn_text);
            document.getElementById("submit_btn").disabled = false;
            
            
          },
        });
      }
    }
  }





  function _fetchLoanRequest() {
    $('#fetch_all_loan').html('<div class="ajax-loader"><img src="' + website_url + '/all-images/ajax-loader.gif"/></div>').fadeIn("fast");
      let dataString = '';
      $.ajax({
        type: "POST",
        url: endPoint + '/fetch-loan-request',
        data: dataString,
        dataType: "json",
        cache: false,
        headers: {
          'apiKey': apiKey,  
        },
        success: function(info) {
          const fetch = info.data;
          const success = info.success;
          const message = info.message;
          
          let text = '';
          if (success== true) {
              for (let i = 0; i < fetch.length; i++) {
                const transaction_id = fetch[i].transaction_id;
                const fullname = fetch[i].fullname;
                const loan_amount = fetch[i].loan_amount;
                const loan_duration = fetch[i].loan_duration;

                text +=
                '<div class="slide-form">'+
                 '<div class="slider-div">'+       
                    '<span>'+ transaction_id +'</span>'+
                    '<h3>'+ fullname +'</h3>'+
                    '<div class="slider-div-in">'+
                      '<span>'+ loan_amount +'</span>'+
                      '<a href="' + website_url + '/duration?transaction_id=' + transaction_id + '">' +
                      '<button>'+ loan_duration +' months + </button></a>'+
                    '</div>'+
                  '</div>'+
                '</div>';
              }
            $('#fetch_all_loan').html(text);
          } else {
            text +=
              '<div class="false-notification-div">' +
                "<p> " + message + " </p>"
               "</div>";
            $('#fetch_all_loan').html(text);
          }
       },
      });
  }



  



  function _fetchLoanDetails(transaction_id) {
    const dataString = "transaction_id=" + transaction_id;
  
    $.ajax({
      type: "POST",
      url: endPoint + '/fetch-loan-details',
      data: dataString,
      dataType: "json",
      cache: false,
      headers: {
        'apiKey': apiKey,  
      },
      success: function (info) {
        const fetch = info.repayments;
        const success = info.success;
        const message = info.message;
        const transaction_id = info.transaction_id;  
        const fullname = info.fullname;  
        const loan_amount = info.loan_amount; 
        const loan_duration = info.loan_duration; 
        const total_repayment = info.total_repayment;  
        const request_date = info.request_date; 

        $('#transaction_id').html(transaction_id);
        $('#fullname').html(fullname);
        $('#loan_amount').html(loan_amount);
        $('#loan_duration').html(loan_duration);
        $('#total_repayment').html(total_repayment);
        $('#request_date').html(request_date);
        
        let text = '';
        if (success == true) {
            text =
            '<tr>'+
              '<th> MONTHS</th>'+
              '<th>LOAN BALANCE</th>'+
              '<th>SUB PAYMENT</th>'+
              '<th>INTEREST</th>'+
              '<th>TOTAL REPAYMENT</th>'+
            '</tr>';

              for (let i = 0; i < fetch.length; i++) {
                const month = fetch[i].month;
                const loan_balance = fetch[i].loan_balance;
                const sub_payment = fetch[i].sub_payment;
                const interest = fetch[i].interest;
                const total_repayment = fetch[i].total_repayment;

                text +=
                '<tr>'+
                  '<td>'+ month +'</td>'+
                  '<td>'+ loan_balance +'</td>'+
                  '<td>'+ sub_payment +'</td>'+
                  '<td>'+ interest +'</td>'+
                  '<td>'+ total_repayment +'</td>'+
                '</tr>';
              }
              $('#fetch_table').html(text);
             
        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div> <span>'+ message +'</span>').fadeIn(500).delay(5000).fadeOut(100);
          
        }
        
      },
    });
  }



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
  
  
  function dashboard_url(){
    window.parent.location.href = (admin_portal_local);
  }