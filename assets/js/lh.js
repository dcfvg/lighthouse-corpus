
$(function() {

  $(".metadatas a").click(function(e){

    e.preventDefault();

    $("a").addClass("off")
    $("a[href^='"+$(this).attr("href")+"']").removeClass("off")

    $(".portrait").addClass('hidden');
    $(".portraits a[href^='"+$(this).attr("href")+"']").parent().removeClass('hidden');

  })

});
