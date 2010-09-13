<?php
/*
  Sharing validation client and server side
  Homepage: http://isithackday.com/hacks/validationdemo
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
$rules = array(
  'name' => array(
    'error'   => 'Please enter a name that is at least 10 characters long',
    'pattern' => '/.{10}/i'
  ),
  'message' => array(
    'error'   => 'Please enter a message at least 20 characters long',
    'pattern' => '/.{20}/i'
  ),  
  'email' => array(
    'error'   => 'Please enter a valid email',
    'pattern' => '/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/i'
  )
);
if(isset($_GET['json'])){
  echo 'rules='.json_encode($rules);
}
?>

