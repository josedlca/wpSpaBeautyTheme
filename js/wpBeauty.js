let nextBtn = document.querySelector(".caracteristics__topPart--imgContainer_aftBef-aft");
let prevBtn =  document.querySelector(".caracteristics__topPart--imgContainer_aftBef-bef");

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

nextBtn.addEventListener("click",function(){
	plusDivs(1)
});

prevBtn.addEventListener("click",function(){
	plusDivs(-1)
});
