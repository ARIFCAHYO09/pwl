<?php
include 'koneksi.php';
session_start();
$email= $_POST["email"];
$password= $_POST["password"];
$validation= "select email from admin where email= '$email' and password='$password'";
$result=mysqli_query($koneksi,$validation);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
$count = mysqli_num_rows($result);

if($count==1) {
   
   $_SESSION["ea"]=$email;	
   header("location: index.php");
}
else {
   ?>
   <script type="text/javascript">
      alert("error username dan password salah");
      window.location="login_admin.php";
   </script>
   <?php
}


?>