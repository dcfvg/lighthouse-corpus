
$(function() {

  $("a").hover(function(){

    $("a").addClass("off").removeClass("on");
    $("a[href^='"+$(this).attr("href")+"']").removeClass("off").addClass("on");


  })

  $("metadatas").hover(function(){}, function(){
        $("a").removeClass("off");
  })
  //


});
