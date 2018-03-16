<?php
session_start();
$_SESSION['login']['logado'] = false;
header('Location:index.php');