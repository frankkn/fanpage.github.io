<?php
  //啟動session
  session_start();

?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?php echo $title ?></title>
     <link rel="stylesheet" href="css/backend.css">
   </head>
   <body>
     <?php
      if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true):
      ?>
      <div class="content">
        <h2>登入成功!您在後台!</h2>
        <img width="500px;" height="300px;"src="images/bg1.jpg">
        <p><a href="logout.php">登出</p></a>
      </div>
      <?php
      else:
        header('Location: login.php');
      endif;
      ?>
   </body>
 </html>
