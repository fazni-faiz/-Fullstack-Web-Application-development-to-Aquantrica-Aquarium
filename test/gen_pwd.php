<?php
$pwd = "admin";
echo "<h1>before encryption::: <br/>";
echo $pwd;

echo "<hr />";

echo crypt($pwd,"KEY5456");
 ?>
