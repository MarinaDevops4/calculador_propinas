<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Caculadora Propinas</title>
</head>

<body>
    <div class="hero">
        <div class="container">
            <h2>Calculadora de Propinas</h2>
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6" style="border-right:1px solid grey">

                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="form-group">
                                    <label for="num1">Total Cuenta: </label>
                                    <input type="number" step="0.01" name="num1" placeholder="Introduce total a pagar">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="pago_cliente">Pago Cliente:</label>
                                    <input type="number" step="0.01" name="pago_cliente" placeholder="Introduce total pagado">
                                </div>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Calcular Propina">

                            </form>
                        </div>

                        <div class="col-sm-6">

                            <h3>Resultado:</h3>

                            <?php



                            $num1 = $_POST['num1'];

                            $cuenta_total = $num1;
                            $pago_cliente = $_POST['pago_cliente'];

                         

                            echo "<p>La cuenta total es : " . $cuenta_total  . "</p>";
                            echo "</p>";
                            echo "<p> El cliente ha pagado :  " .  $pago_cliente . "</p>";

                            echo "<hr>";

                          

                            if ($cuenta_total < $pago_cliente) {
                                $propina = $pago_cliente - $cuenta_total;
                                echo "<p> Total Propina dejada :  " .   $propina . " €</p> ";
                                echo "<img src='img/ico1.jpg'>";

                            } else if ($cuenta_total == $pago_cliente){
                                $propina = $cuenta_total - $pago_cliente;
                                echo "<p> El cliente no ha dejado propina: ";
                                echo   $propina . " €</p> ";

                            }else{
                                $propina = $cuenta_total - $pago_cliente;
                                echo "<p> A deber : " .  $propina  . " €</p> ";
                                echo "<img src='img/ico2.avif' >";

                            }

                            ?>



                        </div>

                    </div>


                </div>
            </div>

        </div>
</body>

</html>