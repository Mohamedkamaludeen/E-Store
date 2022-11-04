<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["role"]);
session_destroy();
session_write_close();
header('Location:index.php');

?>