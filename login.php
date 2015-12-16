<?php 
session_start();
// ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
?>
<!DOCTYPE html>

<?php
if ( isset( $_POST['userName'] ) ) {  

    function validator($data) { 
        if ( isset($data)){ 
            $data = trim($data); 
            $data = stripslashes($data);
            $data = htmlspecialchars($data); 
            $data = filter_var($data, FILTER_SANITIZE_STRING); 
            return $data; 
        } else {
            exit();
        } 
    } 
    $username  = validator($_POST['userName']); // username
    $password  = validator($_POST['password']); // password
    $error; 
    require_once('connectdb.php'); // allow database access
    $results = mysql_query( // check if user exists
            "
            SELECT * FROM aosuser WHERE userName = '$username'
            "
    ) or die (mysql_error()); 
    $userRecords =  mysql_fetch_row($results); 
    if ($username == $userRecords[5] && $password == $userRecords[4]) { // if entered data matches records
        $_SESSION['loggedIn'] = $username; 
        $_SESSION['name'] = $username; 
        header("Location: catalog.php"); // login user
        mysql_close ($link);
        exit();
    } else { 
        $error = "User and/or Password Incorrect"; // 
    } 
} 
?>



<html>
  <head>
    <meta charset="UTF-8">
    <title>AMANDA'S ORCHID LOGIN</title>
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
          <li><a href="login.php"  class="active">LOG IN</a></li>
        </ul>
      </nav>      
    
    <main>
      <form  id="registerForm" method="post" action="login.php">
       <h3>LOG IN</h3>
        <div class="formElements">
          <label>User Name:</label>
          <input type="text" name="userName" id="userName" placeholder="Your User Name: " required>
          <label>Password: </label>
          <input type="password" name="password" id="password" required>
            <br>
            <br>
            <input type="submit">
            <input type="reset">
         </div>   <!-- end .formElements -->
      </form>
    </main>

     <footer>
        <ul>
          <li><a href="index.php" >SIGN UP</a></li>
          <li><a href="login.php" class="active2">LOG IN</a></li>
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
