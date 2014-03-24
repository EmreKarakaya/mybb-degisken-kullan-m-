<?php
header('Content-Type: text/html; charset=utf-8');
define ("IN_MYBB", 1);
require "global.php";
if($mybb->user['username'] == "" )
{
echo "<form action='member.php' id='frmLogin' method='post'>
Username: <input type='text' name='username' size='25' maxlength='30' /><br />
Password: <input type='password' name='password' size='25' />
<input type='hidden' name='action' value='do_login'>
<input type='hidden' name='url' value='index.php' />
<input type='submit' class='submit' name='submit' value='Login' /></form><br>";
}
else
{
echo "Hoşgeldin ".$mybb->user['username']." Bügün okunmamış toplam ".$mybb->user['unreadpms']." mesajınız bulunmaktadır.";
}
?>
