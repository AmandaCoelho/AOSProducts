<?php 
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMANDA'S ORCHID HOME</title>
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
        <li><a href="index.php" class="active">SIGN UP</a></li>
        <li><a href="login.php">LOG IN</a></li>
      </ul>
    </nav>    
    
    <main>
      <form  id="registerForm" method="post" action="action.php">
        <h3>REGISTRATION</h3>
        <div class="formElements">
          <label>First Name: </label>
          <input type="text" name="firstName" id="fistName"  placeholder="Your First Name: " autofocus required>
          <label>Last Name: </label>
          <input type="text" name="lastName" id="lastName"  placeholder="Your Last Name: " required>
          <label>User Name: </label>
          <input type="text" name="userName" id="userName" placeholder="Your User Name: " required>
          <label>Email: </label>
          <input type="email" name="email" id="email"  placeholder="Your Email: " required>
          <label>Password: </label>
          <input type="password" name="password" id="password" required>
          <label>Confirm Password: </label>
          <input type="password" name="confirmPassword" id="confirmPassword" required>
            <br>
            <br>
            <input type="submit">
            <input type="reset">
         </div>   <!-- end .formElements -->
        
      <footer>
        <ul>
          <li><a href="index.php" class="active2">SIGN UP</a></li>
          <!-- <li><a href="login.php">LOG IN</a></li> -->
        </ul> 
        <h6>This site is for educational purpose.</h6>
        <br>
        <p>References:</p>
        <p><a href="http://fontsov.com/font/edwardianscriptitc54019.html">Font: http://fontsov.com/font/edwardianscriptitc54019.html</a></p>         
        <p><a href="http://www.purple-planet.com">Music: http://www.purple-planet.com</a></p>
    </footer>
    </footer>
   
     <script src="js/sound.js" type="text/javascript"></script> 
  </body>
</html>
