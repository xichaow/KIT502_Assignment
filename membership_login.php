<!DOCTYPE html>
    <html>
    <head>
    	<title>Login - LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
      <script src="./scripts/jquery.cycle.all.js"></script>
      <link rel="stylesheet" type="text/css" href="./stylesheets/mlogin.css">
    </head>
    <body>
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
        </ul>
       </div>
       
<?php
    session_start();
if($_SESSION['vuser']){
      $username3=$_SESSION['vuser'];
      $mysql3 = mysqli_connect();
      $sql3 = "SELECT * FROM customers WHERE username='$username3'";
      $result3 = mysqli_query($mysql3,$sql3);
      $row = mysqli_fetch_row($result3);
      if($row[6]==1){
        echo "<div class='admin'><h2>Welcome Admin: $username3</h2></div>";
        echo "<div class='admin'>
              <h3>Product Management</h3>
              <form action = './admininsert.php' method='POST'>
                <input type='submit' value='Product Insert'>
              </form>
              <form action = './adminupdate.php'>
                <input type='submit' value='Product Update'>
              </form>
              <form action = './admindelete.php'>
                <input type='submit' value='Product Delete'>
              </form>
              <form action = './adminsearch.php'>
                <input type='submit' value='Product Search'>
              </form>
              <h3>Customer Management</h3>
              <form action = './custinsert.php' method='POST'>
                <input type='submit' value='Customer Insert'>
              </form>
              <form action = './custupdate.php'>
                <input type='submit' value='Customer Update'>
              </form>
              <form action = './custdelete.php'>
                <input type='submit' value='Customer Delete'>
              </form>
              <form action = './custsearch.php'>
                <input type='submit' value='Customer Search'>
              </form>
              </div>";
      }
      else{
        echo "<div class='admin'><h2>Welcome $username3 !</h2></div>";
        echo "<div class='admin'>
                <form action = './cart.php'>
                <input type='submit' value='My Trolley' id='trolley'>
                </form>
              </div>";
      }
    }
else{
if($_POST['search1']==''){
   echo "<div class='login'><h2>Please login to the system</h2></div>";
   echo "<form action = './membership_login.php' method='POST' id='loginform'>
         <tr>
            <td>Username:</td>
            <td><input type='text' name='username1' size='15'></td>
         </tr><br>
         <tr>
            <td>Password:</td>
            <td><input type='text' name='password1' size='15'></td>
         </tr><br>
         <tr>
            <td><input type='submit' name='search1' value='submit'></td>
            <td><input type='reset'  name='reset' value='reset'></td>
         </tr><br>
         <tr>
            <div class='signup'><h2>If you don't have an account</h2></div>
            <td><a href='membership.php'>Please Sign Up</a></td>
         </tr>
      </form>";
}
else{
  $username2=$_POST['username1'];
  $password2=$_POST['password1'];
  $mysql = mysqli_connect();
  $sql0 = "SELECT * FROM customers WHERE username='$username2'";
  $result0 = mysqli_query($mysql,$sql0);
  $row0 = mysqli_fetch_row($result0);
  if($row0[6]==1){
    $password3=MD5($password2);
    $mysql = mysqli_connect();
    $sql1 = "SELECT * FROM customers WHERE username='$username2' AND password='$password3'";
    $result1 = mysqli_query($mysql,$sql1);
    echo $password3;
    if(mysqli_num_rows($result1)>=1){
      $_SESSION['vuser'] = $username2;
      header('location: ./membership_login.php');
    }
    else{
      echo "<div class='login'><h2>Invalid username/password</h2></div>";
      echo "<div class='login'><h2>Please login to the system</h2></div>";
      echo "<form action = './membership_login.php' method='POST' id='loginform'>
         <tr>
            <td>Username:</td>
            <td><input type='text' name='username1' size='15'></td>
         </tr><br>
         <tr>
            <td>Password:</td>
            <td><input type='text' name='password1' size='15'></td>
         </tr><br>
         <tr>
            <td><input type='submit' name='search1' value='submit'></td>
            <td><input type='reset'  name='reset' value='reset'></td>
         </tr><br>
         <tr>
            <div class='signup'><h2>If you don't have an account</h2></div>
            <td><a href='membership.php'>Please Sign Up</a></td>
         </tr>
      </form>";
    }
  }
  else{
  $mysql = mysqli_connect();
  $sql1 = "SELECT * FROM customers WHERE username='$username2' AND password='$password2'";
    $result1 = mysqli_query($mysql,$sql1);
    if(mysqli_num_rows($result1)>=1){
      $_SESSION['vuser'] = $username2;
      header('location: ./membership_login.php');
    }
    else{
      echo "<div class='login'><h2>Invalid username/password</h2></div>";
      echo "<div class='login'><h2>Please login to the system</h2></div>";
      echo "<form action = './membership_login.php' method='POST' id='loginform'>
         <tr>
            <td>Username:</td>
            <td><input type='text' name='username1' size='15'></td>
         </tr><br>
         <tr>
            <td>Password:</td>
            <td><input type='text' name='password1' size='15'></td>
         </tr><br>
         <tr>
            <td><input type='submit' name='search1' value='submit'></td>
            <td><input type='reset'  name='reset' value='reset'></td>
         </tr><br>
         <tr>
            <div class='signup'><h2>If you don't have an account</h2></div>
            <td><a href='membership.php'>Please Sign Up</a></td>
         </tr>
      </form>";
    }
  }

}
}
?>
    <div id="blank1">
    <footer>
      Xichao Wang ID:443197
    </footer>
    </div> 
       
    </body>
    </html>