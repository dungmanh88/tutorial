<?php
function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return $script_path;
}

function u($string=""){
  return urlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404(){
  header("404 File Not Found");
  exit();
}

function error_500(){
  header("500 Internal Server Error");
  exit();
}
?>
