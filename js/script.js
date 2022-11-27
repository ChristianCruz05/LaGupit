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

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}