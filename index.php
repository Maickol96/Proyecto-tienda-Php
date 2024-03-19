<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
    <!--CABECERA-->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta Logo" />
            <a href="index.php">
                Tienda de camisetas
            </a>
        </div>
    </header>
    <!--MENU-->
    <nav>
        <ul>
            <li>
                <a href="">Incio</a>
            </li>
            <li>
                <a href="">Categoria 1</a>
            </li>
            <li>
                <a href="">Categoria 2</a>
            </li>
            <li>
                <a href="">Categoria 3</a>
            </li>
            <li>
                <a href="">Categoria 4</a>
            </li>
            <li>
                <a href="">Categoria 5</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <!--BARRA LATERAL-->
        <aside id="lateral">
            <div id="login" class="block_aside">
                <form action="#" method="post">
                    <!--Campo email-->
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <!--Campo Password-->
                    <label for="password">Constrseña</label>
                    <input type="password" name="password" />
                    <!--Boton de enviar formulario-->
                    <input type="submit" value="Enviar" />
                </form>

                <!--Redirecciones-->
                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar pedidos</a>
                <a href="#">Gestionar categorias</a>
            </div>

        </aside>
        <!--CONTENIDO CENTRAL-->
        <div id="central">

            <div class="product">
                <img src="assets/img/camiseta.png " />
                <h2>Camiseta Azul Ancha</h2>
                <p>30.000 Pesos</p>
                <a href="">Compra</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png " />
                <h2>Camiseta Azul Ancha</h2>
                <p>30.000 Pesos</p>
                <a href="">Compra</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png " />
                <h2>Camiseta Azul Ancha</h2>
                <p>30.000 Pesos</p>
                <a href="">Compra</a>
            </div>

        </div>
    </div>
    <!--PIDE DE PAGINA-->
        <footer id="footee">
            <p>Desarrollado por Maicko Velasco Dev &copy; <?=date('Y')?></p>
        </footer>
</body>

</html>