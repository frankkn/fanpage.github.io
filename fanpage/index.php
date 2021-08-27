<?php
  $page = 'index';
  $title = '首頁';
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }
  switch($page){
    case 'index':
      $title = '首頁';
      break;
    case 'samename':
      $title = '房東的貓 - 同名專輯';
      break;
    case 'soft':
      $title = '柔軟';
      break;
    case 'life':
      $title = '這是你想要的生活嗎';
      break;
    default:
      $title = 'Oops! 404 找不到網頁';
      break;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
     <div class="navbar">
       <nav>
         <ul>
           <li <?php if($page=='index') echo "class='active'"?>><a href="?page=index">首頁</a></li>
           <li <?php if($page=='samename') echo "class='active'"?>><a href="?page=samename">房東的貓</a></li>
           <li <?php if($page=='soft') echo "class='active'"?>><a href="?page=soft">柔軟</a></li>
           <li <?php if($page=='life') echo "class='active'"?>><a href="?page=life">這就是你想要的生活嗎</a></li>
           <li style="float:right;"><a href="login.php">登入</a></li>
         </ul>
       </nav>
     </div>
     <div class="content">
       <?php
       switch($page){
         case 'index':
           include('intro.php');
           break;
         case 'samename':
           include('samename.php');
           break;
         case 'soft':
           include('soft.php');
           break;
         case 'life':
           include('life.php');
           break;
         default:
           echo "404";
           break;
       }
       ?>
     </div>
  </body>
</html>
