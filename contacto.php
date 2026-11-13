<?php
    $titulo = "Contacto | ATLEX";
    $pagina = "contacto";
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
    <link rel="stylesheet" href="css/contacto.css">

    <title><?= $titulo ?></title>
</head>
<body>
    <div class="contenedor">
        <?php include "components/header.php"; ?>

        <main>
            <!-- NAV  :3-->
            <nav>
                <div class="nav">
                    <div class="subnav1">
                        <p class="titulo"> Contacto </p>
                        <p class="descripcion">
                            ¡Importante!
                            Una vez enviada tu consulta, tu caso queda ingresado y nos comunicaremos con vos a la brevedad posible.
                            Agradecemos que por favor no dupliques las consultas ya que esto demora nuestro tiempo de atención. <br>
                            ¡Gracias!
                        </p>

                        <div class="infocontacto">
                            <div class="contacto">
                                <img src="Imagenes/Iconos/correo.png">           
                                <p class="informacion"> consultas.atlex@gmail.com </p>
                            </div>

                            <div class="contacto">
                                <img src="Imagenes/Iconos/ubicacion.png">
                                <p class="informacion"> Marconi 745, Avellaneda, Buenos Aires, Argentina. </p>
                            </div>
                        </div>

                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.715758868443!2d-58.366644423991445!3d-34.661880672933464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33351d983fa69%3A0x35e88ee685a84dd5!2sEscuela%20de%20Educaci%C3%B3n%20Secundaria%20T%C3%A9cnica%20(EEST)%20N%C2%BA7%20%22Jos%C3%A9%20Hern%C3%A1ndez%22!5e0!3m2!1ses-419!2sar!4v1780716947628!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="subnav2">
                        <form action="#" method="get" class="formulario">
                            <label> Nombre: </label>
                            <input type="text" name="nombre" placeholder="ej: Ignacio Arrieta" required>
            
                            <label> Email: </label>
                            <input type="email" name="email" placeholder="ej: correo@ejemplo.com" required>

                            <label> Teléfono: </label>
                            <input type="telefono" name="telefono" placeholder="ej: 1122334455" required>                        
                    
                            <label> Mensaje: </label>
                            <textarea name="mensaje" rows="5" placeholder="Escribí tu mensaje acá..." required></textarea>
            
                            <button type="submit"> Enviar </button>
                        </form>
                    </div>
                </div>
            </nav>
        </main>

        <?php include "components/footer.php"; ?>        
    </div>
    
    <script src="js/header.js"></script>
</body>
</html>