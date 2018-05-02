<?php require_once("../../../private/initialize.php"); ?>
<?php $page_title = "MyCMS Staff Show Pages" ?>
<?php require_once(SHARED_PATH . '/staff_header.php'); ?>
<< <a class="action" href="<?php echo url_for('/staff/pages/index.php'); ?>">Back to list</a>
<br />
<?php
  $page_id = isset($_GET['id']) ? $_GET['id'] : 1;
  echo "Page ID = " . h($page_id);
 ?>
<?php require_once(SHARED_PATH . '/staff_footer.php'); ?>
