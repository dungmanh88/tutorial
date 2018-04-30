<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');
  /* note:
     learn the difference between:
     require vs include vs require_once vs include_one
  */

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  /* note:
  $x = "/public/staff/index.php";
  $y = strpos($x, '/public') + 7;
  $z = substr($x, 0, $y);
  echo $y . "<br />";
  echo $z . "<br />";
  */
  /* explain:
  I don't need to use dynamically find doc root because I config root of nginx vhost to public folder
  like the way laravel using
  */
  require_once('functions.php');
?>
