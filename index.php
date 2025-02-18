<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesoría en Gestión de Riesgos Laborales</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js" defer></script>
</head>

<!-- index.php -->
<!-- sections/header.php -->
<header>
    <div class="logo">
        <a href="index.php">
            <img src="assets/images/RyB.png" alt="Logo RyB" id="logo-img">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php?section=servicios">Servicios</a></li>
            <li><a href="index.php?section=quienes-somos">¿Quiénes somos?</a></li>
            <li><a href="index.php?section=contacto">Contacto</a></li>
        </ul>
    </nav>
</header>

<body>
    <!-- Título destacado entre el header y el contenido azul -->



    <main>
        <?php
        // Cargar la sección según la URL
        $section = isset($_GET['section']) ? $_GET['section'] : 'servicios'; // Default section
        $file = "sections/{$section}.php";

        if (file_exists($file)) {
            include($file);
        } else {
            include('sections/servicios.php'); // Default to servicios if section not found
        }
        ?>
    </main>



    <footer>
        <p>&copy; 2025 R&B Consultores Ltda. Todos los derechos reservados.</p>
    </footer>
</body>

</html>