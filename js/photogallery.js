var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slides");
  console.log(x);
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  console.log(x[slideIndex]);
  console.log(x[slideIndex-1]);
  x[slideIndex-1].style.display = "block";  
}

// Code learnt from w3schools http://www.w3schools.com/w3css/w3css_slideshow.asp 
