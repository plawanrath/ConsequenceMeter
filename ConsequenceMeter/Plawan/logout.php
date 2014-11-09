<?php
session_start();
unset($_SESSION['Uid']);
unset($_SESSION['Email']);
session_destroy();
header('Location: index.php');
?>