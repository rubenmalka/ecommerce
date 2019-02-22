<?php
session_start();
unset($_SESSION['nom']);
unset($_SESSION['id']);
unset($_SESSION['email']);
session_destroy();
header('Location: index.php');
?>
