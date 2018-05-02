<!-- explain: include, require just only include in a page scope -->
<?php require_once('../../../private/initialize.php'); ?>

<?php
  $id = isset($_GET['id']) ? $_GET['id'] : '1';
  // explain: because you work on dynamic data, you don't know what data has include
  // so you need escape special char
  // example id=<strong>13</strong> -> output without h is <strong>13</strong>
  // but output with h is &lt;strong&gt;13&lt;/strong&gt;
  // html entities like &lt; &gt; will appear < > just these text not a html tag
  echo h($id);


?>

<!-- explain:
urlencode will encode query string, the path after ?
urlencode will encode some special character to hecxa code like
space -> +
& -> %26
The purpose: & has a special meaning but it also has include in value of a param
if the char & has include in value of param, it need to be encoded as %26
otherwise, it is &

urlencode should apply to value of parameter in url paramter in query string.

server encoded parameter value in query string manually
client send query use encoded query string
server decoded paramter value in query string automatically

urlencode vs rawurlencode:
- common:
letters, number, dash, underscore are unchanged
reversed char are encoded like: !#$%& etc..
urlencode: space -> +
rawurlencode: space -> %20

by default, php will decode query string automatically before push data to super global variable $_GET
You don't need to use urldecode and rawurldecode by yourself.
-->
<!--
<a href="show.php?name=<? //php echo urlencode('John Doe'); ?>&x=1">Link</a><br />
<a href="show.php?company=<? //php echo urlencode('Widgets&More'); ?>">Link</a><br />
<a href="show.php?query=<?// php echo urlencode('!#*?'); ?>">Link</a><br />
-->
