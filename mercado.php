<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Taller1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Principal</a>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="mercado.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Arroz:</label>
                        <input type="number" class="form-control" name="producto1">
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php 

        $producto1="arroz";
        $cantidad1=5; //lb
        $precio1=1400;

        $producto2="aceite";
        $cantidad2=1; //lt
        $precio2=7000;

        $producto3="huevos";
        $cantidad3=1; //canasta
        $precio3=10000;

        $producto4="jabon";
        $cantidad4=2;
        $precio4=2400;


        $producto5="papel higienico";
        $cantidad5=1; //paquete
        $precio5=7000;

        $producto6="lentejas";
        $cantidad6=2; //lb
        $precio6=1500;

        $producto7="arepas";
        $cantidad7=2;
        $precio7=1700;

        $producto8="panela";
        $cantidad8=1; //par
        $precio8=3200;

        $producto9="pechuga";
        $cantidad9=1;
        $precio9=11000;

        $producto10="sal";
        $cantidad10=1;
        $precio10=600;


        $subtotal1=$cantidad1*$precio1;
        $subtotal2=$cantidad2*$precio2;
        $subtotal3=$cantidad3*$precio3;
        $subtotal4=$cantidad4*$precio4;
        $subtotal5=$cantidad5*$precio5;
        $subtotal6=$cantidad6*$precio6;
        $subtotal7=$cantidad6*$precio7;
        $subtotal8=$cantidad8*$precio8;
        $subtotal9=$cantidad9*$precio9;
        $subtotal10=$cantidad10*$precio10;
        
        $total=$subtotal1+$subtotal2+$subtotal3+$subtotal4+$subtotal5+$subtotal6+$subtotal7+$subtotal8+$subtotal9+$subtotal10;

        echo("Su total fué de: ".$total);
        echo("<br>");

        if($total>100000){
            echo("No se fia papa");
        }else{
            $devuelta=100000-$total;
            echo("gracias por su compra, su devuelta es: ".$devuelta);
            
        }

    
    ?>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>