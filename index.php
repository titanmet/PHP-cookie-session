<?php session_start(); $title = "Урок 5.3"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Использование куки и сессий</h2>
</div> 

<div id="content">

<h2>Использование куки</h2>
<?php

if (isset($_COOKIE["name"]))
{
	print 'Привет, ' . htmlspecialchars($_COOKIE["name"]) . '!<br>';
	setcookie("name");
	print "Куки удалены";
}
else
{		
	setcookie("name", "Вася");
	print "Куки записаны";
}	
?>

<h2>Использование сессий</h2>
<?php
	if(isset($_SESSION['user']))
	{
		print "Привет, ".$_SESSION['user'];
        $_SESSION['count1']++;
        print "<br>Число посещений: ".$_SESSION['count1'];
		print "<br><a href='user.php'>Вход в закрытую зону</a>";
	}
	else
	{
		print "Пользователь неизвестен";	
		print "<br><a href='user.php'>Регистрация</a>";	
	}	

?>


</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php";  ?>
