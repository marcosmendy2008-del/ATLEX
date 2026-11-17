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

    <title><?= $titulo ?></title>
</head>
<body>
    <div class="contenedor">
        <?php include "components/header.php"; ?>

        <main>
            <div class="contenedor" id="productos-container">
                <section>
                    <p class="subtitulo"> Tus preferencias </p>
                </section>

                <?php 
                    include "basededatos.php";
                    $resultado = $conexion->query("SELECT * FROM productos ORDER BY RAND()");
                ?>

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
            </div>
        </main>
    </div>

    <script>
        const generoUsuario = localStorage.getItem('usuario_genero') || 'Unisex'; 
        
        // Evitamos errores si estos IDs no están en este archivo específico
        const elNombre = document.getElementById('perfil-nombre');
        const elEmail = document.getElementById('perfil-email');
        const elGenero = document.getElementById('perfil-genero');

        if (elNombre) elNombre.textContent = localStorage.getItem('usuario_nombre') || 'Invitado';
        if (elEmail) elEmail.textContent = localStorage.getItem('usuario_email') || 'No registrado';
        if (elGenero) elGenero.textContent = generoUsuario;

        // Filtrar productos según el género del usuario
        const productos = document.querySelectorAll('.producto-item');
        
        productos.forEach(producto => {
            const generoProducto = producto.getAttribute('data-genero'); 
            
            const esMujer = generoUsuario.toLowerCase().includes('femenino') || generoUsuario.toLowerCase() === 'mujer';
            const esHombre = generoUsuario.toLowerCase().includes('masculino') || generoUsuario.toLowerCase() === 'hombre';

            if (esMujer && generoProducto === 'H') {
                producto.style.display = 'none'; 
            } else if (esHombre && generoProducto === 'M') {
                producto.style.display = 'none'; 
            } else {
                producto.style.display = 'block'; 
            }
        });
    </script>
    <script src="js/barraDeBusqueda.js"></script>
    <script src="js/header.js"></script>
</body>
</html>