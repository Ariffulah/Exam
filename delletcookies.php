<?php
$cookie_name = "Arif";
$cookie_value = "History dihapus";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
   <?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
 
<?php
if(COUNT($_COOKIE) > 0) {
  echo "Cookies are enable";
} else {
  echo "Cookies are disable";
}
?>

</body>
</html>
</body>
</html>