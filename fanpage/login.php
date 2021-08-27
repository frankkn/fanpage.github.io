<?php //啟動session
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="css/logincss.css">
  </head>
  <body>
    <?php
      //使用isset()，判別有沒有此變數可以使用，並且已經登入。
      if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == true):
        header('Location: backend.php');
      else:
     ?>

<div class="content">
    <h2><span>房東的貓</span>秘密小窩</h2>
    <form method="post" action="checkUser.php">
      <?php
        if(isset($_GET['msg'])){
          echo "<p class='error'>{$_GET['msg']}</p>";
        }
      ?>

      <div class="ac">帳號:<input type="text" name="username"></div>
      <div class="pw">密碼:<input type="password" name="password"></div>
      <button type="submit">登入</button>
    </form>
</div>
  <?php endif;?>
  </body>
</html>
