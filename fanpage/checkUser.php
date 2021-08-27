<?php
  //啟動session
  session_start();
  //假設的帳號密碼
  $db_user = "landlord0629";
  $db_password = "cat9260";

  //使用isset()判別有無此變數可以使用
  if(isset($_POST['username']) && isset($_POST['password'])){
    //比對
    if($_POST['username']==$db_user && $_POST['password']==$db_password){
      //將session加入一個已經登入的紀錄
      $_SESSION['is_login'] = true;
      header('Location: backend.php');
    }else{
      //將session加入一個失敗的紀錄
      $_SESSION['is_login'] = false;
      header('Location: login.php?msg=登入失敗，請重新確認帳號密碼');
    }
  }else{
    header('Location: login.php?msg=請正確登入');
  }
?>
