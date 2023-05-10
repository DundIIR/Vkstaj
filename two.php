Времени на обертку не хватило, sql запросы:<br>
выбор доступных событий<br>
$sql = " SELECT DISTINCT event FROM `one` ";<br>

<p>
Счетчик конкретных событий<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `event` = "qwe" "<br>
Общий вид<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `event` = :event AND time_server = :need_time"<br>
</p>
<p>
Счетчик событий пользователя по IP<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `user_ip` = "127.0.0.1" "<br>
Общий вид<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `user_ip` = :user_ip "<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `user_ip` = :user_ip AND time_server = :need_time"<br>
</p>
<p>
Счетчик событий по статусу пользователя<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `user_ip` = "127.0.0.1" AND `stat` = 1 "<br>
Общий вид<br>
$sql = " SELECT COUNT(*) FROM `one` WHERE `user_ip` = :user_ip AND `stat` = :stat AND time_server = :need_time"<br>
</p>
