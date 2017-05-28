<?php
   if(!isset($_REQUEST["userName"]) || !isset($_REQUEST["password"])){
      die("Unathorized Access");
   }
   $lines= file("../DB/userInfo.txt",FILE_IGNORE_NEW_LINES);
   list($userName,$password)=$lines;
   if(strcasecmp($userName,$_REQUEST["userName"])==0 && strcmp($password,$_REQUEST["password"])==0){
      // login information are correct
      // put a session
      session_start();
      $_SESSION['userName']=$_REQUEST["userName"];
      $_SESSION['lastLogIn']=time();
      // now take user into admin page :
      header("location:adminPage.php");
   }else{
      ?>
         <script>
            window.alert("Invalid UserName or Password!");
            window.location.href="logIn.html";
         </script>
      <?php
   }
?>
