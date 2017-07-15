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
         <h1 class="w3-text-teal">Acadimic Research: </h1>
         <!-- accordion -->
         <button class="accordion">Fixed With Image</button>
         <div class="panel">
            <ul style="width:75%;">
               <li>Our research is directed toward developing and fabricating new functional materials that are based on inorganic and hybrid (organic –inorganic) structures, and their applications in the fields of environmental remediation and clean energy production. The development of such materials includes: </li>
               <li>-Design and synthesis of new metal oxide, oxynitride, sulfide, and phosphide nanostructures and nanocomposites for photocatalytic reactions (e.g. water splitting, carbon dioxide reduction) (Figure 1 A). The project focuses specifically on modification of material properties via doping, morphological control and heterostructure design in order to optimize the light absorption and catalytic activity of the nanomaterials. </li>
               <img src="imgs/research1.png" style="width:30%;"><img src="imgs/research2.png" style="width:30%; margin-left:100px;">
               <li>Figure 1. (A) Schematic illustration of basic mechanism of solar fuel production over a semiconductor nanoparticle via photocatalytic reduction of CO2 and oxidation of H2O. (B) Structure of a Metal Organic Framework (IR-MOF-74) which is an extended porous structure in which metal oxides clusters are linked together by organic molecules to produce highly porous crystals. </li>
               <li>-Design and construction of new crystalline porous materials (metal organic frameworks (MOFs), covalent organic frameworks (COFs) and other related structures in the realm of reticular chemistry) with unique properties and applications including gas storage, gas separation, and catalysis (Figure1 B). We are investigating the incorporation of new functional units into MOFs/COFs and the resulting effect on their functional properties (e.g. gas selectivity, catalysis, sensing, conductivity, charge storage).</li>
            </ul>
         </div>
         <?php
            $lines=file("DB/research.txt",FILE_IGNORE_NEW_LINES);
            $size=count($lines);
            //we will initialized i=2 to ignore the first two lines and get the number of research, which is on the 3rd line
            $i=2; // i is the line cursure
            $numberOfResearch=substr($lines[$i],strpos($lines[$i++],"=")+2);
            for($j=0; $j<$numberOfResearch; $j++){
               // iterating over researches
               $i+=2; // to move forward to the title of the research
               $title=substr($lines[$i],strpos($lines[$i++],":")+1);
               // pinting the title
               ?>
                  <button class="accordion"><?=$title?></button>
                  <div class="panel">
                     <ul style="width:75%;">
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
