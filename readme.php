<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>README.md</title>
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
    <section class="doc-section">
      <h1>📄 Documentación del Proyecto</h1>
      <p class="intro">Este sistema fue desarrollado como trabajo práctico integrador para la materia <strong>Conceptos de Desarrollo de Software</strong>. Su propósito es aplicar conocimientos fundamentales de PHP, formularios HTML y lógica de negocio.</p>
    </section>

    <section class="doc-section">
      <h2>✅ Funcionalidades</h2>
      <ul class="doc-list">
        <li>Carga de productos con código, descripción, cantidad, precio e impuesto.</li>
        <li>Cálculo automático del subtotal, impuestos y total final.</li>
        <li>Registro en archivo plano (`productos.txt`).</li>
        <li>Visualización de productos cargados en una tabla moderna.</li>
        <li>Diseño moderno con barra lateral para navegación clara.</li>
      </ul>
    </section>

    <section class="doc-section">
      <h2>🧠 Fundamentos de Programación</h2>
      <p>El sistema integra:</p>
      <ul class="doc-list">
        <li><strong>Variables:</strong> para capturar datos del formulario.</li>
        <li><strong>Operadores:</strong> para calcular totales e impuestos.</li>
        <li><strong>Control de flujo:</strong> validaciones condicionales, bucles.</li>
        <li><strong>Formularios:</strong> enviados por método POST.</li>
        <li><strong>Manejo de archivos:</strong> lectura/escritura de `productos.txt`.</li>
      </ul>
    </section>

    <section class="doc-section">
      <h2>🔐 Seguridad Aplicada</h2>
      <ul class="doc-list">
        <li>Validación del lado del servidor con <code>isset()</code>, <code>is_numeric()</code> y <code>empty()</code>.</li>
        <li>Sanitización con <code>htmlspecialchars()</code> para evitar XSS.</li>
        <li>Token CSRF generado con <code>random_bytes()</code> y validado por sesión.</li>
        <li>Límites en cantidad y precios para prevenir valores irreales.</li>
      </ul>
    </section>

    <section class="doc-section">
      <h2>📦 Estructura del Proyecto</h2>
      <pre class="code-block">
facturacion/
├── facturacion.php
├── procesar.php
├── productos.php
├── readme.php
├── productos.txt
└── estilos.css
      </pre>
    </section>

    <section class="doc-section">
      <h2>🧭 Ciclo de Vida del Desarrollo</h2>
      <ol class="doc-list">
        <li><strong>Análisis:</strong> identificar necesidad de cálculo de totales.</li>
        <li><strong>Diseño:</strong> definir navegación, estructura y estética.</li>
        <li><strong>Implementación:</strong> código PHP + HTML + CSS desde cero.</li>
        <li><strong>Pruebas:</strong> casos de prueba válidos e inválidos.</li>
        <li><strong>Documentación:</strong> esta misma página y el README.md en GitHub.</li>
      </ol>
    </section>

      <section class="doc-section">
        <h2>👨‍💻 Autor</h2>
        <p><strong>Santino Di Domenico</strong><br>
        Estudiante de Licenciatura en Ciberseguridad – Universidad de San Isidro<br>
        Año: 2025</p>
      </section>
  </main>
</div>

</body>
</html>