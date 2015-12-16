<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMANDA'S ORCHID LOGOUT</title>
    <link rel="stylesheet" href="css/newstyle.css" >
  </head>
  <body>
    
    
    <header>
      <div id="shop">
        <div id="logo">
          <img src="images/logo_outline2.svg" alt="logo"/>
        </div>  <!-- end #logo -->
        <div id="companyName">
          <h1>Amanda's</h1>
          <h1>Orchid</h1>
          <h1>Shop</h1>
        </div>  <!-- end #companyName -->
      </div>  <!-- end #shop -->
    </header>
    
    <nav>
        <ul>
          <li><a href="index.php">Sign Up</a></li>
          <li><a href="login.php">LOG IN</a></li>
        </ul>
    </nav>  
    
    <main>
      <form  id="registerForm" method="post" action="login.php">
       <h3>LOG OUT</h3>
        <div class="formElements">
          
            <input type="submit">
            
         </div>   <!-- end .formElements -->

      </form>
    </main>

    <footer>
        <ul>
          <li><a href="index.php">SIGN UP</a></li>
          <li><a href="login.php">LOG IN</a></li>
        </ul> 
        <h6>This site is for educational purpose.</h6>
        <br>
        <p>References:</p>
        <p><a href="http://fontsov.com/font/edwardianscriptitc54019.html">Font: http://fontsov.com/font/edwardianscriptitc54019.html</a></p>         
        <p><a href="http://www.purple-planet.com">Music: http://www.purple-planet.com</a></p>
    </footer>
    
    <script src="js/sound.js" type="text/javascript"></script> 
  </body>
</html>