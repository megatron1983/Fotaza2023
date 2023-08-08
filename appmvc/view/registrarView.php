<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="css/registrar.css">
   <script src="https://kit.fontawesome.com/29e135ceeb.js" crossorigin="anonymous"></script>
   <title>Registrar Usuario</title>
</head>

<body>
   <!-- Menu de navegación -->
   <header>
      <nav class="menu">
         <a href="index.html">
            <img src="img/logo.jpeg" alt="">
         </a>
         <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="fotografosView.html">Fotografos</a></li>
            <li><a href="#">Categorias <i class="fa-solid fa-caret-down"></i></a>
               <ul>
                  <li><a href="cumplede15View.html">Cumpleaños de 15</a> </li>
                  <li><a href="casamientosView.html">Casamiento</a></li>
                  <li><a href="arteView.html">Arte</a></li>
                  <li><a href="gourmetView.html">Gourmet</a></li>
                  <li><a href="paisajesView.html">Paisajes</a></li>
                  <li><a href="deportesView.html">Deportes</a></li>
               </ul>
            </li>
            <li><a href="iniciarsesionView.html">Iniciar Sesión</a></li>
            <li><a class="boton-registrarse" href="registrarView.html">Registrarse</a></li>
         </ul>
      </nav>
   </header>
   <main>
      <section>
         <form action="" method="post" class="registrar">
            <h1>Añadir Usuario</h1>
            <div class="grupo">
               <div class="subgrupo">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre" minlength="5" class="form-control" required />
               </div>
               <div class="subgrupo">
                  <label for="apellido">Apellido:</label>
                  <input type="text" name="apellido" minlength="5" class="form-control" />
               </div>
            </div>
            <div class="grupo">
               <div class="subgrupo">
                  <label for="sexo">Seleccione su sexo</label>
                  <select class="form-select form-control" name="sexo" aria-label="Default select example">
                     <option value="Masculino">Masculino</option>
                     <option value="Femenino">Femenino</option>
                     <option value="No Binario">No Binario</option>
                  </select>
               </div>
               <div class="subgrupo">
                  <label for="foto">Foto de Perfil</label>
                  <input class="input-file" type="file" name="foto">
               </div>
            </div>
            <div class="subgrupo2 check">
               <h4 class="subtitulo-form">Elige tus intereses</h4>
               <label for=""><input type="checkbox">Cumpleaños de 15</label>
               <label for=""><input type="checkbox">Casamiento</label>
               <label for=""><input type="checkbox">Gourmet</label>
               <label for=""><input type="checkbox">Paisaje</label>
               <label for=""><input type="checkbox">Deporte</label>
               <label for=""><input type="checkbox">Arte</label>


            </div>
            <div class="subgrupo2">
               <label for="email">Email:</label>
               <input value="" type="text" name="email" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
               <label for="contrasena">Contraseña:</label>
               <input value="" type="password" name="contrasena" minlength="5" class="form-control" required />
            </div>
            <div class="subgrupo2">
               <label for="confirmarContrasena">Confirmar Contraseña:</label> <input value="" type="password"
                  name="confirmarContrasena" minlength="5" class="form-control" required />

               <input type="submit" value="Guardar" class="btn-guardar" />
            </div>
         </form>
         <a class="btn-volver" href="index.html">Volver</a>
      </section>
   </main>
</body>
<footer>
   <p class="text-center">Todos los derechos reservados - Desarrollado por Maximiliano Angel Gatica</p>
</footer>

</html>