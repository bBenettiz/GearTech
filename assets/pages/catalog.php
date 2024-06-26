<?php
include('connection_cars.php');
include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/main/main.css">
    <link rel="stylesheet" href="../css/main/header.css">
    <link rel="stylesheet" href="../css/main/footer.css">
    <link rel="stylesheet" href="../css/recomendation.css">
    <link rel="stylesheet" type="text/css" href="../js/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../js/slick-1.8.1/slick/slick-theme.css" />
    <title>Seu carro ideal</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="area">
                <div class="logo">
                    <a href="../pages_connected/logout.php">
                        <img src="../images/logo.svg" alt="" />
                    </a>
                </div>
                <div class="menu-opener">
                    <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="close-icon">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="">Catálogo</a></li>
                    <li><a href="">Manutenções</a></li>
                    <li>
                        <div class="user-enter">
                            <a href="/GearTech/assets/pages/login.php">
                                <img src="/GearTech/assets/icons/user.svg" alt="">
                                <a href="/GearTech/assets/pages/login.php" class="red">Entre em sua conta</a>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="recomendation">
        <div class="container">
            <div class="logotypes">
                <a href="filtered_catalog.php?Marca=Bmw"><img src="/GearTech/assets/logo_images/bmw.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Chevrolet"><img src="/GearTech/assets/logo_images/chevrolet.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Fiat"><img src="/GearTech/assets/logo_images/fiat.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Ford"><img src="/GearTech/assets/logo_images/ford.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Honda"><img src="/GearTech/assets/logo_images/honda.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Hyundai"> <img src="/GearTech/assets/logo_images/hyundai.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Renault"><img src="/GearTech/assets/logo_images/renault.png" alt=""></a>
                <a href="filtered_catalog.php?Marca=Renault"><img src="/GearTech/assets/logo_images/volksvagen.png" alt=""></a>
            </div>
        </div>
    </section>




    <footer>
        <div class="container">
            <div class="box-footer">
                <div class="left-side-footer">
                    <div class="links">
                        <a href="">Termos de uso</a>
                        <a href="">Catálogo</a>
                        <a href="">Manutenções</a>
                    </div>
                    <div class="social-icons-footer">
                        <a href=""><img src="../icons/instagram-footer.svg" alt=""></a>
                        <a href=""><img src="../icons/email-footer.svg" alt=""></a>
                    </div>
                    <div class="mail-footer">
                        Email: suporte.geartech@gmail.com
                    </div>
                </div>
                <div class="right-side-footer">
                    <h2>Sobre nós</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
            <div class="copy">
                <a href="">© GearTech - Todos os direitos reservados</a>
            </div>
        </div>
    </footer>
    <script src="../js/script.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../js/slick-1.8.1/slick/slick.min.js"></script>
    <script>
        $('.logotypes').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>

</body>

</html>