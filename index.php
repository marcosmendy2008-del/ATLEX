<?php 
    include "basededatos.php";

    $titulo = "Tienda Online de ATLEX";
    $pagina = "inicio";
    
    $resultado = $conexion->query("SELECT * FROM productos ORDER BY RAND()");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icons/logo.png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/slider.css?v=99">
    <link rel="stylesheet" href="css/iniciarSesion.css">

    <title><?= $titulo ?></title>
</head>
    <body>

    <div class="contenedor">
        <?php include "components/header.php"; ?>

        <main>
            <?php include "components/slider.php"; ?>
            
            <section>
                <p class="subtitulo"> Para vos </p>
            </section>
            <?php 
    include "basededatos.php";
    $resultado = $conexion->query("SELECT * FROM productos ORDER BY RAND()");
?>
<nav>
    <div class="nav">
        <?php if ($resultado && $resultado->num_rows > 0): ?>
            <?php while($row = $resultado->fetch_assoc()): ?>
                <div class="subnav producto-item" 
                     data-nombre="<?= strtolower(htmlspecialchars($row['nombre'])) ?>"
                     data-categoria="<?= strtolower(htmlspecialchars($row['categoria'] ?? 'general')) ?>"
                     data-genero="<?= htmlspecialchars($row['genero'] ?? 'Unisex') ?>">
                    
                    <div class="imag">
                        <img src="<?= htmlspecialchars($row['imagen']) ?>" alt="<?= htmlspecialchars($row['nombre']) ?>">
                    </div>

                    <div class="info">
                        <p class="nombre"><?= htmlspecialchars($row['nombre']) ?></p>
                        <p class="precio">$<?= number_format($row['precio'], 2, ',', '.') ?></p>
                        <button>Comprar</button>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p style="padding: 20px;">No hay productos cargados.</p>
        <?php endif; ?>
    </div>
 <?php include "components/footer.php"; ?>

            </nav>
                            
        </main>


    </div>

    <script src="js/header.js"></script>
    <script src="js/iniciarSesion.js"></script>
    <script src="js/barraDeBusqueda.js"></script>
</body>
</html>
                   