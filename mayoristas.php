<?php
    $titulo = "Ofertas | ATLEX";
    $pagina = "mayoristas";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icons/logo.png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/mayoristas.css">

    <title><?= $titulo ?></title>
</head>
<body>
    <div class="contenedor">
        <?php include "components/header.php"; ?>

        <main>
            <!-- NAV  :3-->
            <nav>
                <div class="nav">
                    <p class="titulo"> Compras Mayoristas </p>

                    <p class="importante">
                        Minimo de compra: 10 prendas (Estas pueden ser surtidas). UNICAMENTE revendedores
                    </p>

                    <p class="descripcion">
                        - Forma de pago: Efectivo / Transferencia / Deposito <br>
                        - Lista de precios y fotos, se solicitan mediante: <br>

                        Email: mayorista.atlex@gmail.com <br>
                        WhatsApp: +54 9 11 7642-7829 (Kirian) // +54 9 11 5896-8584 (Santos) <br>
                        ¡Gracias! <br>

                        Equipo de Atlex
                    </p>
                </div>
            </nav>
        </main>

        <?php include "components/footer.php"; ?>        
    </div>
    
    <script src="js/header.js"></script>
</body>
</html>