$(document).ready(function(){
  //трубочистка
  $("#btn_yt").on("click", function(){
    $(".inst").hide();
    $(".twt").hide();
    $("#youtube_services").show();
  });
  $("#btn1").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_views").show();
  });
  $("#btn2").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_subs").show();
  });
  $("#btn3").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_order").show();
  });
  $("#btn4").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_dis").show();
  });
  $("#btn5").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_fav").show();
  });
  $("#btn6").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_com").show();
  });
  $("#btn7").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_like").show();
  });
  $("#btn8").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_rep").show();
  });


  // Инста
  $("#btn_inst").on("click", function(){
    $(".yt").hide();
    $("#instagram_services").show();
    $(".twt").hide();
  });
  $("#btn9").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_subs").show();
  });
  $("#btn10").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_likes").show();
  });
  $("#btn11").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_autolikes").show();
  });
  $("#btn12").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_views").show();
  });
  $("#btn13").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_complex").show();
  });
  $("#btn14").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_comments").show();
  });
