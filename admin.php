<?php
header('Content-Type: text/html; charset=utf-8');
define ("IN_MYBB", 1);
require "global.php";
if($mybb->user['displaygroup'] == "4" )
{
echo $mybb->user['username'];
}
else
{
echo "Sen admin değilsin";
}
?>
