<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '<br /><br /><a href="/logout.php">Logout</a>';  
      
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?>  
<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="/stylesheet.css">                                                                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                                                                                                  
  
  
  
  
<style>


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
<div class="fluid-container" id="about"></br>
<h3>About Ruzi</h3><hr>
  <p class="second-text-color"><h4>Ruzi means sustenance.</h4><hr>


 

Ruzi is Azerbaijani for sustenance and sustenance is a quintessential for growth and development.  We at Ruzi believe that sustenance is more than just an individual experience, we believe in connecting people with food, regardless of where you live.  From small, rural towns to major metropolises, we want to bring your sustenance to your doorstep.  Above all, our goal is to take the distance out of dining and to get people and families back to spending their time how they want, without having to trade limited cuisine choices.
<hr>
How it works: Log into our website and peruse menus of local restaurants near you. Place your order through our online ordering system and you’re finished. Our team tracks customer service 24 hours a day, 7 days a week to ensure every order is correct.




  <div class="container-fluid divider-color"></br>
   <h1 class="text-primary-color"> Restaurant Partners</h1>
  <hr> <a href="/partners2.php"><img  src="https://s5.postimg.org/lubix04xz/IMG_0682.jpg" class="thick-gray-border smaller-image"></img></a>
   
 

<hr>

<a href="#"><img src="https://s5.postimg.org/8ow0qwb2f/IMG_0681.jpg" class="thick-gray-border smaller-image"> </img></a>
</div>
</br>
<?php include_once("template_footer.php");?>
   </div>
    </body>
  </div>
</html>