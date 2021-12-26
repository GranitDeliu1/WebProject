window.addEventListener('DOMContentLoaded', function() {
    var cookieValue = getCookie('backgroundColor'),
        btns = document.querySelectorAll('.color-btn');
  
    if (cookieValue) {
      setBackgroundColor(cookieValue);
    }
    
    Array.from(btns).forEach(function(btn) {
      btn.addEventListener('click', function() {
        var color = this.getAttribute('data-color');
        setBackgroundColor(color);
      });
    });
  });
  
  function setBackgroundColor(color) {
    document.getElementById("myTopnav").style.backgroundColor = color;
    document.getElementById("footer").style.backgroundColor = color;
    document.getElementById("text").style.backgroundColor = color;
    document.getElementById("text1").style.backgroundColor = color;
    setCookie('backgroundColor', color);
  }
  
  function getCookie(name) {
    var cookies = document.cookie.split(';'),
        cookie = cookies.find(function(str) { return str.indexOf(name + '=') === 0; });
    if (cookie) {
      return cookie.split('=')[1];
    }
    return null;
  }
  
  function setCookie(name, value) {
    document.cookie = name + '=' + value;
  }

  
 function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000);
}