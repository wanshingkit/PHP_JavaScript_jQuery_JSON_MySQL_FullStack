<?php
/**
 *Name:Shing Kit WAN, no:000826521
 * Date:4 Dec 2020
 * where logout
 */
session_start();
session_destroy();

echo "you have logged out";
echo "<a href='login.html'> login</a>";
?>