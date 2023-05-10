<?php

$event = $_POST['event'];
$stat = $_POST['status'];

if(empty($event)){
	echo "Поля надо заполнить";
	?><br><a href="/">Вернуться на главную</a><?
	die();
}
if ($stat != 1 && $stat != 0) {
	echo "Недопустимые значения";
	?><br><a href="/">Вернуться на главную</a><?
	die();
}
$user_ip = $_SERVER['REMOTE_ADDR'];
$action = 0; 
if ($stat == 1) {
	$action = 1;
}
$time_server = time();

try {
	$dsn="mysql:host=localhost; dbname=vkstaj";
	$db = new PDO($dsn, "root", "");           
	$db->exec("set names utf-8");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
	echo 'Ошибка подключения к БД '
	. $e->getMessage(), $e->getCode()
	. '<br>';
	die();
}

$sql = "INSERT INTO one (id, user_ip,event, stat, action, time_server) VALUES (NULL, :user_ip, :event, :stat, :action, :time_server)";
$result = $db->prepare($sql);
$result->bindParam(':user_ip', $user_ip, PDO::PARAM_STR);
$result->bindParam(':event', $event, PDO::PARAM_STR);
$result->bindParam(':stat', $stat, PDO::PARAM_BOOL);
$result->bindParam(':action', $action, PDO::PARAM_BOOL);
$result->bindParam(':time_server', $time_server, PDO::PARAM_INT);
$result->execute();

header('Location: /');

?>