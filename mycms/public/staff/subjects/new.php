<?php
require_once("../../../private/initialize.php")
$test = isset($_GET['test']) ? $_GET['test'] : '';
if ($test == '404'){
  error_404();
} elseif ($test == '500'){
  error_500();
}
?>
