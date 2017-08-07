<?php
  session_start();
  require('connect.php');
  $email = $_SESSION['login'];
  $query = "UPDATE `user` SET `status`='2' WHERE `email`='$email'";
  if($query_run = mysqli_query($mysqli, $query)){
       echo 'done';

  }



    session_destroy();
    session_unset();
    //header('Location: played.php');
    /* Or whatever document you want to show afterwards */
?>
