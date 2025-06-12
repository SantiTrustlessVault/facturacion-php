<?php
session_start();
$_SESSION['token'] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Factura Simple</title>
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
    <h1>Nuevo Producto</h1>

    <form action="procesar.php" method="POST">
      <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">

      <label>Código del producto:</label>
      <input type="text" name="codigo" required>

      <label>Descripción:</label>
      <input type="text" name="descripcion" required>

      <label>Cantidad:</label>
      <input type="number" name="cantidad" min="1" max="100" required>

      <label>Precio unitario:</label>
      <input type="number" name="precio" step="0.01" min="0.01" max="100000" required>

      <label>Impuesto:</label>
      <select name="impuesto">
        <option value="10">10%</option>
        <option value="21">21%</option>
        <option value="27">27%</option>
      </select>

      <button type="submit">Calcular Total</button>
    </form>
  </main>
</div>

</body>
</html>
