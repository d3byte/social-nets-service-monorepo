$(document).ready(function(){
  $("#btn1").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_views").removeClass("hide").addClass("show").fadein();
  });
  $("#btn2").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_subs").removeClass("hide").addClass("show");
  })
  $("#btn3").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_order").removeClass("hide").addClass("show");
  })
  $("#btn4").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_dis").removeClass("hide").addClass("show");
  })
  $("#btn5").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_fav").removeClass("hide").addClass("show");
  })
  $("#btn6").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_com").removeClass("hide").addClass("show");
  })
  $("#btn7").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_like").removeClass("hide").addClass("show");
  })
  $("#btn8").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_rep").removeClass("hide").addClass("show");
  })
});
