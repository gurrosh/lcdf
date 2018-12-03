<!DOCTYPE html>
<html>
<head>
	<title>Lycée Claude De France</title>
	<link rel="stylesheet" type="text/css" href="CSS/css_lcdf.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<?php include("header.php") ?>

<br/><br/><br/><br/><br/><br/>

<div class="w3-content w3-display-container w3-section" style="max-width:800px max-height:200px">
	<img class="mySlides w3-animate-right" src="image/portes_ouvertes.png" style="width:100%">
	<img class="mySlides w3-animate-right" src="image/forum-orientation.png" style="width:100%">
	<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-middle" style="width:1200px" >
		<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" style="color: black">&#10096;</div>
		<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(-1)" style="color: black">&#10097;</div>
	</div>
</div>

<?php include ("footer.php") ?>

<script>

// ########## BOUTTON SUIVANT ########## //

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}


// ########## DIAPO AUTOMATIQUE ########## //

var myIndex=0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 8000);    
}
</script>
</body>
</html>