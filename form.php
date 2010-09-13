<?php
/*
  Sharing validation client and server side
  Homepage: http://isithackday.com/hacks/validationdemo
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
function rendererror($name){
  global $error;
  if($error[$name]){
   echo '<span class="error">'.$error[$name].'</span>';
  } else {
   echo '<span class="required">*</span>';
  }
}
$req = $_SERVER['HTTP_X_REQUESTED_WITH'];
?>
<?php if ($req == ''){ ?>
<form action="index.php" method="post" id="mainform">
<?php } ?>
  <?php if(sizeof($error)>0){?>
    <div class="error">The form cannot be sent yet as there were some errors.
       Please fix them and try again.</div>
  <?php }?>
  <div>
    <label for="name">Name <?php rendererror('name');?></label>
    <input type="text" name="name" value="<?php echo $name;?>" id="name">
  </div>
  <div>
    <label for="email">Email <?php rendererror('email');?></label>
    <input type="text" name="email" value="<?php echo $email;?>"
           id="email">
  </div>
  <div>
    <label for="homepage">Homepage</label>
    <input type="text" name="homepage" value="<?php echo $homepage;?>"
           id="homepage">
  </div>
  <div>
    <label for="message">Message <?php rendererror('message');?></label>
    <textarea name="message" id="message" value="<?php echo $message;?>"><?php echo $message;?></textarea>
  </div>
  <div class="bar"><input type="submit" name="done" value="Make it so!"></div>
<?php if ($req == ''){ ?>
</form>
<?php } ?>