<!DOCTYPE html>
    <html>
    <head>
    	<title>Category Pendants - LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="./scripts/jquery.cycle.all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./stylesheets/ppendant.css">
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
       

         <tr id="line3">
           <h2>Pendants Lights</h2>
           <table>
             <tr>
                   <td><img src="./images/img9.jpg"></td>
                   <td>
                     <h1>$120 Free Shipping Globally.</h1>
                     <h2>Approximately 20 days to receive.</h2>
                     <div>
                     <form action="./cart.php" method="POST">
                         <h2>Qty</h2>
                         <input type="text" name="qty" size="5">
                         <input type="submit" name="addcart" value="Add To Cart">
                         <input type="hidden" name="number" value="9">
                     </form>
                     </div>
                   </td>
              </tr>
              <tr>
                   <td><img src="./images/img10.jpg"></td>
                   <td>
                     <h1>$240 Free Shipping Globally.</h1>
                     <h2>Approximately 20 days to receive.</h2>
                     <div>
                     <form action="./cart.php" method="POST">
                         <h2>Qty</h2>
                         <input type="text" name="qty" size="5">
                         <input type="submit" name="addcart" value="Add To Cart">
                         <input type="hidden" name="number" value="10">
                     </form>
                     </div>
                   </td>
              </tr>
              <tr>
                   <td><img src="./images/img11.jpg"></td>
                   <td>
                     <h1>$160 Free Shipping Globally.</h1>
                     <h2>Approximately 20 days to receive.</h2>
                     <div>
                     <form action="./cart.php" method="POST">
                         <h2>Qty</h2>
                         <input type="text" name="qty" size="5">
                         <input type="submit" name="addcart" value="Add To Cart">
                         <input type="hidden" name="number" value="11">
                     </form>
                     </div>
                   </td>
              </tr>
              <tr>
                   <td><img src="./images/img12.jpg"></td>
                   <td>
                     <h1>$240 Free Shipping Globally.</h1>
                     <h2>Approximately 20 days to receive.</h2>
                     <div>
                     <form action="./cart.php" method="POST">
                         <h2>Qty</h2>
                         <input type="text" name="qty" size="5">
                         <input type="submit" name="addcart" value="Add To Cart">
                         <input type="hidden" name="number" value="12">
                     </form>
                     </div>
                   </td>
              </tr>
           </table>
         </tr>

    

      <script>
       $(document).ready(function(){
          $("#div1").mouseover(function(){
            $("#div1").fadeTo("slow", 0.6);
         });
          $("#div1").mouseout(function(){
            $("#div1").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div2").mouseover(function(){
            $("#div2").fadeTo("slow", 0.6);
         });
          $("#div2").mouseout(function(){
            $("#div2").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div3").mouseover(function(){
            $("#div3").fadeTo("slow", 0.6);
         });
          $("#div3").mouseout(function(){
            $("#div3").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div4").mouseover(function(){
            $("#div4").fadeTo("slow", 0.6);
         });
          $("#div4").mouseout(function(){
            $("#div4").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div5").mouseover(function(){
            $("#div5").fadeTo("slow", 0.6);
         });
          $("#div5").mouseout(function(){
            $("#div5").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div6").mouseover(function(){
            $("#div6").fadeTo("slow", 0.6);
         });
          $("#div6").mouseout(function(){
            $("#div6").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div7").mouseover(function(){
            $("#div7").fadeTo("slow", 0.6);
         });
          $("#div7").mouseout(function(){
            $("#div7").fadeTo("slow", 1);
         });
       });

       $(document).ready(function(){
          $("#div8").mouseover(function(){
            $("#div8").fadeTo("slow", 0.6);
         });
          $("#div8").mouseout(function(){
            $("#div8").fadeTo("slow", 1);
         });
       });
      </script>
    <div id="blank1">
    <footer>
      Xichao Wang ID:443197
    </footer>
    </div>
       
    </body>
    </html>