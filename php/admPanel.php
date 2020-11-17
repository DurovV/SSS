<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admPanel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="php/newRights.php">
</head>

<body>
    <div style="margin-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="color: rgb(33,33,34);background-color: #303030;">
                        <p style="color: rgb(251,251,252);padding: 0.5rem;margin-left: 3rem;">Пользователи</p>
                    </div>
                    <div style="margin-top: 2rem;">
                        <form>
                            <div class="form-row">
                                <div class="col"><input class="form-control" type="text"></div>
                                <div class="col" style="max-width: 150px;margin-left: 1rem;"><button class="btn btn-primary" type="button" style="background-color: #de4786;">Button</button></div>
                            </div>
                        </form>
                    </div>
                    <div style="margin-top: 2rem;">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">id&nbsp;</th>
                                        <th style="text-align: center;">email</th>
                                        <th style="text-align: center;">name</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php
                                        include('php/accounts_view.php');

                                        $a = new admin;
                                        $a -> link();
                                        $a -> return_inf();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: #303030;">
                        <p style="color: rgb(251,251,252);padding: 0.5rem;margin-left: 3rem;">Количество пользователей:       

                            <?php
                                $a -> counter();
                            ?>

                            </p>
                    </div>
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-top: 1rem;margin-left: 2rem;background-color: rgb(222,71,134);">Изменить пользователя</button>
                        <div class="dropdown-menu"
                            role="menu" style="padding: 1rem;">
                            <form action="php/newRights.php" method="post">
                                <p>Введите email пользователя и id пользователя</p>
                            <input type="text" name="email_root" style="min-width: 336px;">
                            <div class="row" style="margin-top: 1rem;">
                                <div class="col"><button class="btn btn-primary" type="submit" name="add_admin" style="min-width: 80px;">Admin</button></div>
                                <div class="col"><button class="btn btn-primary" type="submit" name="add_user" style="min-width: 80px;">User</button></div>
                                <div class="col"><button class="btn btn-primary" type="submit" name="ent_del" style="min-width: 80px;">Delete</button></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>