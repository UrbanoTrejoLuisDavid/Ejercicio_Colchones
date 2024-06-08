<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de colchones"</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
        $cantidad = $_POST['txtcantidad'];
        $colchon = $_POST['rbColchon'];

        switch($colchon){
            case "Individual":
                $preciolibre = 648;
                $costo = 450;
                $descuento = 0.05;

                if($cantidad < 3){
                    $total = $preciolibre * $cantidad;
                    echo "<li>El total a pagar es: $$total</li>";
                    $ganancia = $costo * $cantidad;
                    $gananciatotal = $total - $ganancia;
                    echo "<li>La ganancia es: $$gananciatotal</li>";
                }else{
                    $total = $preciolibre * $cantidad;
                    $subtotal = $total * $descuento;
                    $totalfinal = $total - $subtotal;
                    echo "<li>El total a pagar es: $$totalfinal</li>";
                    $ganancia = $costo * $cantidad;
                    $gananciatotal = $totalfinal - $ganancia;
                    echo "<li>La ganancia es: $$gananciatotal</li>";
                }
            break;

            case "Matrimonial":
                $preciolibre = 1023.36;
                $costo = 780;
                $descuento = 0.05;
                if($cantidad < 3){
                    $total = $preciolibre * $cantidad;
                    echo "<li>El total a pagar es: $total</li>";
                    $ganancia = $costo * $cantidad;
                    $gananciatotal = $total - $ganancia;
                    echo "<li>La ganancia es: $gananciatotal</li>";
                }else{
                    $total = $preciolibre * $cantidad;
                    $subtotal = $total * $descuento;
                    $totalfinal = $total - $subtotal;
                    echo "<li>El total a pagar es: $$totalfinal</li>";
                    $ganancia = $costo * $cantidad;
                    $gananciatotal = $totalfinal - $ganancia;
                    echo "<li>La ganancia es: $$gananciatotal</li>";
                }
            break;

            case "KingSize":
                $preciolibre = 1920;
                $costo = 1440;
                $descuento = 0.05;
                if($cantidad < 3){
                    $total = $preciolibre * $cantidad;
                    echo "<li>El total a pagar es: $total</li>";
                    $ganancia = $costo * $cantidad;
                    $gananciatotal = $total - $ganancia;
                    echo "<li>La ganancia es: $gananciatotal</li>";
                }else{
                    $total = $preciolibre * $cantidad;
                    $subtotal = $total * $descuento;
                    $totalfinal = $total - $subtotal;
                    echo "<li>El total a pagar es: $$totalfinal</li>";
                    $ganancia = $costo * $cantidad;
                    $gananciatotal = $totalfinal - $ganancia;
                    echo "<li>La ganancia es: $$gananciatotal</li>";
                }
            break;
        }
    ?>
</body>
</html>