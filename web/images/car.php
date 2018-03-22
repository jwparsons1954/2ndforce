<?php
$class_active = true;
$dirname = "/2ndforce/";
$images = glob($dirname."*.jpg");
foreach($images as $image) {
     echo $dirname.$image;

}
  ?>
