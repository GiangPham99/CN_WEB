<?php
session_start();
session_unset();
session_destroy();

header("Location:localhost/phenikaa_test2_BTL/admin/index-login.php");
?>