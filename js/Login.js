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
    document.getElementById("span").style.backgroundColor = color;
    document.getElementById("span1").style.backgroundColor = color;
    document.getElementById("span2").style.backgroundColor = color;
    document.getElementById("span3").style.backgroundColor = color;
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

function checkPassword(form) {

  var password = document.getElementById('password').value;
  
  password1 = form.password1.value;

  //if password is empty
  if (password1 == ''){
    swal("Warning!", "Please enter password!", "warning");
      return false;
  }

  //if any of password is incorrect
  else if (password1 != true) {
    swal("Warning!", "Password is not matchy!", "warning");
      return false;
  }

  //if everything is okay!!
  else{
      // alert("Password Match: Welcome to your account")
      swal("Welcome!", "You registered successfuly!", "success");
      return false;
  }
  
}