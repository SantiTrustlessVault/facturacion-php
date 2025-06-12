# 🧠 Documentación Técnica – Sistema de Facturación en PHP

Autor: Santino Di Domenico

Proyecto: Trabajo Práctico Integrador – Conceptos de Desarollo de Software (UNSO)  

Año: 2025

---

## 🎯 Objetivo del documento

Este archivo tiene el propósito de:

- 📚 Mostrar dominio técnico del lenguaje PHP y desarrollo web básico
- 🧑‍🏫 Comunicar el conocimiento de forma clara y didáctica
- 🤝 Facilitar el trabajo en equipo o la revisión por pares
- 🔁 Servir como referencia futura para mí o cualquier desarrollador

---

## 🧩 Estructura técnica del sistema

El sistema está compuesto por las siguientes partes clave:

| Archivo         | Rol técnico                                               |
|----------------|------------------------------------------------------------|
| `facturacion.php` | Formulario principal para ingresar datos del producto     |
| `procesar.php`    | Lógica de negocio: validaciones, cálculos y persistencia |
| `productos.php`   | Visualización de productos guardados                     |
| `productos.txt`   | Almacenamiento plano de los productos                    |
| `readme.php`      | Página HTML con documentación del proyecto               |
| `index.php`       | Landing de bienvenida con enlaces sociales               |
| `estilos.css`     | Diseño moderno, responsive y coherente                   |

---

## 🧠 Fundamentos técnicos aplicados

### 1. Variables y tipos

Uso de `$_POST`, `int`, `float` y `string` para representar datos de entrada, control y salida.

```php
$cantidad = $_POST['cantidad']; // int
$precio = $_POST['precio'];     // float
```

### 2. Validaciones

Se aplican múltiples niveles:

    HTML5: min, max, required

    PHP: empty(), is_numeric(), validación de rangos

    Seguridad: token CSRF y sanitización

### 3. Seguridad

| Técnica	         |  Implementación                                               |
|----------------|------------------------------------------------------------|
| `CSRF` | Formulario principal para ingresar datos del producto     |
| `XSS`    | Lógica de negocio: validaciones, cálculos y persistencia |
| `Validación`   | Visualización de productos guardados                     |
| Límite de rango  |	Cantidad: 1–100, Precio: 0.01–100000                    |


Técnica	        Implementación

CSRF	        $_SESSION['token'] + random_bytes()

XSS	            htmlspecialchars() en entradas y salidas

Validación	    Evita entradas inválidas o inyectadas

Límite de rango	Cantidad: 1–100, Precio: 0.01–100000

### 4. Lógica de negocio

```
$subtotal = $cantidad * $precio;
$montoImpuesto = ($subtotal * $impuesto) / 100;
$total = $subtotal + $montoImpuesto;
```

-Se encapsula la lógica dentro de procesar.php, respetando la separación de responsabilidades.

### 5. Persistencia en archivo plano

    Guardado con ```file_put_contents()``` y ```LOCK_EX``` para evitar corrupción.

    Lectura con file(), separación con explode('|').

Ventajas:

    Simplicidad

    Portabilidad

    Facilidad de debugging

Limitación:

    No escalable (ideal para ejercicios educativos)

### 6. Diseño Web

    Layout responsivo con barra lateral fija

    Componentes visuales coherentes: botones, tabla, formularios

    Distribución clara de contenido en todas las páginas

### 🧑‍🏫 Enfoque pedagógico

Durante el desarrollo se buscó no solo escribir código que funcione, sino:

    Comentar cada parte importante del código

    Nombrar variables claramente ($montoImpuesto, $subtotal)

    Usar código claro antes que código complejo

    Aplicar buenas prácticas aunque el sistema sea simple

### 🤝 Trabajo colaborativo y mantenible

# Este proyecto está diseñado para:

    Ser fácil de entender por nuevos desarrolladores

    Dividirse en tareas: uno puede mejorar el frontend, otro la lógica

    Ser base para nuevas funciones como: login, PDF, base de datos, etc.

# 🧭 Ideas futuras / To-do

### Descripción

-Uso de base de datos: Reemplazar productos.txt por MySQL

-Generación de PDFs: Crear factura descargable con DomPDF

-Login de usuarios: Agregar sistema de autenticación

-Panel de estadísticas: Mostrar gráficos con Chart.js

### 📚 Referencias útiles

    PHP Manual

    W3Schools PHP

    Mozilla HTML Docs

    CSS Tricks

### 👨‍💻 Autor

Santino Di Domenico

Estudiante de Lic. en Ciberseguridad – UNSO

### LinkedIn: [https://www.linkedin.com/in/santino-di-domenico-a03ab4321/]

### GitHub: [https://github.com/SantiTrustlessVault]

### 🧾 Licencia

MIT – Uso libre con fines educativos y personales
