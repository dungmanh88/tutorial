<?php
  require_once('../../../private/initialize.php');
  $page_id = isset($_GET['id']) ? $_GET['id'] : 1;
  echo h($page_id);
 ?>
