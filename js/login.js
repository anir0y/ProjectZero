  $(".section").click(function () {
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 1000);
            return false;
        });
