<?php

    //CREAR CAJONERAS EN PHP:

    //ARREGLOS INDEXADOS de una dimension unidimensional (VECTOR)
    $nombresProductos=["arroz","aceite","huevos","jabon","papel higienico","lentejas","arepas","panela","pechuga","sal"];
    print_r($cajonera);
    echo("<br>");
    echo($cajonera[0]);

    
    //ARREGLO ASOCIATIVO de una dimension unidimensional (VECTOR)
    $nombresProductos2=["producto1"=>"arroz","producto2"=>"aceite","producto3"=>"huevos","producto4"=>"jabon","producto5"=>"papel higienico","producto6"=>"lentejas","producto7"=>"arepas","producto8"=>"panela","producto9"=>"pechuga","producto10"=>"sal"];
    echo("<br>");
    echo("<br>");
    print_r($cajonera2);
    echo("<br>");
    echo($cajonera2["producto1"]);




?>