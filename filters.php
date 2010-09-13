<?php
/*
  Sharing validation client and server side
  Homepage: http://isithackday.com/hacks/validationdemo
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
  $args = array(
    'name'      => FILTER_SANITIZE_SPECIAL_CHARS,
    'message'   => FILTER_SANITIZE_SPECIAL_CHARS,
    'homepage'  => FILTER_SANITIZE_SPECIAL_CHARS,
    'done'      => FILTER_SANITIZE_SPECIAL_CHARS,
    'email'     => FILTER_SANITIZE_SPECIAL_CHARS
  );
  $_POST = filter_input_array(INPUT_POST, $args);
  $email = $_POST['email'];
  $name = $_POST['name'];
  $homepage = $_POST['homepage'];
  $message = $_POST['message'];
  $filtered = true;
?>