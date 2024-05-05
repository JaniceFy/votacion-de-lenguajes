<?php
session_start();


if (isset($_POST['btnBoton1'])) {
    $_SESSION['lenguaje1'] += 1;
}
if (isset($_POST['btnBoton2'])) {
    $_SESSION['lenguaje2'] += 1;
}
if (isset($_POST['btnBoton3'])) {
    $_SESSION['lenguaje3'] += 1;
}
if (isset($_POST['btnBoton4'])) {
    $_SESSION['lenguaje4'] += 1;
}
if (isset($_POST['btnBoton5'])) {
    $_SESSION['lenguaje5'] += 1;
}

$_SESSION['total'] = $_SESSION['lenguaje1'] + $_SESSION['lenguaje2'] + $_SESSION['lenguaje3'] + $_SESSION['lenguaje4'] + $_SESSION['lenguaje5'];


header('Location: index.php');
exit(); 
?>