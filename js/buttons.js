$(document).ready(function(){
  //трубочистка
  $("#btn_yt").on("click", function(){
    $(".inst").hide();
    $(".twt").hide();
    $("#youtube_services").show();
    $("#order").hide();
    $("#chs_cat").show()
  })
  $("#btn1").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_views").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn2").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_subs").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn3").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_dis").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn4").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_fav").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn5").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_com").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn6").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_like").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn7").on("click", function(){
    $("#chs_yt").show();
    $(".yt_serv").hide();
    $("#youtube_rep").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })


  // Инста
  $("#btn_inst").on("click", function(){
    $(".yt").hide();
    $("#instagram_services").show();
    $(".twt").hide();
    $("#order").hide();
    $("#chs_cat").show()
  })
  $("#btn8").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_subs").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn9").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_likes").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn10").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_autolikes").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn11").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_views").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })
  $("#btn12").on("click", function(){
    $("#chs_inst").show();
    $(".inst_serv").hide();
    $("#instagram_comments").show();
    $("#order").show();
    $("#link").show();
    $("#amount").show();
  })

});
