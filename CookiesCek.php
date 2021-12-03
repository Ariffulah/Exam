<?php
// set the expiration date to one hour ago
setcookie("login3", "index", time() - 3600);
?>
<html>

<body>

    <?php
    echo "Cookies 'Arif' telah dihapus.";
    ?>

</body>
</html>