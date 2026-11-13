<header>
    <div class="head1">
        <div class="subhead1">
            <a href="index.php" class="logo"> ATLEX </a>
        </div>

        <div class="subhead2">
            <form class="buscador">
                <input type="text" id="busqueda" placeholder="Buscar productos...">
                <button>
                    <img src="img/icons/lupa.png">
                </button>
            </form>
        </div>

        <div class="subhead3">
            <a href="perfil.php" class="icono">
                <img src="img/icons/usuario.png">
            </a>

            <a href="carrito.php" class="icono">
                <img src="img/icons/carrito.png">
                <span class="contador"> 0 </span>
            </a>
        </div>
    </div>

    <div class="head2">
        <ul>
            <li>
                <a class="<?= $pagina=="inicio" ? "activo" : "" ?>" href="index.php"> Inicio </a>
            </li>
            <li class="desplegable">
                <a href="#"> Categorías </a>
                <div class="menu">
                    <div class="columna">
                        <h1> Hombre </h1>

                        <a href="#"> Remeras </a>
                        <a href="#"> Pantalones </a>
                        <a href="#"> Joggers </a>
                        <a href="#"> Buzos </a>
                        <a href="#"> Camperas </a>
                        <a href="#"> Shorts </a>
                    </div>
                    
                    <div class="columna">
                        <h1> Mujer </h1>

                        <a href="#"> Remeras </a>
                        <a href="#"> Jeans </a>
                        <a href="#"> Vestidos </a>
                        <a href="#"> Buzos </a>
                        <a href="#"> Calzas </a>
                    </div>
                    
                    <div class="columna">
                        <h1> Accesorios </h1>

                        <a href="#"> Gorras </a>
                        <a href="#"> Medias </a>
                        <a href="#"> Mochilas </a>
                        <a href="#"> Cinturones </a>
                    </div>
                </div>
            </li>
            <li> <a href="soloParaVos.php"> Solo para vos </a> </li>
            <li> <a href="contacto.php"> Contacto </a> </li>
            <li> <a href="devolucion.php"> Política de Devolución </a> </li>
        </ul>
    </div>
</header>