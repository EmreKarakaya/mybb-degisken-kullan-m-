<?php
header('Content-Type: text/html; charset=utf-8');
define ("IN_MYBB", 1);
require "global.php";
echo $mybb->user['username'];
?>
