$(document).ready(function(){
  $("#btn1").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_views").removeClass("hide").addClass("show").fadein();
  });
  $("#btn2").on("click", function(){
    $(".yt").removeClass("show").addClass("hide");
    $("#youtube_services_more_subs").removeClass("hide").addClass("show");
  })
});
