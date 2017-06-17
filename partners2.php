<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="/stylesheet.css">                                                                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                                                                                                  
 <script src="slideshow.js"></script> 
  
  
  
<style>

.primary-color { background: #0276fd; }
/*.background-color { background: #f0f0e0; }*/
.text-primary-color { color: #ffffff; }

.accent-color { background: #5dfc0a ; }

.primary-text-color { color: #212121; }

.secondary-text-color { color: #757575; }

.divider-color { background-color: gray; }

.accent-text { color:#5dfc0a;}



.thick-gray-border {
      border-color: #5dfc0a;
      border-width: 10px;
      border-style: solid;
    border-radius: 50%;}


    .smaller-image {
      width: 50%;

    }

    .largest-image {
      width: 75%;}

.smallest-image {
  width: 35%;}
  
  

  
  .navbar {
   background-color:gray; 
    
}
  
  
 /*carousel*/ 
  
  
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 50%;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 50%;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 50%;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

 

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 20s;
  animation-name: fade;
  animation-duration: 20s;
}

@-webkit-keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}



.prev {
  left: 0;
  border-radius: 50%;
}







  a:link {color: #212121; text-decoration: none; }

a:visited {color: #212121; text-decoration: none; }
    a:hover {color: #5dfc0a; text-decoration: none; }

    
   </style>
 </head>
  
<?php include_once("template_navigation.php");?>
  



 <div class="container-fluid background-color text-center">
<div class="container-fluid divider-color text-primary-color">
  


      
        

    
    
    
       
    </div>  
    
 <body> 

  <div class="container-fluid inline-block primary-color text-primary-color"> 
   <header>
     </br>  
     
     <h1>  Ruzi</h1>
   <img class="largest-image thick-gray-border" src=" https://s5.postimg.org/4fmpazifb/IMG_0674.jpg  "></br></img>
   <h2>   Beat the Rush</h2>
   </header>
   </div>





  <div class="container-fluid divider-color"></br>
   <h1 class="text-primary-color"> Restaurant Partners</h1>
  <hr> 
   


<div class="slideshow-container">
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src=" https://s5.postimg.org/lztkit9tz/IMG_0697.png" style="width:100%" class="thick-gray-border">
    <div class="text"><a href="/sweetBeansMenu.php">Menu</a></div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src=" https://s5.postimg.org/56xh90mtj/IMG_0372.jpg" style="width:100%" class="thick-gray-border">
    <div class="text"><a href="#">Menu</></div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="https://s5.postimg.org/7dx4j72pz/IMG_0362.jpg " style="width:100%" class="thick-gray-border" >
    <div class="text"><a href="">Menu</a></div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
 

<hr>

<a href="#"><img src="https://s5.postimg.org/8ow0qwb2f/IMG_0681.jpg" class="thick-gray-border smallest-image"> </img></a>
</div>
</br>


<?php include_once("template_footer.php");?>
    </body>
  </div>
</html>