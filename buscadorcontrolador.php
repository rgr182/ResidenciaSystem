<?php
    require 'conexion.php';
    $objCon = new conexion();

    require 'bbuscador.php';
    $objbook = new bbuscador();
    print_r($_POST);

    ?>