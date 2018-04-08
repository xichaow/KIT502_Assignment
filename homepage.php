<!DOCTYPE html>
    <html>
    <head>
    	<title>Home - LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
      <script src="./scripts/jquery.cycle.all.js"></script>
    	<link rel="stylesheet" type="text/css" href="./stylesheets/style-homepage.css">
    </head>
    <body>
       <div>
       	 <a id="logo" href="./homepage.html">
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
       <div id="container">
         <div id="next">&rang;</div>
         <div id="prev">&lang;</div>
       	 <div id="slideshow">
       	 	<a href="./products.php"><img src="./images/slideimg1.png"></a>
          <a href="./products.php"><img src="./images/slideimg2.jpg"></a>
          <a href="./products.php"><img src="./images/slideimg3.jpg"></a>
       	 </div>
       </div>

       <script>
         $('#slideshow').cycle({
          fx:    'scrollHorz',
          next:  '#next',
          prev:  '#prev',
          timeout: 3000,
          pause: 1
         })
       </script>
    <div id="blank1">

    </div>
       
    </body>
    </html>
