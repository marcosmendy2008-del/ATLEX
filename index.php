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
        <dialog id="modalLogin" class="popup-dialog">
            <div class="popup-content">
                <h2>Iniciar Sesión</h2>
                <form id="form-login">
                    <input type="text" id="nombre-input" placeholder="ingrese un nombre" required>
                    <input type="email" id="email-input" placeholder="ingrese un correo nombre@gmail" required>
                
                    <div class="botones-genero">
                        <button type="button" class="btn-genero" data-valor="hombre">👦 soy hombre</button>
                        <button type="button" class="btn-genero" data-valor="mujer">👧 soy mujer</button>
                    </div>

                    <button type="submit" id="btn-enviar" disabled>Enviar</button>
                </form>
            </div>
        </dialog>
            <nav>
                <div class="nav">
                    <?php if ($resultado && $resultado->num_rows > 0): ?>
                        <?php while($row = $resultado->fetch_assoc()): ?>
                            <div class="subnav">
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
            </nav>
        </main>

        <?php include "components/footer.php"; ?>        
    </div>

    <script src="js/header.js"></script>
    <script src="js/iniciarSesion.js"></script>
</body>
</html>