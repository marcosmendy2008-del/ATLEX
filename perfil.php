<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icons/logo.png">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/inicio.css">

    <title><?= $titulo ?></title>
</head>
    <body>

    <div class="contenedor">
        <?php include "components/header.php"; ?>
    <div class="info-perfil">   
    <h2>Mi Perfil</h2>
    <p><strong>Nombre:</strong> <span id="perfil-nombre"></span></p>
    <p><strong>Correo:</strong> <span id="perfil-email"></span></p>
    <p><strong>Género:</strong> <span id="perfil-genero"></span></p>
        <?php include "components/footer.php"; ?>  
</div>

<script>
    document.getElementById('perfil-nombre').textContent = localStorage.getItem('usuario_nombre') || 'Invitado';
    document.getElementById('perfil-email').textContent = localStorage.getItem('usuario_email') || 'No registrado';
    document.getElementById('perfil-genero').textContent = localStorage.getItem('usuario_genero') || 'No especificado';
</script>
</body>
</html>