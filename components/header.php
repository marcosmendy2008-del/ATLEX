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
                            <a href="#" class="filtro-categoria" data-categoria="remeras"> Remeras </a>
                            <a href="#" class="filtro-categoria" data-categoria="pantalones"> Pantalones </a>
                            <a href="#" class="filtro-categoria" data-categoria="joggers"> Joggers </a>
                            <a href="#" class="filtro-categoria" data-categoria="buzos"> Buzos </a>
                            <a href="#" class="filtro-categoria" data-categoria="camperas"> Camperas </a>
                            <a href="#" class="filtro-categoria" data-categoria="shorts"> Shorts </a>
                        </div>
                        
                        <div class="columna">
                            <h1> Mujer </h1>
                            <a href="#" class="filtro-categoria" data-categoria="remeras"> Remeras </a>
                            <a href="#" class="filtro-categoria" data-categoria="jeans"> Jeans </a>
                            <a href="#" class="filtro-categoria" data-categoria="vestidos"> Vestidos </a>
                            <a href="#" class="filtro-categoria" data-categoria="buzos"> Buzos </a>
                            <a href="#" class="filtro-categoria" data-categoria="calzas"> Calzas </a>
                        </div>
                        
                        <div class="columna">
                            <h1> Accesorios </h1>
                            <a href="#" class="filtro-categoria" data-categoria="gorras"> Gorras </a>
                            <a href="#" class="filtro-categoria" data-categoria="medias"> Medias </a>
                            <a href="#" class="filtro-categoria" data-categoria="mochilas"> Mochilas </a>
                            <a href="#" class="filtro-categoria" data-categoria="cinturones"> Cinturones </a>
                        </div>
                    </div>
                </li>
            <li> <a href="soloParaVos.php"> Solo para vos </a> </li>
            <li> <a href="contacto.php"> Contacto </a> </li>
            <li> <a href="devolucion.php"> Política de Devolución </a> </li>
        </ul>
    </div>
</header>