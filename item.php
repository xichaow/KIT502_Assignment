<!DOCTYPE html>
    <html>
    <head>
    	<title>Item - LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="./scripts/jquery.cycle.all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    	  <link rel="stylesheet" type="text/css" href="./stylesheets/membership.css">
        <link rel="stylesheet" type="text/css" href="./stylesheets/style-homepage.css">
        <link rel="stylesheet" type="text/css" href="./stylesheets/item.css">
    </head>
    <body>
       <div>
         <a id="logo" href="./homepage.php">
         <img src="./images/logo.png">
         </a>
       </div>
       <div id="nav">
        <ul id="prime_nav" class="clear">
           <li id="prime_nav-1">
              <a href="./homepage.php">Home</a>
           </li>
           <li id="prime_nav-2" class="dropdown">
              <a href="./products.php"><div class="dropbtn">Products</div></a>
              <div class="dropdown-content">
                  <a href="./pchandelier.php">Chandeliers</a>
                  <a href="./pceiling.php">Ceiling Lights</a>
                  <a href="./ppendant.php">Pendants Lights</a>
              </div>
           </li>
           <li id="prime_nav-3" class="menu">
              <a href="./products.php">Sales</a>
           </li>
           <li id="prime_nav-4" class="menu">
              <a href="./membership.php">Membership</a>
           </li>
           <li id="prime_nav-5" class="menu">
              <a href="">About Us</a>
           </li>
           <li id="prime_nav-6" class="menu">
              <input type="text" name="search" style="font-size: 15px" size="14.5" value="Search Products"></input>
           </li>
           <li id="prime_nav-7" class="dropdown">
              <?php
                 session_start();
                     if($_SESSION['vuser']){
                          $username3=$_SESSION['vuser'];
                             echo "
                                   <a href='./membership_login.php'><div class='dropbtn'>Hi $username3</div></a>
                                   <div class='dropdown-content'>
                                         <a href='./membership_logout.php'>Log out</a>
                                     </div>";
                     }
                     else{
                          echo "<a href='./membership_login.php'><div class='dropbtn'>Log in</div></a>";
                     }
              ?>
           </li>       
        </ul>
       </div>
       
       <div id="item1">
         <img src="./images/img1.jpg">
       </div>
       <?php
       session_start();
       $_SESSION['number']="1";
       $number1=$_SESSION['number'];
       $mysql = mysqli_connect();
       $sql = "SELECT * FROM stock WHERE number='$number1'";
       $result = mysqli_query($mysql,$sql);
       $row=mysqli_fetch_row($result);
       $price = $row[3];
       echo "<h1 id='descrp'>$";
       echo $price; 
       echo " Free Shipping Globally.</h1>
       <h2>
         Approximately 20 days to receive.
       </h2>
       <div class='tocart'>
         <form action='./cart.php' method='POST'>
            <tr>
              <td>Qty</td>
              <td><input type='text' name='qty' size='5'></td>
            </tr>
            <tr>
              <input type='submit' name='addcart' value='Add To Cart'>
            </tr>
         </form>
       </div>";
       ?>
       <div id="blank1">
       </div>
    <footer>
      Xichao Wang ID:443197
    </footer>  
       
    </body>
    </html>