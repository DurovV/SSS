<?php

class linkBd{

/*
Это подключение к базе данный MySQL, здесь тебе нужно поменять название бд на свои если у тебя последняя версия openserver если нет, то тогда придёться поменять и пароль который подходить под твой sql 
*/

	public $host = 'localhost';//host
	public $database_db = "sanay";//название бд
	public $user_db = 'root';//аккаунт sql
	public $password_db = 'root';//пароль к sql
	

	function link(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
				or die(mysqli_error($link));

	}



}

?>