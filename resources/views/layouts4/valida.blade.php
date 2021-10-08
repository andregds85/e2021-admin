<?php
session_start();
 $a=$_SESSION['a'];

 if($a<>1){
      session_destroy();
      Auth::logout(); 
  }
         

?>