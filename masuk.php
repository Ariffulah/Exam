<!DOCTYPE html>
<?php
$cookie_name = "Vermillion Store Pemalang";
$cookie_value = "index";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
setcookie("index_cookie", "index", time() + 3600, '/');
?>
<html lang="en">