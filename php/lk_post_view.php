<?php

//include('linkdb.php');

class form_view_lk extends linkBd{


    function return_form_lk(){ // вывод информации об имеющихся аккаунтах в адм панель 

        $link = mysqli_connect($this->host,$this->user_db,$this->password_db,$this->database_db)
                or die(mysqli_error($link));

        $user_email = $_SESSION['loged_user'];
        $user_email = 111;

        $result = mysqli_query($link, " SELECT * FROM `post` WHERE email =  '$user_email' ");

        $array = array();

        $len = mysqli_num_rows($result);


        for($i=0; $len > $i ; $i++){

            array_push($array, mysqli_fetch_row($result));
        }

        echo 
            "<html>
                <head>
                    <link rel='stylesheet' href='style.css'>
                </head>
            <body>
        ";

        for ($i = 0; count($array) > $i; $i++){
            
            $key = $array[$i];

                $email = $key['1'];
                $topic = $key['2'];
                $text = $key['3'];

                echo "

                    <div class='full d-flex col-xl-12'>
                    <a href='pages/topic.html' class='main__content'>
                        <img src='images/img_1.jpg' alt=''>
                        <div class='main__word'>
                            <h1 class='main__title'>$topic</h1>
                            <p class='main__text' style='word-wrap: break-word; width: 485px;'>$text</p>
                            <div class='post-meta'>
                                <span class='post-meta__category'>business</span>
                                <time class='post-meta__date'>4 days ago</time>
                            </div>
                        </div>
                    </a>
                    </div>

                ";    
            
        }
        echo "
            </body>
            </html>
                ";

    }

}

$a = new form_view_lk;
$a -> link();
$a -> return_form_lk();