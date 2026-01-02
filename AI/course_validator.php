<?php
function validateCourse($text){
  $flags = ["guaranteed income","get rich","100% profit"];
  foreach($flags as $f){
    if(stripos($text,$f)!==false) return false;
  }
  return true;
}
?>
