<?php
/*
  Sharing validation client and server side
  Homepage: http://isithackday.com/hacks/validationdemo
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
  if(!isset($filtered)){include('filters.php');}
  if(!isset($rules)){include('rules.php');}

  if(!isset($_POST['done'])){
    include('form.php');
  } else {
    $error = array();
    foreach(array_keys($rules) as $r){
      if(!preg_match($rules[$r]['pattern'],$_POST[$r])){
        $error[$r] = $rules[$r]['error'];
      }
    }
    if(sizeof($error) > 0){
      include('form.php');
    } else {
      include('thanks.php');
    }
  }
?>