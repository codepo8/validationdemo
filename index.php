<?php 
/*
  Sharing validation client and server side
  Homepage: http://isithackday.com/hacks/validationdemo
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
include('filters.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <title>Form validation example</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?2.8.0/build/reset-fonts-grids/reset-fonts-grids.css&2.8.0/build/base/base-min.css">
<script type="text/javascript" src="http://yui.yahooapis.com/combo?3.2.0/build/yui/yui-min.js"></script>
<style type="text/css" media="screen">
input{width:260px;}
textarea{width:265px;height:10em;}
label{width:10em;float:left;font-weight:bold;}
form div{padding:10px 0;overflow:hidden;position:relative;}
label span{position:absolute;left:405px;}
.bar input{width:auto;}
.bar{background:#eee;text-align:right;padding:10px;margin:2em 0;}
.error{color:#c00;border:2px solid #900;padding:2px;-moz-border-radius:3px;font-weight:bold;}
#ft{font-size:80%;color:#ccc;text-align:right;}
#ft a{color:#999;}</style>
</head>
<body class="yui-skin-sam">
<div id="doc" class="yui-t7">

  <div id="hd" role="banner">
    <h1>Form validation example</h1>
  </div>
  <div id="bd" role="main">
    <?php include('validate.php');?>
  </div>
  <div id="ft" role="contentinfo">
    <p>Written by <a href="http://wait-till-i.com">Christian Heilmann</a></p>
  </div>

</div>
<script src="validate.js"></script>
</body>
</html>
