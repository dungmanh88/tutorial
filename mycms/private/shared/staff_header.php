<html lang="en">
  <head>
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <!-- explain: path in require, include, require_once, include_one is file system path -->
    <!-- explain: You should absolutely web url from doc root -->
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css') ?>" />
  </head>

  <body>
    <header>
      <h1>MyCMS Staff Area</h1>
    </header>
    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/staff/index.php') ?>">Menu</a></li>
      </ul>
    </navigation>
