$(document).ready(function () {
    var breakpoint = 1000;

    if ($(window).width() < breakpoint) {
        $('.js-slidein').removeClass('js-slidein');
    }

    $('.js-slidein').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
        $(this).removeClass('js-slidein');
        }
    });

    $(window).scroll(function () {
        $('.js-slidein').each(function (i) {
        var bottomObject = $(this).offset().top + $(this).outerHeight() / 3;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
            $(this).addClass('js-slidein-visible');
        }
        });
    });
});

let slideIndex = 0;
showSlides();

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }