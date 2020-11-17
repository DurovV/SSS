<?php
//session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>lk</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="php/redprof.php">
</head>

<body>
    <div></div>
    <div class="container" style="margin-top: 2rem;">
        <h3 style="text-align: center; margin-top: 5rem;">Личный кабинет&nbsp;</h3>
        <div class="row" style="margin-top: 3rem;">
            <div class="col" style="margin-left: 2rem;max-width: 409px;padding-bottom: 3rem;background-color: #eaeaea;">
                <form action="php/redprof.php" method="post">
                    <h5 style="margin-top: 1rem;">Изменить пользователя</h5>

                   <?php
                        require('php/redprof.php');

                        $a = new chenges_profile;
                        $a -> link();
                        $a ->view_aco();
                   
                   ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-top: 1rem;background-color: rgb(74,74,74);">Изменить пароль &nbsp; &nbsp;</button>
                        <div class="dropdown-menu" role="menu"
                            style="padding: 1rem;">
                            <p>Введите старый пароль</p>
                            <input class="form-control" type="password" name="old_pass" style="width: 18rem;">
                            <p style="margin-top: 1rem;">Введите новый пароль</p>
                            <input class="form-control" type="password" name="new_pass" style="margin-top: 1rem;">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="update_prof" style="margin-top: 2rem;background-color: rgb(72,72,72);">Сохранить&nbsp;</button>
                </form>
            </div>
            <div class="col">

                <button class="btn btn-primary" type="button" style="margin-left: 1rem;background-color: rgb(72,72,72);">
                    <a href="post_view.php" style="color: white;">Создать POST</a>
                </button>

                <?php
                    require('php/lk_post_view.php');
                ?>

            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>