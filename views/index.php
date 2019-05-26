<!DOCTYPE html>
<html lang="en">
  <head lang="esp">
    <meta charset="UTF-8" />
    <title>Pagina principal</title>
    <link
      href="https://fonts.googleapis.com/css?family=Heebo"
      rel="stylesheet"
    />
    <link href="css/index.css" rel="stylesheet" />
    <link rel="icon" />
  </head>
  <body>
    <header class="header-contenedor">
      <nav class="menu-contenedor">
        <ul class="item-menu">
          <img id="logo" src="imagenes/logo.jpg"" alt="logo"/>
          <h3>Rock´s Burgues</h3>
          <li>Menu</li>
          <li>Categorias</li>
          <a href=""></a>
          <li>Carrito de compras</li>
          <div class="usuario">
            <img
              id="usuario"
              src="https://img.icons8.com/ios/50/000000/contacts-filled.png"
            />
            <li>Usuario</li>
          </div>
        </ul>
      </nav>
    </header>
    <section class="banner">
      <div class="botones-banner">
        <button id="btn-iniciar" onclick="location.href='/src/login.html'">
          Iniciar Sessión
        </button>
        <a href=""></a>
        <button id="btn-registro">Registro</button>
      </div>
    </section>
    <section class="menu-tiempos">
      <?php foreach($foodDishes as $dish): ?>
        <article class="comidas">
          <figure>
            <img
              src="imagenes/<?php echo $dish->image;?>"
              width="45px"
              width="38px"
              alt="entradas"
            />
          </figure>
          <h3><?php echo $dish['title'];?></h3>
          <p><?php echo $dish['description'];?></p>
          <a href="platillo/{<?php echo $dish['id'];?>}" >Ver platillos</a>
        </article>
      <?php endforeach; ?>
    </section>
    <footer class="footer">
      <h3>Contactanos</h3>
      <p>Lamanos al 01-800-2110-rock</p>
    </footer>
  </body>
</html>
