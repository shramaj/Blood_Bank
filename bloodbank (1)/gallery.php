<!DOCTYPE html>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-white-black.css">
 <link rel="stylesheet" href="w3/font-awesome-4.6.3/css/font-awesome.min.css">
</head>

<body>



<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index1.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
   
 
    </div>
 
   
 </ul>
<br/>
<br/>
<br/>
<div class="w3-content" style="max-width:800px;position:relative">
  <img class="mySlides" src="images/blood1-ConvertImage.jpg" style="width:100%">
  <img class="mySlides" src="images/blood2-ConvertImage.jpg" style="width:100%">
  <img class="mySlides" src="images/blood3-ConvertImage.jpg" style="width:100%">
  <img class="mySlides" src="images/blood4-ConvertImage.jpg" style="width:100%">
<img class="mySlides" src="images/blood9-ConvertImage.jpg" style="width:100%">
<img class="mySlides" src="images/blood19-ConvertImage.jpg" style="width:100%">

  <a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)"><</a>
  <a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">></a>
</div>

<script>
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
</script>
<footer>
 
   <h2 style="font-family:times,serif;font-style:italic"><center><marquee><font color="red">"Share a little,Care a little"</marquee>
 
</body>
</html>
