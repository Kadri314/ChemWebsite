<?php
   session_start();
   if(isset($_SESSION["lastLogIn"])){
      $lastLogIn=$_SESSION["lastLogIn"];
      if(time()-$lastLogIn>=60*60){
        // user has been browsing the page more than 20 minutes so we redirect him to login.html page to log in again
        session_destroy();
        session_regenerate_id(true);
        header("location: login.html");
     }else $_SESSION["lastLogIn"]=time();
 }
?>
<!DOCTYPE html>
<html>
<title>Prof.Mohamad Hmadeh </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/slideShow.css">

<script src="javaScript/java.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body>
<div id="overAll">
   <!-- Navbar -->
   <div class="w3-top">
     <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">Home</a>
      <a href="biography.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Biography</a>
      <a href="researche.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Research</a>
      <a href="publications.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Publications</a>
      <a href="gallary.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>
      <a href="members.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Members</a>
      <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Contact</a>
      <?php
        if(isset($_SESSION["lastLogIn"])){
           ?>
           <a href="AdminSpace/adminPage.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Admin Space</a>
           <?php
        }

      ?>
     </div>
   </div>



   <!-- Overlay effect when opening sidebar on small screens -->
   <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

   <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
   <div class="w3-main" >

     <div class="w3-row">
       <div class="w3-twothird w3-container">
          <br/><br/>
          <figure>
              <?php
              $fileName=glob("imgs/personal.*");
              $fileName=$fileName[0];
             ?>
            <img src=<?=$fileName?> class="styleMe" >
            <figcaption style="text-align: center;">Dr. Mohamad Hmadeh</figcaption>
         </figure>
         <?php
           if(isset($_SESSION["lastLogIn"])){
               ?>
               <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data" style="width:20%;margin-left: auto;
               margin-right: auto;">
                 <input type="file" name="personal" accept="image/*" style="width:100%;">
                 <input type="hidden" name="fileName" value="personal">
                 <input type="hidden" name="directory" value="../imgs/">
                 <input type="submit" value="change Image">
               </form>
            <?php
               }
            ?>

         <h1 class="w3-text-teal">Biography:</h1>
         <?php
            $arrayOfLines=file("DB/biography.txt",FILE_IGNORE_NEW_LINES);
            // we need to ignore the first  line so we initiliazed  i=1
            $size=count($arrayOfLines);
            $biography="";
            for($i=1; $i<$size; $i++){
               $biography=$biography."\n".$arrayOfLines[$i];
            }
         ?>
         <p >
            <?=$biography?>
         </p>
       </div>

     </div>

     <div class="w3-row w3-padding-64">
       <div class="w3-twothird w3-container">
         <h1 class="w3-text-teal">Education:</h1>
         <ul>
         <?php
            $arrayOfLines=file("DB/education.txt",FILE_IGNORE_NEW_LINES);
            // we need to ignore the first  line so we initiliazed  i=1
            $size=count($arrayOfLines);
            for($i=1; $i<$size; $i++){
               ?>
               <li><?=substr($arrayOfLines[$i],2)?></li>
               <?php
            }
         ?>
         </ul>
       </div>
     </div>


   <!-- END MAIN -->
   </div>
   <footer id="myFooter" >

     <div class="w3-container w3-theme-l1" style="width:100%;">
       <p>Prof.Mohamad Hmadeh  <br/>Official Website &reg;</p>
     </div>
   </footer>
</div>


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
