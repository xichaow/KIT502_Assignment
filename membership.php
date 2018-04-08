<!DOCTYPE html>
    <html>
    <head>
    	<title>Membership - LightInTheHome - Global Online Shopping for Lightings</title>
    	<script src="./scripts/jquery-latest.js"></script>
      <script src="./scripts/jquery.cycle.all.js"></script>
      <link rel="stylesheet" type="text/css" href="./stylesheets/member.css">
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
           </li>          
        </ul>
       </div>
       
       <div id="member">
       <h1>Sign up to become a Member</h1>
       <h2>By creating an acount you'll be able to be one of our members, saving shopping lists, receiving special email offers and promotions, tracking order status, and much more.</h2>
       </div>
<?php
    session_start();
    if($_POST['btn']){
            $username2 = $_POST['username1'];
            $password2 = $_POST['password1'];
            $repassword2 = $_POST['repassword1'];
            $name2 = $_POST['name1'];
            $date2 = $_POST['date1'];
            $gender2=$_POST['gender'];
            $email2 = $_POST['email1'];
            $mysql = mysqli_connect();
            $sql1 = "SELECT * FROM customers WHERE username='$username2'";
            $result1 = mysqli_query($mysql,$sql1);
            if(mysqli_num_rows($result1)>=1){
                echo "<form action='membership.php' method='POST' id='signupform'>
                           <p>         
                             <label>Name:</label>
                             <input type='text' id='name' name='name1'>
                           </p>
                           <p>         
                             <label>Username:</label>
                             <input type='text' id='username' name='username1'>
                             <lable>Username already exists.</lable>
                           </p>
                           <p>
                             <label>Password:</label>
                             <input type='text' id='password' name='password1'>
                           </p>
                           <p>
                             <label>Retype Password:</label>
                             <input type='text' id='repassword' name='repassword1'>
                           </p>
                           <p>
                             <label>Date of Birth:</label>
                             <input type='date' id='date' name='date1'>
                           </p>
                           <p>
                           <label>Gender:</label>
                           <input type='radio' name='gender' value='male'> Male
                           <input type='radio' name='gender' value='female'> Female
                           <input type='radio' name='gender' value='other'> Other
                           </p>
                           <p>
                             <label>Email:</label>
                             <input type='text' id='email' name='email1'>
                           </p>
                           <p>
                             <input type='submit' name='btn' value='Sign Up'>
                             <input type='reset' name='reset' value='reset'>
                           </p>
                          </form>";

            }
            else{
                if(strlen($password2)<=4){
                    echo "<form action='membership.php' method='POST' id='signupform'>
                           <p>         
                             <label>Name:</label>
                             <input type='text' id='name' name='name1'>
                           </p>
                           <p>         
                             <label>Username:</label>
                             <input type='text' id='username' name='username1'>
                           </p>
                           <p>
                             <label>Password:</label>
                             <input type='text' id='password' name='password1'>
                             <lable>Password should contain at least 5 characters.</lable>
                           </p>
                           <p>
                             <label>Retype Password:</label>
                             <input type='text' id='repassword' name='repassword1'>
                           </p>
                           <p>
                             <label>Date of Birth:</label>
                             <input type='date' id='date' name='date1'>
                           </p>
                           <p>
                           <label>Gender:</label>
                           <input type='radio' name='gender' value='male'> Male
                           <input type='radio' name='gender' value='female'> Female
                           <input type='radio' name='gender' value='other'> Other
                           </p>
                           <p>
                             <label>Email:</label>
                             <input type='text' id='email' name='email1'>
                           </p>
                           <p>
                             <input type='submit' name='btn' value='Sign Up'>
                             <input type='reset' name='reset' value='reset'>
                           </p>
                          </form>";
                }
                elseif($password2!=$repassword2){
                    echo "<form action='membership.php' method='POST' id='signupform'>
                           <p>         
                             <label>Name:</label>
                             <input type='text' id='name' name='name1'>
                           </p>
                           <p>         
                             <label>Username:</label>
                             <input type='text' id='username' name='username1'>
                           </p>
                           <p>
                             <label>Password:</label>
                             <input type='text' id='password' name='password1'>
                             <lable>You type the different passwords.</lable>
                           </p>
                           <p>
                             <label>Retype Password:</label>
                             <input type='text' id='repassword' name='repassword1'>
                           </p>
                           <p>
                             <label>Date of Birth:</label>
                             <input type='date' id='date' name='date1'>
                           </p>
                           <p>
                           <label>Gender:</label>
                           <input type='radio' name='gender' value='male'> Male
                           <input type='radio' name='gender' value='female'> Female
                           <input type='radio' name='gender' value='other'> Other
                           </p>
                           <p>
                             <label>Email:</label>
                             <input type='text' id='email' name='email1'>
                           </p>
                           <p>
                             <input type='submit' name='btn' value='Sign Up'>
                             <input type='reset' name='reset' value='reset'>
                           </p>
                          </form>";
                }
                else{
                    $mysql = mysqli_connect();
                    $sql2 = "INSERT INTO customers(username, password, name, DOB, gender, email, access) VALUES ('$username2','$password2','$name2','$date2','$gender2','$email2','2')";
                    $result2 = mysqli_query($mysql,$sql2);
                    $_SESSION['vuser'] = $username2;
                    header('Location: ./membership_login.php');
                }
            }
         }
    else{
        echo "<form action='membership.php' method='POST' id='signupform'>
            <p>         
                <label>Name:</label>
                <input type='text' id='name' name='name1'>
            </p>
            <p>         
                <label>Username:</label>
                <input type='text' id='username' name='username1'>
            </p>
            <p>
                <label>Password:</label>
                <input type='text' id='password' name='password1'>
            </p>
            <p>
                <label>Retype Password:</label>
                <input type='text' id='repassword' name='repassword1'>
            </p>
            <p>
                <label>Date of Birth:</label>
                <input type='date' id='date' name='date1'>
            </p>
            <p>
                <label>Gender:</label>
                <input type='radio' name='gender' value='male'> Male
                <input type='radio' name='gender' value='female'> Female
                <input type='radio' name='gender' value='other'> Other
            </p>
            <p>
                <label>Email:</label>
                <input type='text' id='email' name='email1'>
            </p>
            <p>
                <input type='submit' name='btn' value='Sign Up'>
                <input type='reset' name='reset' value='reset'>
            </p>
        </form>";
    }
?>

       
    </body>
    </html>
