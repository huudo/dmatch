//ajax処理をキャッシュしないように設定(キャッシュさせたい場合は外して下さい)
$.ajaxSetup({
    cache: false
});

$(function() {
  //本体色選択のボーダーの付与
  $("body").on("click", ".searchColor div", function(){
    if($(this).hasClass("is-active")){
      $(this).removeClass("is-active");
    } else {
      $(this).addClass("is-active");
    }
  });

  //アコーディオン系
  $("body").on("click", ".openSwitch", function(){
    var target = $(this).attr("href");
    var self = $(this);
    var dataType = $(this).data("type");

    if($(".openBox--" + target).css("display") == "block"){
      $(".openBox--" + target).slideUp();

      if(dataType == 1){
        self.html("&#8744; <span>もっと詳細な条件</span>");
      } else if(dataType == 2){
        self.html("&#8744; <span>グレード絞り込み</span>");
        $(this).parent(".gradeSelectBox__inner").removeClass("is-open");
      }
    } else {
      $(".openBox--" + target).slideDown();

      if(dataType == 1){
        self.html("&#8743; <span>閉じる</span>");
      } else if(dataType == 2){
        self.html("&#8743; <span>グレード絞り込み</span>");
        $(this).parent(".gradeSelectBox__inner").addClass("is-open");
      }
    }
    return false;
  });

  //モーダル
  $("body").on("click", ".modal", function(){
    var src = $(this).attr("href");
    var toph = $(this).offset().top -200;
    if(toph < 50) toph = 50;

    $(".modalArea").css("top", toph)
    $(".modalArea__contents").load(src);
    $(".layer").fadeIn();
    $(".modalArea").fadeIn();
    return false;
  });
  $("body").on("click", ".modalArea__close, .layer", function(){
    $(".layer").fadeOut();
    $(".modalArea").fadeOut();
    return false;
  });

  //タブ切り替え
  $(".header__nav ul li a").on("click", function(){
    var target = $(this).attr("href");
    $(".header__nav ul li a").removeClass("cre");
    $(this).addClass("cre");

    pageLoad(target);
    return false;
  });

  $(window).on("scroll", function(){
    var target = $(".resultMain");
    var targetTop = false;
    if(target.length){
      targetTop = target.offset().top;
    }
    var scrollTop = $(this).scrollTop();

    var fixedArea = $(".resultMainHead");

    if(targetTop < scrollTop){
      fixedArea.addClass("fixed");
      target.addClass("fixed");
    } else {
      fixedArea.removeClass("fixed");
      target.removeClass("fixed");
    }
  });

  $("body").on("click", ".resultTab", function(){
    var targetNumber = $(this).data("number");

    $(".resultTab").removeClass("is-active");
    $(this).addClass("is-active");

    $(".resultTarget").hide();
    $(".resultTarget--" + targetNumber).show();

    keepHeightTable(targetNumber);

    return false;
  });

  //検索エリア切り替え
  $("body").on("click", ".resultController__tabs a", function(){
    var target = $(this).data("set");
    $(".resultController__tabs li").removeClass("is-active");
    $(this).parent("li").addClass("is-active");
    $(".tabResult").hide();
    $("." + target).show();

    return false;
  })

});

function pageLoad(src){
  $(".contents").load(src, function(){
    if(src == "page-retail.html" || src == "page-aa.html" ){
      if(src == "page-retail.html"){
        $(".ajaxResult").load("tab-retail.html", function(){
          keepHeightTable(false);
        });
      } else {
        $(".ajaxResult").load("tab-aa.html", function(){
          keepHeightTable(false);
        });
      }
    }
  });
}

function keepHeightTable(number){
  $(".resultMainBody__head span").css("height", "auto");
  $(".resultMainBody__name span").css("height", "auto");
  $(".resultMainBody__detail span").css("height", "auto");

  $(".resultMainBody").each(function(){
    var $allHead = $(this).find(".resultMainBody__head span");
    var $bodyHead = $(this).find(".resultMainBody__name span");
    var $bodyFixed = $(this).find(".resultMainBody__fixed span");

    if(number){
      var $bodyBody = $(this).find(".resultTarget--" + number + " span");
    } else {
      var $bodyBody = $(this).find(".resultMainBody__detail span");
    }
    
    var PAD = 15;

    var maxHeight = 0;
    $bodyBody.each(function(){
      if($(this).height() > maxHeight) maxHeight = $(this).height();
    });
    $bodyFixed.each(function(){
      if($(this).height() > maxHeight) maxHeight = $(this).height();
    });

    maxHeight += PAD;
    var bodyBodyHeight = $bodyHead.height() + PAD;
    var allHeight = maxHeight + bodyBodyHeight + 1;

    $bodyBody.css("height", maxHeight);
    $bodyFixed.css("height", maxHeight);
    $bodyHead.css("height", bodyBodyHeight);
    $allHead.css("height", allHeight);
  });
}