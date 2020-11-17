<?php
include('linkdb.php');


class chenges_profile extends linkBd{


	public function change(){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password_old = $_POST['old_pass'];
		$password_new = $_POST['new_pass'];

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
			or die(mysqli_error($link));

		$id = $_SESSION['loged_user'];
		$id = "1111@mail.ru67";

		$result = mysqli_query($link, "SELECT * FROM `user_acounts` WHERE email = '$id' ");
		$result = mysqli_fetch_assoc($result);


		if (strlen($name) != $result['name']){
			$chenge_name = mysqli_query($link, "UPDATE `user_acounts` SET `name`= '$name' WHERE `email` = '$id'");
			echo "Ваше имя успешно изменено";
		}



		if(strlen($password_old) > 0
				and strlen($password_new) > 0)
		{
			$result_check = mysqli_query($link, "SELECT `password` FROM `user_acounts` WHERE `email` = '$id' ");
			$arr = mysqli_fetch_assoc($result_check);


			$password = md5($password_new."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");

			$password_check = md5($password_old."aisruifgo9egoiehrugeiporjg9jthpgioerdnpiguerio09u45fh434h09fg093420t0gbhui9rwhfg21fi34yqfgqgjwbe4780g34fgmpoierjh");


			if($password_check == $arr['password']){

				if(strlen($password) > 8 or strlen($password) < 16)
				{

						$chenge_password = mysqli_query($link, "UPDATE `user_acounts` SET `password` = '$password' WHERE `email` = '$id' ");
						echo "Пароль успешно изменён";
			
				}
				else{
					echo "измените пароль";
				}
			}
			else{
				echo "не верно указан старый пароль";
			}
		}


		if($email != $result['email']){
			$chenge_email = mysqli_query($link, "UPDATE `user_acounts` SET `email` = '$email' WHERE `email` = '$id' ");
			if($chenge_email){
				echo "Ваша почна изменена";
			}
		}

	}

	function view_aco(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
			or die(mysqli_error($link));

		$id = "1111@mail.ru67";
		$result = mysqli_query($link, "SELECT * FROM `user_acounts` WHERE email = '$id' ");
		$result = mysqli_fetch_assoc($result);

		$name = $result['name'];
	
			echo "
				<input class='form-control' type='text' name='name' value='$name' style='margin-top: 3rem; max-width: 17rem;'>
            	<input class='form-control' type='email' name='email' value='".$result['email']."' style='margin-top: 1rem;max-width: 17rem;'>
            ";
	}
}

if(isset($_POST['update_prof'])){
	$a = new chenges_profile;
	$a -> link();
	$a -> change();
}



?>