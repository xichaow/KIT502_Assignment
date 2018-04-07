<!DOCTYPE html>
    <html>
    <head>
    	<title>LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="./scripts/jquery.cycle.all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./stylesheets/style-homepage.css">
        <link rel="stylesheet" type="text/css" href="./stylesheets/cart.css">
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
              <a href="">Sales</a>
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
       <h2>Your Shopping Cart:</h2>
       <?php
       session_start();
       if($_POST['qty']){
         $qty=$_POST['qty'];
         $number=$_SESSION['number'];
         $username=$_SESSION['vuser'];
         $mysql = mysqli_connect();
         $sql = "SELECT * FROM stock WHERE number='$number'";
         $result = mysqli_query($mysql,$sql);
         $row = mysqli_fetch_row($result);
         $price=$row[3];
         $itemname=$row[1];
         $sql0= "SELECT * FROM transaction WHERE itemid='$number' AND username='$username'";
         $result0=mysqli_query($mysql,$sql0);
         if(mysqli_num_rows($result0)>=1){
           $row0=mysqli_fetch_row($result0);
           $qty9=$qty+$row0[3];
           $sql1= "UPDATE transaction SET qty='$qty9'";
           $result1=mysqli_query($mysql,$sql1);
         }
         else{
           $sql1= "INSERT INTO transaction(itemid, itemname, qty, price, username) VALUES ('$number','$itemname','$qty','$price','$username')";
           $result1=mysqli_query($mysql,$sql1);
         }
         $sql2= "SELECT * FROM transaction";
         $result2=mysqli_query($mysql,$sql2);
         echo "<table>";
         echo "<tr>
               <th>Item#</th>
               <th>Name</th>
               <th>Price</th>
               <th>Quantity</th>
              </tr>";
         while($row = mysqli_fetch_row($result2)){
           echo "<tr><td>";
           echo $row[1];
           echo "</td><td>";
           echo $row[2];
           echo "</td><td>";
           echo $row[4];
           echo "</td><td>";
           echo $row[3];
           echo "</td></tr>";
          }
         echo "</table>";

       }
       else{
        echo"<h3>There are no items in your cart</h3>";
       }

       ?>
       
       <div id="tocart">
         <input type="submit" id="checkout" value="Check Out">
       </div>
       <div id="blank1">
         
       </div>
      
       
    </body>
    </html>