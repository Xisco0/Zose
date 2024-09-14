
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