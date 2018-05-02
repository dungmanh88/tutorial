<!doctype html>
<!-- explain: You must use dot dot to refer to initialize.php because PRIVATE_PATH is defined in initialize.php -->
<?php require_once('../../private/initialize.php'); ?>
<!-- explain: you can make title dynamically using php variable. The php var $page_title is possible to
use in inclusion file php -->
<?php $page_title = "MyCMS Staff"; ?>
<!-- explain: Use php variable in initialize.php to define path to php file -->
<!-- explain: path in require, include, require_once, include_one is file system path -->
<!-- note: You should use absolutely path in require, require_once, include, include_one as below -->
<?php require(SHARED_PATH . '/staff_header.php'); ?>
    <div id="content">
      <div id="main-menu">
      <h2>Main Menu</h2>
      <ul>
        <li><a href="<?php echo url_for('/staff/subjects/index.php') ?>">Subjects</a>
        <li><a href="<?php echo url_for('/staff/pages/index.php') ?>">Pages</a>
      </li>
        </ul>
      </div>
    </div>
<?php require(SHARED_PATH . '/staff_footer.php'); ?>
