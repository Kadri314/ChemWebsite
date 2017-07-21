<?php
 session_start();
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

     <div class="w3-row w3-padding-64">
       <div class="w3-twothird w3-container" >
         <h1 class="w3-text-teal">Prof.Mohamad Hmadeh </h1>
         <!-- SlideShow -->
         <div class="slideshow-container">
            <div class="mySlides fade">
               <?php
                // retrieving images source from imgs/slide/*
                $arrayOfImagesSource=glob("imgs/slide/s*.*");
                 $fileName1=$arrayOfImagesSource[0];$fileName2=$arrayOfImagesSource[1];
                 $fileName3=$arrayOfImagesSource[2];$fileName4=$arrayOfImagesSource[3];
                 $fileName5=$arrayOfImagesSource[4];
               ?>
              <img src="<?=$fileName1?>" style="width:100%; height:400px;">
            </div>

            <div class="mySlides fade">
              <img src="<?=$fileName2?>" style="width:100%; height:400px;">
            </div>

            <div class="mySlides fade">
              <img src="<?=$fileName3?>" style="width:100%; height:400px;">
            </div>

            <div class="mySlides fade">
              <img src="<?=$fileName4?>" style="width:100%; height:400px;">
            </div>

            <div class="mySlides fade">
              <img src="<?=$fileName5?>" style="width:100%; height:400px;">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              <span class="dot" onclick="currentSlide(4)"></span>
              <span class="dot" onclick="currentSlide(5)"></span>
            </div>
         <!-- EndOfSlideShow -->
      </div>
      <!-- Section where admin can edit slide show images  -->
      <?php
        if(isset($_SESSION["lastLogIn"])){
           ?>
           <div class="desc">
             <?php
            for($i=1; $i<=5;$i++){
             ?>
              <form action="AdminSpace/handleImage.php" method="post" enctype="multipart/form-data">
                <input type="file" name="s<?=$i?>" accept="image/*"> <!--name here should be same as fileName value  -->
                <input type="hidden" name="fileName" value="s<?=$i?>"> <!-- the name of file to be saved as  -->
                <input type="hidden" name="directory" value="../imgs/slide/">  <!-- Directory where the file to be uploaded -->
                <input type="submit" value="change Image <?=$i?>">
              </form>


        <?php
            }
            ?>
             </div>
             <?php
        }
      ?>

     </div>

     <div class="w3-row">

       <div class="w3-twothird w3-container">
         <h1 class="w3-text-teal">Latest News:</h1>
         <ul>
            <?php
               $arrayOfLines=file("DB/lastNews.txt",FILE_IGNORE_NEW_LINES);
               // we need to ignore the first 4 lines so we initiliazed  i=4
               $size=count($arrayOfLines);
               for($i=4; $i<$size; $i++){
                  if(preg_match("/\w/",$arrayOfLines[$i])){ // to ignore the last empty line

                  ?>

                     <li><?=substr($arrayOfLines[$i],2)?></li>
                  <?php
                  }
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
