$("#mynav").click(function(e) {
    $('html, body').animate({
        scrollTop: $(e.target.parentNode.hash).offset().top-100
    }, 800);
});

