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
<link rel="stylesheet" href="style/accordion.css">

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
         session_start();
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
         <h1 class="w3-text-teal">Publications Accomplished: </h1>
         <!-- accordion -->
         <?php
            $lines=file("DB/publication.txt",FILE_IGNORE_NEW_LINES);
            $size=count($lines);
            //we will initialized i=2 to ignore the first two lines and get the number of research, which is on the 3rd line
            $i=2; // i is the line cursure
            $numberOfResearch=substr($lines[$i],strpos($lines[$i++],"=")+2);
            for($j=0; $j<$numberOfResearch; $j++){
               // iterating over publications
               $i+=2; // to move forward to the title of the publication
               $title=substr($lines[$i],strpos($lines[$i++],":")+1);
               // pinting the title
               ?>
                  <button class="accordion"><?=$title?></button>
                  <div class="panel">
                     <ul>
               <?php
               $numberOfPoints=substr($lines[$i],strpos($lines[$i++],"=")+2);
               for($k=0; $k<$numberOfPoints; $k++){
                  // iterating over points
                  $point=substr($lines[$i++],2);
                  // printing the points
                  ?>
                       <li><?=$point?></li>
                  <?php
               }
               ?>
                     </ul>
                  </div>
               <?php
            }
         ?>
         <script>
         var acc = document.getElementsByClassName("accordion");
         var i;

         for (i = 0; i < acc.length; i++) {
           acc[i].onclick = function() {
             this.classList.toggle("active");
             var panel = this.nextElementSibling;
             if (panel.style.maxHeight){
               panel.style.maxHeight = null;
             } else {
               panel.style.maxHeight = panel.scrollHeight + "px";
             }
           }
         }
         </script>

         <!-- EndOfAccordion -->
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
