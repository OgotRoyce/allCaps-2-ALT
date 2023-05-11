// $(function() {

 
  


// });

$(document).ready(function() {
    // Add active class to clicked link
    $(".app-menu .nav-link").click(function() {
        $(".app-menu .nav-link").removeClass("active");
        $(this).addClass("active");
    });
});

