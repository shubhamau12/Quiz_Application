<?php
 session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $_SESSION['alpha'] = $alpha = $_POST['alpha'];
    $pwd=$_POST['pwd'];    
    if($alpha=="a")
    {
       // $_SESSION['aunthincate']="success";
        echo "success";
    }
    else
    {
        //$_SESSION['aunthincate']="failure";
    echo "unsuccess";
    }


}

?>