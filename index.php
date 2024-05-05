<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">


    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="header-container">
            <h1>El Lenguaje de Programación Definitivo: </h1>
        </div>
    </header>
    <div class="container">


        <!--PHP -->
        <?php
        session_start();

        if (!isset($_SESSION['lenguaje1'])) {
            $_SESSION['lenguaje1'] = 0;
        }
        if (!isset($_SESSION['lenguaje2'])) {
            $_SESSION['lenguaje2'] = 0;
        }
        if (!isset($_SESSION['lenguaje3'])) {
            $_SESSION['lenguaje3'] = 0;
        }
        if (!isset($_SESSION['lenguaje4'])) {
            $_SESSION['lenguaje4'] = 0;
        }
        if (!isset($_SESSION['lenguaje5'])) {
            $_SESSION['lenguaje5'] = 0;
        }

        $_SESSION['total'] = $_SESSION['lenguaje1'] + $_SESSION['lenguaje2'] +
            $_SESSION['lenguaje3'] + $_SESSION['lenguaje4'] +
            $_SESSION['lenguaje5'];

        // Calcular porcentajes
        $total = $_SESSION['total'];
        if ($total > 0) {
            $plenguaje1 = ($_SESSION['lenguaje1'] * 100) / $total;
            $plenguaje2 = ($_SESSION['lenguaje2'] * 100) / $total;
            $plenguaje3 = ($_SESSION['lenguaje3'] * 100) / $total;
            $plenguaje4 = ($_SESSION['lenguaje4'] * 100) / $total;
            $plenguaje5 = ($_SESSION['lenguaje5'] * 100) / $total;
        } else {
            $plenguaje1 = $plenguaje2 = $plenguaje3 = $plenguaje4 = $plenguaje5 = 0;
        }
        ?>





        <form name="frmVotacion" method="POST" action="conteo.php">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/javaLen.png" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Java</h2>

                             


                                <input class="button" type="submit" value="Votar" name="btnBoton1" /><br>



                                <p class="description">Total de votos: <?php echo $_SESSION['lenguaje1']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($plenguaje1, 2); ?> </p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/python.png" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Python</h2>


                                <input class="button" type="submit" value="Votar" name="btnBoton2" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['lenguaje2']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($plenguaje2, 2); ?></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/javascript.webp" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Java Script</h2>


                                <input class="button" type="submit" value="Votar" name="btnBoton3" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['lenguaje3']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($plenguaje3, 2); ?> </p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/html.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Html</h2>

                                <input class="button" type="submit" value="Votar" name="btnBoton4" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['lenguaje4']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($plenguaje4, 2); ?></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/ruby.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Ruby</h2>


                                <input class="button" type="submit" value="Votar" name="btnBoton5" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['lenguaje5']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($plenguaje4, 2); ?> </p>
                            </div>
                        </div>

                        <!--  -->
                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>


            </div>
        </form>

        <!--PHP -->
        <!-- Lenguaje con Mayor Voto -->
        <?php
        $arreglo = array(
            'Java' => $_SESSION['lenguaje1'],
            'Python' => $_SESSION['lenguaje2'],
            'JavaScript' => $_SESSION['lenguaje3'],
            'HTML' => $_SESSION['lenguaje4'],
            'Ruby' => $_SESSION['lenguaje5']
        );

        arsort($arreglo); 
        $lenguaje = array_key_first($arreglo); 
        $puntaje = current($arreglo);


        ?>

        <div class="resultado">
            <p><?php echo "La lenguaje con mayor puntaje es $lenguaje con un puntaje de $puntaje."; ?></p>
        </div>
    </div>



</body>

<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="js/script.js"></script>

</html>