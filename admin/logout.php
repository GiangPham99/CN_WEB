<?php
session_start();
session_unset();
session_destroy();

header("Location:localhost/phenikaa/admin/index-login.php");
?>