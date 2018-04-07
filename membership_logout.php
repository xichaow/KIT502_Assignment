<!DOCTYPE html>
    <html>
    <head>
    	<title>Logout - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
      <script src="./scripts/jquery.cycle.all.js"></script>
        <link rel="stylesheet" type="text/css" href="./stylesheets/mlogout.css">
    </head>
    <body>
    <?php
        session_start();
        unset($_SESSION['vuser']);
    ?>
       <div>
         <a class="main" id="logo" href="./homepage.php">
         <img src="./images/logo.png">
         </a>
       </div>
       <div id="nav">
        <ul id="prime_nav" class="clear">
           <li id="prime_nav-1">
              <a class="main" href="./homepage.php">Home</a>
           </li>
           <li id="prime_nav-2" class="dropdown">
              <a class="main" href="./products.php"><div class="dropbtn">Products</div></a>
              <div class="dropdown-content">
                  <a class="main" href="./pchandelier.php">Chandeliers</a>
                  <a class="main" href="./pceiling.php">Ceiling Lights</a>
                  <a class="main" href="./ppendant.php">Pendants Lights</a>
              </div>
           </li>
           <li id="prime_nav-3" class="menu">
              <a class="main" href="./products.php">Sales</a>
           </li>
           <li id="prime_nav-4" class="menu">
              <a class="main" href="./membership.php">Membership</a>
           </li>
           <li id="prime_nav-5" class="menu">
              <a class="main" href="">About Us</a>
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
       <div id="blank2">You have logged out
       </div>
       <div id="blank1">
         <footer>
           Xichao Wang ID:443197
         </footer>
       </div>
       
    </body>
    </html>