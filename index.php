<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Other CSS -->

    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Roboto+Mono" rel="stylesheet">

    <!-- JavaScript -->

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/main.js"></script>

    <title>News</title>

</head>

<body>

    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <a href="#" class="logo">verb</a>
                <nav class="nav">
                    <a href="pages/development.html" class="nav__item">development</a>
                    <a href="pages/business.html" class="nav__item">business</a>
                    <a href="pages/travel.html" class="nav__item">travel</a>
                    <a href="pages/design.html" class="nav__item">design</a>
                    <a href="pages/culture.html" class="nav__item">culture</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <time class="time">4 days ago</time>
                <a href="#" class="title">How Web Hosting Can Impact Page Load Speed</a>
                <a href="#" class="read_more">read more</a>
            </div>
        </div>
    </section>

    <main class="major__main">
        <div class="container-md">

            <div class="row">

                <?php
                    
                    include('php/product_form_main.php');
                ?>

            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container-md">
            <div class="row">

                <h4 class="col-xl-12">Most Popular</h4>
                <a href="pages/topic.html" class="most_popular__item d-flex mt-5 mx-0 col-xl-4 col-lg-4 col-md-6">
                    <img class="most_popular__image" src="images/img_3.jpg" alt="">
                    <div class="most_popular__text">
                        <p>How Web Hosting Can Impact Page Load Speed</p>
                        <time>4 days ago</time>
                    </div>
                </a>
                <a href="pages/topic.html" class="most_popular__item d-flex mt-5 mx-0 col-xl-4 col-lg-4 col-md-6">
                    <img class="most_popular__image" src="images/img_4.jpg" alt="">
                    <div class="most_popular__text">
                        <p>How Web Hosting Can Impact Page Load Speed</p>
                        <time>4 days ago</time>
                    </div>
                </a>
                <a href="pages/topic.html" class="most_popular__item d-flex mt-5 mx-0 col-xl-4 col-lg-4 col-md-6">
                    <img class="most_popular__image" src="images/img_5.jpg" alt="">
                    <div class="most_popular__text">
                        <p>How Web Hosting Can Impact Page Load Speed</p>
                        <time>4 days ago</time>
                    </div>
                </a>

            </div>

            <div class="row justify-content-center">

                <div class="copyright col-12">
                    <div>
                        <a href="LogIn.php" style="font-size: 17px; margin-top: -2rem; margin-bottom: 2rem;border-bottom: 2px solid maroon; /* Параметры линии под текстом */
                            font-weight: normal; /* Убираем жирное начертание */
                            padding-bottom: 5px; /* Расстояние от текста до линии */">
                        Войти в качестве редактора</a>
                    </div>
                    <p style="margin-top: 2rem;">© 2020 </p>
                    <p>Alexander Belokonov</p>
                </div>


                <div class="icons">
                    <a href="https://vk.com/lenny1984">
                        <img class="social" src="images/vk.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/shurik_cat1984/?hl=ru">
                        <img class="social" src="images/instagram.png" alt="">
                    </a>
                    <a href="https://www.facebook.com/">
                        <img class="social" src="images/facebook.png" alt="">
                    </a>
                </div>

            </div>

        </div>
    </footer>

    <a href="#" class="go_top invisible" id="go_top" data-scroll="#intro">
        <img src="images/up-arrow.svg" alt="">
    </a>

</body>

</html>
