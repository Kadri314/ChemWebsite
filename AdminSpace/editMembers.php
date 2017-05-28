<?php
   include("checkSession.php");
   if(isset($_REQUEST["text"])){
      //change the textFile and inform the user
      $str = preg_replace('/^\h*\v+/m', '', $_REQUEST["text"]);
      file_put_contents("../DB/members.txt",$str);
      // informing the user
      ?>
         <script>alert("Members Has Been Updated Successfuly!");</script>
      <?php
   }
   $text=file_get_contents("../DB/members.txt");
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
      <h1>Edit Members:</h1>
      <form method="post" action="editMembers.php">
         <textarea name="text" ><?= $text?>
         </textarea>
         <input type="submit" value="Submit Change"></input><br/>
         <a href="adminPage.php">Go Back to Edit Section</a>
      </form>
   </body>
</html>
