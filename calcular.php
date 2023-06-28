<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado del Cálculo</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado del Cálculo</h1>

        <?php
        // Verificar si se enviaron los datos del formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $fecha = $_POST['fecha'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $codigo1 = $_POST['codigo1'];
            $descripcion1 = $_POST['descripcion1'];
            $cantidad1 = $_POST['cantidad1'];
            $valor1 = $_POST['valor1'];
            $impuesto1 = $_POST['impuesto1'];
            $codigo2 = $_POST['codigo2'];
            $descripcion2 = $_POST['descripcion2'];
            $cantidad2 = $_POST['cantidad2'];
            $valor2 = $_POST['valor2'];
            $impuesto2 = $_POST['impuesto2'];

            // Calcular el total del producto 1 con impuesto
            $subtotal1 = $cantidad1 * $valor1;
            $impuestoTotal1 = $subtotal1 * ($impuesto1 / 100);
            $total1 = $subtotal1 + $impuestoTotal1;

            // Calcular el total del producto 2 con impuesto
            $subtotal2 = $cantidad2 * $valor2;
            $impuestoTotal2 = $subtotal2 * ($impuesto2 / 100);
            $total2 = $subtotal2 + $impuestoTotal2;

            // Calcular el total de la compra
            $totalCompra = $total1 + $total2;
        ?>
            <table>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Valor</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><?php echo $codigo1; ?></td>
                    <td><?php echo $descripcion1; ?></td>
                    <td><?php echo $cantidad1; ?></td>
                    <td><?php echo $valor1; ?></td>
                    <td><?php echo $total1; ?></td>
                </tr>
                <tr>
                    <td><?php echo $codigo2; ?></td>
                    <td><?php echo $descripcion2; ?></td>
                    <td><?php echo $cantidad2; ?></td>
                    <td><?php echo $valor2; ?></td>
                    <td><?php echo $total2; ?></td>
                </tr>
            </table>
            <p>Impuesto Producto 1 <?php echo $impuesto1; ?>%: $<?php echo $impuestoTotal1; ?></p>
            <p>Impuesto Producto 2 <?php echo $impuesto2; ?>%: $<?php echo $impuestoTotal2; ?></p>
            <h3>Total Compra: $<?php echo $totalCompra; ?></h3>
        <?php
        } else {
            echo "<p>No se enviaron datos del formulario.</p>";
        }
        ?>
        
        <button class="btn-volver" onclick="window.history.back()">Volver</button>
    </div>
</body>
</html>
