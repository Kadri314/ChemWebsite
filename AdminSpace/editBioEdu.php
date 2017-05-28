<?php
   include("checkSession.php");
   if(isset($_REQUEST["bioText"])){
      //change the textFile and inform the user
      $str = preg_replace('/^\h*\v+/m', '', $_REQUEST["bioText"]);
      file_put_contents("../DB/biography.txt",$str);
      // informing the user
      ?>
         <script>alert("Biography Has Been Updated Successfuly!");</script>
      <?php
   }else if(isset($_REQUEST["eduText"])){
      //change the textFile and inform the user
      $str = preg_replace('/^\h*\v+/m', '', $_REQUEST["eduText"]);
      file_put_contents("../DB/education.txt",$str);
      // informing the user
      ?>
         <script>alert("Education Has Been Updated Successfuly!");</script>
      <?php
   }
   $bioText=file_get_contents("../DB/biography.txt");
   $eduText=file_get_contents("../DB/education.txt");
?>
<!doctype html>
<html>
   <head>
      <style>
         textarea {
             width: 100%;
             height: 400px;
             padding: 12px 20px;
             box-sizing: border-box;
             border: 2px solid #ccc;
             border-radius: 4px;
             background-color: #f8f8f8;
             font-size: 16px;
             resize : none;
         }
      </style>
   </head>
   <body>
      <h1>Edit Biography:</h1>
      <form method="post" action="editBioEdu.php">
         <textarea name="bioText" ><?= $bioText?>
         </textarea>
         <input type="submit" value="Submit Change"></input><br/>
         <a href="adminPage.php">Go Back to Edit Section</a>
      </form>
      <hr/>
      <h1>Edit Education:</h1>
      <form method="post" action="editBioEdu.php">
         <textarea name="eduText" ><?= $eduText?>
         </textarea>
         <input type="submit" value="Submit Change"></input><br/>
         <a href="adminPage.php">Go Back to Edit Section</a>
      </form>
   </body>
</html>
