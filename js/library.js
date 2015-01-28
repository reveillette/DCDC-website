$(".likes").click(function() {
    $(this).toggleClass("likes").toggleClass("isliked");
    var i = $(this).text();
    i++;
    $(this).text(i);
});

$(".isliked").click(function() {
    $(this).toggleClass("isliked").toggleClass("likes");
    var j = $(this).text();
    j--;
    console.log(j);
    $(this).text(j);
});

