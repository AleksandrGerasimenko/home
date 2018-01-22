<?php


$result = mail("test@test.ru","Анкета","С сайта получена анкета с данными: \nИмя: $_POST[name] \nПароль: $_POST[password] \nЛюбите его: $_POST[time] \nСколько спите: $_POST[sleep] \nОпишите его: $_POST[pole]");

if ($result){
	echo "<p>Успех!</p>";
	
}
else {
	echo "<p>Косяк</p>";
	
}


?>