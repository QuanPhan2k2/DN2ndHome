<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pass']);
header('location: ?page_layout=home');

?>