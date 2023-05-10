<!DOCTYPE HTML>
<html>
<head>
	<title>vkstaj</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<div>
		<form method="post" action="one.php">
			<div>
				<input type="text" name="event" placeholder="Введите событие">
			</div>
			<div>
				<label>
					<span>Авторизован</span>
					<input type="radio" name="status" value="1">
				</label>
				<label>
					<span>Не авторизован</span>
					<input type="radio" name="status" value="0" checked>
				</label>
			</div>
			<div><input type="submit" name="submit"></div>
		</form>
	</div>
	<hr>
	<div>
		<form action="two.php" method="post">
			<input type="date" name="date">
			<select name="filter">
				<option value="event">- счетчики конкретных событий</option>
				<option value="user_ip">- счетчики событий по пользователю (по IP-адресу)</option>
				<option value="status">- счетчик событий по статусу пользователя</option>
			</select>
			<input type="submit" name="date" value="запросить">
		</form>
	</div>
</body> 
</html>

