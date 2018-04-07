<!DOCTYPE html>
    <html>
    <head>
      <title>Products Management - LightInTheHome - Global Online Shopping for Lightings</title>
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
       </div><center>
<h2>Search Product Details</h2>
</center>
<?php //db connection
session_start();
$username0 = $_SESSION['vuser'];
$mysql0 = mysqli_connect();
$sql0 = "SELECT * FROM customers WHERE username='$username0'";
$result0 = mysqli_query($mysql0,$sql0);
$row0 = mysqli_fetch_row($result0);
if($row0[6]==1){
$sql = "SELECT * FROM customers";
$mysql = mysqli_connect();
$result = mysqli_query($mysql,$sql);
echo "<table>";
echo "<tr>
         <th>ID</th>
         <th>Username</th>
         <th>Password</th>
         <th>Name</th>
         <th>DOB</th>
         <th>Email</th>
         <th>Access Level</th>
      </tr>";
while($row = mysqli_fetch_row($result)){
  echo "<tr><td>";
  echo $row[0];
  echo "</td><td>";
  echo $row[1];
  echo "</td><td>";
  echo $row[2];
  echo "</td><td>";
  echo $row[3];
  echo "</td><td>";
  echo $row[4];
  echo "</td><td>";
  echo $row[5];
  echo "</td><td>";
  echo $row[6];  
  echo "</td></tr>";
}
echo "</table>";
echo "<form method='POST'>
         <tr>
            <td>ID:</td>
            <td><input type='text' name='id1' size='5'></td>
         </tr><br>
         <tr>
            <td><input type='submit' name='search1' value='search'></td>
            <td>
               <input type='reset' name='insert2' value='reset'>
            </td>
         </tr><br>
         <tr>
            <a href='./membership_login.php'><input type='button' value='Go back to Main'></a>
         </tr>
      </form>";
  if($_POST['search1']){
         	$id2 = $_POST['id1'];
         	$mysql = mysqli_connect();
         	$sql1 = "SELECT * FROM customers WHERE ID='$id2'";
            $result1 = mysqli_query($mysql,$sql1);
            echo "<table>";
                    echo "<tr>
                           <th>ID</th>
                           <th>Username</th>
                           <th>Password</th>
                           <th>Name</th>
                           <th>DOB</th>
                           <th>Email</th>
                           <th>Access Level</th>
                         </tr>";
               while($row = mysqli_fetch_row($result1)){
                   echo "<tr><td>";
                   echo $row[0];
                   echo "</td><td>";
                   echo $row[1];
                   echo "</td><td>";
                   echo $row[2];
                   echo "</td><td>";
                   echo $row[3];
                   echo "</td><td>";
                   echo $row[4];
                   echo "</td><td>";
                   echo $row[5];
                   echo "</td><td>";
                   echo $row[6];  
                   echo "</td></tr>";
                }
            echo "</table>";
   }
}
else{
  header('location: ./membership_login.php');
}
?>

</body>
</html>