<?php
$productos = [];

if (file_exists("productos.txt")) {
  $lineas = file("productos.txt", FILE_IGNORE_NEW_LINES);
  foreach ($lineas as $linea) {
    $productos[] = explode('|', $linea);
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Productos cargados</title>
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
    <h1>📋 Productos cargados</h1>

    <?php if (empty($productos)): ?>
      <p>No hay productos registrados.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>Código</th>
            <th>Descripción</th>
            <th>Cant.</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>IVA %</th>
            <th>IVA $</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($productos as $p): ?>
          <tr>
            <td><?= htmlspecialchars($p[0]) ?></td>
            <td><?= htmlspecialchars($p[1]) ?></td>
            <td><?= $p[2] ?></td>
            <td>$<?= number_format($p[3], 2) ?></td>
            <td>$<?= number_format($p[4], 2) ?></td>
            <td><?= $p[5] ?>%</td>
            <td>$<?= number_format($p[6], 2) ?></td>
            <td><strong>$<?= number_format($p[7], 2) ?></strong></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </main>
</div>
</body>
</html>
