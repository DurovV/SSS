<?php

include('linkdb.php');

class prod_post extends linkBd{

	function post_push(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
					or die(mysqli_error($link));

		if(isset($_POST['topic']) and isset($_POST['text']))
		{

			$topic = $_POST['topic'];
			$text = $_POST['text'];
			$file = $_FILE['file'];

			$email = $_SESSION['loged_user'];
			$email = '111';


			mysqli_query($link, "INSERT INTO `post` VALUES(NULL, '$email', '$topic', '$text', '$file' )");

		}
	}
}

if(isset($_POST['add_post'])){

	$a = new prod_post;
	$a -> link();
	$a -> post_push();
}

?>