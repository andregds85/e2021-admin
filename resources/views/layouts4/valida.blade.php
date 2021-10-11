<?php
session_start();
 $a=$_SESSION['a'];

 if($a<>1){
  echo redirect()->route('sair.index');

  }
    
  
  
  
?>