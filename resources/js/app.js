require('./bootstrap');
require('./layer');
require('./common');

$(document).ready(function () {
    $("#comClass").hover(function () {
        $("#comClass").addClass("open");
        $("#comClass").find(".menu").slideDown(300);
    },function () {
        $("#comClass").find(".menu").slideUp(100);
    });


});