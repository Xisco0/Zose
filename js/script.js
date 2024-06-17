document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector(".preloader").style.display = "none";
        document.getElementById("content").style.display = "block";
        }, 1000);
    });