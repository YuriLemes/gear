<?php
    session_start();
    require_once('helpers.php');
    if(!estaLogado()){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<title>Gear V1.0</title>
</head>
<body>
