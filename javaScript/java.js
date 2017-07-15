window.onload=start;

function start(){
   currentSlide(1);
   changeSlide();

}
function changeSlide(){
      setTimeout(function(){
          currentSlide(2)
      }, 3000);
      setTimeout(function(){
          currentSlide(3)
      }, 6000);
      setTimeout(function(){
          currentSlide(4)
      }, 9000);
      setTimeout(function(){
          currentSlide(5)
      }, 12000);
      setTimeout(function(){
          currentSlide(1)
      }, 15000);
}
// for slide show
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
