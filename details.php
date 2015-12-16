<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMANDA'S ORCHID CATALOG</title>
    <link rel="stylesheet" href="css/newstyle.css" >
</head>
<body>
  
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
        <li><a href="catalog.php" class="active">CATALOG</a></li>
        <li><a href="logout.php">LOG OUT</a></li>
      </ul>
    </nav>   
    
        <!-- // connect and open the db -->
        <?php 
            include "connectdb.php" 
        ?>

        <!-- // Retrieve the information    -->
        <?php
        $result = mysql_query("SELECT * FROM aosproduct WHERE product_id = ".$_GET['id']) or die("Retrieving info failed: ".mysql_error());
        $num_rows = mysql_num_rows($result);
        ?>
        
        <main>
        <h2>Products' Details</h2>
        <table class='detailsTable'>
            <tbody>
             <?php 
                if ($num_rows = 0) {
                    echo "No products come back soon!!!";
                } else {
                    while($row = mysql_fetch_array($result)) {
                        echo '<tr><td><h3>'.$row['item'].
                                '</td><td><p> Description: '.$row['description'].
                                '</p></td><td><p> Our price $'.$row['price'].
                                '</p></td><td><p>Size: '.$row['size'].
                                'in. pot</p></td><td><p> Blooming: '.$row['blooming'].
                                '</p></td><td><p> Watering: '.$row['watering'].
                                '</p></td><td><p> Temperature: '.$row['temperature'].
                                '</p></td><td><img src="images/'.$row['image'].' "/></td>'.
                                '<td><a href="shoppingCart.php?id='.$row['product_id'].'"><input type="button" class="buy" value="BUY"></a></td></tr>';
                    }
                }
                 mysql_close($link);
            ?>
            </tbody>
        </table>
        </main>
        <footer>
        <ul>
          <li><a href="catalog.php" class="active2">CATALOG</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
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