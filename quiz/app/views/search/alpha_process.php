<?php
 session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $_SESSION['alpha'] = $alpha = $_POST['alpha'];
   if($alpha=="a")
   {
       echo "success";
   }
   else
     {
         echo "unsuccess";
     }

}

?>