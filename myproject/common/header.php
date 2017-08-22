<?php
session_start();
require_once __DIR__ . '/../../src/autoload.php';
//Connection with database
$pathToConfig = __DIR__ . '/../../config/app.php';
$oConfig = new Config($pathToConfig);
$dbConfig = $oConfig->get('db');
$basa  = getDbConnection($dbConfig['dns'], $dbConfig['user'], $dbConfig['password']);
//,$dbConfig['options']
$basa->exec("set names utf8");

//Cookie existence check
require_once __DIR__ . '/../avtorization/cookies.php';
//Authorization
require_once  __DIR__ . '/../avtorization/avtorization.php';
// Registration
require_once  __DIR__ . '/../avtorization/registration.php';

//  Work with database:
//adding in database:  text information, which the user uploaded; date,calculated using the function$ sent or show comments
require_once  __DIR__ . '/../common/work_with_databases.php';

?>

<!DOCTYPE html>
<html lang="ru">
	<head>
	  <meta charset="UTF-8">
	  <link href="../style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	  <link href="../style/style.css" rel="stylesheet" type="text/css"/>
	  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale = 1.0">
	  <link type="text/css" rel="stylesheet" href="../style/bootstrap-responsive.css">
	</head>
	<body>
	<div class="row-fluid">
		<div class="span9" id="box12">
			<h1>Messenger</h1>
		</div>
	</div>
	<div class="container-fluid">
	  <div class="row-fluid">
	    <div class="span3" id="box4" id="menu"> 
			<ul>
				<li><a href="../index.php?page=1&key=all">Главная</a></li>
				<li><a href="../avtorization/avtorization_page.php">Авторизоваться</a></li>
				<li><a href="../avtorization/registration_page.php">Зарегистрироваться</a></li>
				<?php if (isset($_SESSION['login'])): ?>
					<li><a href="../index.php?page=1&key=indiv">Посмотреть список своих сообщений, добавить новую запись</a></li>
					<!-- Display the exit button from the session -->
					<?php require_once __DIR__ . '/../../src/core/form/exit_button.php' ?>
				<?php endif; ?>
				<li><a href="../index.php?page=1&key=all">Посмотреть список всех тем</a></li>
			</ul>
		</div>
		<div class="span6" id="box8">
			<div>
			    
