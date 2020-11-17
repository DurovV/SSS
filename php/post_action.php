<?php

include('linkdb.php');

class Past_action extends linkBd{

	function action(){

		$link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
					or die(mysqli_error($link));

		$post_id = '1';
		$result = mysqli_query($link, "SELECT * FROM `post` WHERE `post_id` = '$post_id' ");

		$result = mysqli_fetch_assoc($result);

		$topic = $result['topic'];
		$text = $result['text'];
		$email = $result['email'];

		echo "

			<div>
        		<div class='row'>
            		<div class='col'>
                		<h2 style='text-align: center;margin-top: 5rem;'>$topic</h2>
            		</div>
        		</div>
    		</div>
    		<div class='row' style='
    						padding-left: 8rem;
    						padding-right: 8rem;
    						padding-bottom: 2rem;
    						padding-top: 1rem;
    						margin-top: 2rem;
    						background-color: #e7e7e7;
    					'>

        		<div class='col' style='
        					word-wrap: break-word;
    						width: 1000px;
    						text-align: center;
    					'>

            		<p>$text</p>
        		</div>
    		</div>
    		<div class='row' style='margin-top: 5rem;''>
        	<div class='col' style='
        					margin-left: 70rem;
        					text-align: left;
        				'>
            	<p>$email</p>
            	<p>Paragraph</p>
        	</div>
    		</div>

		";

	}

}

$a = new Past_action;
$a -> action();

?>