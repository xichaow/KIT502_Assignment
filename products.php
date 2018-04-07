<!DOCTYPE html>
    <html>
    <head>
    	<title>Products - LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="./scripts/jquery.cycle.all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./stylesheets/products.css">
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
       
       <table id="products">
       	 <div id="line1">
         <tr>
           <td id="div1">
       	 	 <a href="./pchandelier.php"><img src="./images/img1.jpg"></a>
       	   </td>
           <td id="div2">
       	 	 <a href="./pchandelier.php"><img src="./images/img2.jpg"></a>
       	   </td>
       	   <td id="div3">
       	 	 <a href="./pchandelier.php"><img src="./images/img3.jpg"></a>
       	   </td>
       	   <td id="div4">
       	 	 <a href="./pchandelier.php"><img src="./images/img4.jpg"></a>
       	   </td>
       	 </tr>
         </div>
       	 <tr id="line2">
       	   <td id="div5">
       	 	 <a href="./pceiling.php"><img src="./images/img5.jpg"></a>
       	   </td>
           <td id="div6">
       	 	 <a href="./pceiling.php"><img src="./images/img6.jpg"></a>
       	   </td>
       	   <td id="div7">
       	 	 <a href="./pceiling.php"><img src="./images/img7.jpg"></a>
       	   </td>
       	   <td id="div8">
       	 	 <a href="../pceiling.php"><img src="./images/img8.jpg"></a>
       	   </td>
       	 </tr>
         <tr id="line3">
           <td id="div9">
           <a href="./ppendant.php"><img src="./images/img9.jpg"></a>
           </td>
           <td id="div10">
           <a href="./ppendant.php"><img src="./images/img10.jpg"></a>
           </td>
           <td id="div11">
           <a href="./ppendant.php"><img src="./images/img11.jpg"></a>
           </td>
           <td id="div12">
           <a href="./ppendant.php"><img src="./images/img12.jpg"></a>
           </td>
         </tr>
       </table>
    

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