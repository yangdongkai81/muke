$(document).ready(function () {
    $(".video_content").mouseover(function () {
        $(this).find(".video_play").css({opacity: 1})
    });

    $(".video_content").mouseout(function () {
        $(this).find(".video_play").css({opacity: 0.5})
    });
});