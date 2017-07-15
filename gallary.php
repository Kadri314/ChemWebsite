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
<title>Prof.Mohamad Hmadeh  </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/gallary.css">

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

     <div class="w3-row w3-padding-64">
       <div class="w3-twothird w3-container" >
         <h1 class="w3-text-teal">Pictures:</h1>
         <!-- adding gallary -->

         <!-- Row 1 -->
          <div class="responsive">
          <div class="gallery">
             <!-- loading video links:  -->
             <?php
               $arrayOfLines=file("DB/vidLinks.txt",FILE_IGNORE_NEW_LINES);
               $vid1Link=$arrayOfLines[2];
               $vid2Link=$arrayOfLines[4];
               $vid3Link=$arrayOfLines[6];
             ?>
            <a target="_blank" href="imgs/gallary1.jpg">
              <iframe src="<?=$vid1Link?>"
              width="100%" height="150px" frameborder="0" allowfullscreen></iframe>
            </a>
          </div>
         </div>

         <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="imgs/gallary2.jpg">
              <iframe src="<?=$vid2Link?>"
              width="100%" height="150px" frameborder="0" allowfullscreen></iframe>
            </a>

          </div>
         </div>

         <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="imgs/gallary3.jpg">
              <iframe src="<?=$vid3Link?>"
              width="100%" height="150px" frameborder="0" allowfullscreen></iframe>
            </a>

          </div>
         </div>

         <div class="clearfix"></div>
            <!-- Row 2 -->

         <div class="responsive">
         <div class="gallery">
            <?php
             $fileName=glob("imgs/gallaryImgs/1.*");
             $fileName=$fileName[0];
            ?>
          <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="1" accept="image/*">
                  <input type="hidden" name="fileName" value="1">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="responsive">
         <div class="gallery">
            <?php
             $fileName=glob("imgs/gallaryImgs/2.*");
             $fileName=$fileName[0];
            ?>
          <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="2" >
                  <input type="hidden" name="fileName" value="2">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="responsive">
         <div class="gallery">
            <?php
             $fileName=glob("imgs/gallaryImgs/3.*");
             $fileName=$fileName[0];
            ?>
          <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="3" accept="image/*">
                  <input type="hidden" name="fileName" value="3">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="clearfix"></div>

         <!-- Row 3 -->
         <div class="responsive">
         <div class="gallery">
            <?php
             $fileName=glob("imgs/gallaryImgs/4.*");
             $fileName=$fileName[0];
            ?>
          <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="4" accept="image/*">
                  <input type="hidden" name="fileName" value="4">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="responsive">
         <div class="gallery">
          <?php
           $fileName=glob("imgs/gallaryImgs/5.*");
           $fileName=$fileName[0];
          ?>
        <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="5" accept="image/*">
                  <input type="hidden" name="fileName" value="5">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="responsive">
         <div class="gallery">
          <?php
           $fileName=glob("imgs/gallaryImgs/6.*");
           $fileName=$fileName[0];
          ?>
        <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="6" accept="image/*">
                  <input type="hidden" name="fileName" value="6">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="clearfix"></div>

         <!-- Row 4 -->
         <div class="responsive">
         <div class="gallery">
         <?php
          $fileName=glob("imgs/gallaryImgs/7.*");
          $fileName=$fileName[0];
         ?>
       <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="7" accept="image/*">
                  <input type="hidden" name="fileName" value="7">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
               </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="responsive">
         <div class="gallery">
          <?php
           $fileName=glob("imgs/gallaryImgs/8.*");
           $fileName=$fileName[0];
          ?>
        <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="8" accept="image/*">
                  <input type="hidden" name="fileName" value="8">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="responsive">
         <div class="gallery">
          <?php
           $fileName=glob("imgs/gallaryImgs/9.*");
           $fileName=$fileName[0];
          ?>
        <a target="_blank" href=<?=$fileName?>>
           <img src=<?=$fileName?> alt="Trolltunga Norway" >
          </a>

          <?php
             if(isset($_SESSION["lastLogIn"])){
                ?>
                <div class="desc">
                <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="9" accept="image/*">
                  <input type="hidden" name="directory" value="../imgs/gallaryImgs/">
                  <input type="submit" value="change Image">
                </form>
                </div>
             <?php
             }
          ?>
         </div>
         </div>

         <div class="clearfix"></div>

         <!-- end of gallary -->

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
