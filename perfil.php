<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div class="info-perfil">
    <h2>Mi Perfil</h2>
    <p><strong>Nombre:</strong> <span id="perfil-nombre"></span></p>
    <p><strong>Correo:</strong> <span id="perfil-email"></span></p>
    <p><strong>Género:</strong> <span id="perfil-genero"></span></p>
</div>

<script>
    document.getElementById('perfil-nombre').textContent = localStorage.getItem('usuario_nombre') || 'Invitado';
    document.getElementById('perfil-email').textContent = localStorage.getItem('usuario_email') || 'No registrado';
    document.getElementById('perfil-genero').textContent = localStorage.getItem('usuario_genero') || 'No especificado';
</script>
</body>
</html>