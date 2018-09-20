$(function () {

    var jElement = $('#category');

    $(window).scroll(function () {
        if ($(this).scrollTop() > jElement.scrollTop() + 180) {
            jElement.css({
                'position': 'fixed',
                'top': '2%',
                'width': '26%'
            });
        } else {
            jElement.css({
                'position': '',
                'top': '',
                'width': ''
            });
        }
    });

    $(window).ready(function () {
        if ($(this).scrollTop() > jElement.scrollTop() + 180) {
            jElement.css({
                'position': 'fixed',
                'top': '2%',
                'width': '26%'
            });
        } else {
            jElement.css({
                'position': '',
                'top': '',
                'width': ''
            });
        }
    })

});