document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
document.querySelector(".preloader").style.display = "none";
document.getElementById("content").style.display = "block";
}, 1000);
});



function _open_menu(){
  $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
  $('.index-menu-back-div').animate({'margin-left':'0'},400);
}

function _close_side_nav(){
  $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
  $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
}

function _open_li(ids){
  $('#'+ids+'-sub-li').slideToggle('slow');
}

function _collapse(div_id) {
var x = document.getElementById(div_id + "num");
if (x.innerHTML === '&nbsp;<i class="bi-dash"></i>&nbsp;') {
  x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
} else {
  x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
}
  $('#'+div_id+'answer').slideToggle('slow');
  }










      