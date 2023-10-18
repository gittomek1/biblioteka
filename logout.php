<?php
session_start();

unset($_SESSION['userRole']);
header('Location: index.php');
session_unset();

?>