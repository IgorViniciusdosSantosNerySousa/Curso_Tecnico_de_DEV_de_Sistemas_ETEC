<?php
    define("ENDERECO",'localhost');
    define("USER",'root');
    define("PASSWORD",'');
    define("BASE",'bd_carros');

    $con = mysqli_connect(ENDERECO,USER,PASSWORD,BASE);



    mysqli_query($con, "SET NAMES utf8");