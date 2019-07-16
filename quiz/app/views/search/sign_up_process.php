<?php
  session_start();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  $_SESSION['name'] = $name = $_POST['name'];
  $_SESSION['email'] = $email = $_POST['email'];
  $_SESSION['password'] = $password = $_POST['password'];
  $_SESSION['phone'] = $phone = $_POST['number'];
  $connect=Mysqli_connect('localhost','root','','daily_routine_app');
	  $query='insert into user_info(name,email,phone,password) values("'.$name.'","'.$email.'","'.$phone.'","'.$password.'")';
    $inserted=mysqli_query($connect,$query);
   if($inserted>0)
   {
     echo "success";
   }
   else
   {
  echo "unsuccess";
   }
     
  //print_r($inserted);

 }

?>