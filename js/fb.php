var time = 0;
window.setInterval(function () {
    time = time + 1;
    $(".t1").html(time + 1 + "m");
    $(".t2").html(time + 2 + "m");
    $(".t3").html(time + 4 + "m");
}, 6e4);
var likes = 37,
    comments = 11,
    shares = 7;
window.setInterval(function () {
    likes = likes + Math.floor(Math.random() * 3);
    comments = comments + Math.floor(Math.random() * 2);
    shares = shares + Math.floor(Math.random() * 2);
    $("#likes").html(likes + "K");
    $("#comments").html(comments + "K comments");
    $("#shares").html(shares + "K shares");
}, 5e3);
$(".liked").click(function () {
    if ($(this).hasClass("selected")) {
        $(this).removeClass("selected");
        $(this).html("Like");
    } else {
        $(this).addClass("selected");
        $(this).html("Unlike");
    }
});