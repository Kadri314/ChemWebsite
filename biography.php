<!DOCTYPE html>
<html>
<title>Prof.Mohamad Hmadeh </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
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
      <a href="researche.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Researche</a>
      <a href="publications.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Publications</a>
      <a href="gallary.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>
      <a href="members.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Members</a>
      <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Contact</a>
     </div>
   </div>



   <!-- Overlay effect when opening sidebar on small screens -->
   <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

   <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
   <div class="w3-main" >



     <div class="w3-row">
       <div class="w3-twothird w3-container">
          <br/>
         <h1 class="w3-text-teal">Biography:</h1>
         <img src="imgs/Hmadeh.jpg" class="floatMeLeft">
         <p style="overflow:hidden;"> Dr. Mohamad Hmadeh was appointed as Assistant Professor of Chemistry at AUB in January 2014. He obtained his Ph.D. degree in Chemistry (Jan 2010) from the University of Strasbourg (UdS) in France. His research as a graduate student was focused on the ionic and molecular recognition processes in bioinorganic and supramolecular systems. After graduation, he joined the University of California, Los Angeles (UCLA) as a postdoctoral fellow in the group of Professor Omar M. Yaghi who is known as one of the pioneers of Metal Organic Frameworks (MOFs). During his stay at UCLA (2010-2012), his research was focused on the design, synthesis, and characterization of novel porous and crystalline materials with exceptional gas sorption, catalysis and electronic properties. He is currently in his second year as a postdoctoral researcher in Prof. Geoffrey Ozin’s group at the University of Toronto (U of T) where he is working on synthesis and evaluation of new photocatalysts for solar fuel production. His research group at AUB will utilize an interdisciplinary approach to study emerging problems at the forefront of inorganic and nanomaterial chemistry. His research will be directed towards the design and fabrication of a new set of inorganic and hybrid (organic-inorganic) materials with unprecedented chemical, topological and gas sorption properties. Various applications are envisioned in the fields of gas storage, gas separations, conductivity and catalysis. His research program will result in strong collaborations with faculty members both within the chemistry department at AUB and around the world.
         </p>
       </div>

     </div>

     <div class="w3-row w3-padding-64">
       <div class="w3-twothird w3-container">
         <h1 class="w3-text-teal">Education:</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
           dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       </div>
     </div>

     <div class="w3-row w3-padding-64">
       <div class="w3-twothird w3-container">
         <h1 class="w3-text-teal">Research Interests:</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
           dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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