<?php
session_start();

if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
  die("⚠️ Token inválido.");
}

// Recoger datos
$codigo = trim($_POST['codigo']);
$descripcion = trim($_POST['descripcion']);
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$impuesto = $_POST['impuesto'];

if (
  empty($codigo) || empty($descripcion) ||
  !is_numeric($cantidad) || !is_numeric($precio) || !is_numeric($impuesto)
) {
  die("⚠️ Datos inválidos.");
}

// Limitar y sanitizar
if ($cantidad < 1 || $cantidad > 100 || $precio < 0.01 || $precio > 100000) {
  die("⚠️ Valores fuera de rango.");
}

$codigo = htmlspecialchars($codigo, ENT_QUOTES, 'UTF-8');
$descripcion = htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8');

// Cálculos
$subtotal = $cantidad * $precio;
$montoImpuesto = ($subtotal * $impuesto) / 100;
$total = $subtotal + $montoImpuesto;

// Guardar en productos.txt
$producto = implode('|', [
  $codigo,
  $descripcion,
  $cantidad,
  $precio,
  $subtotal,
  $impuesto,
  $montoImpuesto,
  $total
]);

file_put_contents("productos.txt", $producto . PHP_EOL, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="container">
  <aside class="sidebar">
    <h2>🧾 Factura</h2>
    <nav>
     <ul>
        <li><a href="index.php" class="active">Inicio</a></li>
        <li><a href="facturacion.php">Nueva Factura</a></li>
        <li><a href="productos.php">Ver productos</a></li>
        <li><a href="readme.php">Documentación</a></li>
      </ul>
    </nav>
  </aside>

  <main class="main-content">
    <h1>Resumen de Factura</h1>
    <p><strong>Producto:</strong> <?= $descripcion ?></p>
    <p><strong>Cantidad:</strong> <?= $cantidad ?></p>
    <p><strong>Precio Unitario:</strong> $<?= number_format($precio, 2) ?></p>
    <p><strong>Subtotal:</strong> $<?= number_format($subtotal, 2) ?></p>
    <p><strong>IVA (<?= $impuesto ?>%):</strong> $<?= number_format($montoImpuesto, 2) ?></p>
    <h3>Total: $<?= number_format($total, 2) ?></h3>

    <a href="facturacion.php">← Volver</a>
  </main>
</div>

</body>
</html>
