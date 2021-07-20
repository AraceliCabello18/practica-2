<?php include "header.php";?>
<section style="font-family: 'Shadows Into Light', cursive;">
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Conectar a MSQL con PHP</h1>
      <p class="lead">
          <h3>¿cuales son los argumentos o paramentros necesarios en una conexion?</h3>
          <p>
              para poder llevar a cabo la conexion requerimos de 4 argumentos:
              <ol>
                  <li>El servidor web que normalmente es un ip, un dominio o localhost</li>
                  <li>El usuario de base de datos</li>
                  <li>El password del usuario</li>
                  <li>El nombre de la BD</li>
              </ol>
          </p>
          <h3>Ejemplo de la conexion sencilla utilizando MYSQLi</h3>
          <p>
              para poder utilisar el API de msqli, solo necesitamos llamar la funcion que vamos utilizar,
              en este caso
              con usar la funcion "mysqli_connect", seguido de los 4 parametros necesarios:
              <p>
                  <p>$servidor = "localhost";</p>
                  <p>$usuario = "root";</p>
                  <p>$password = "";</p>
                  <p>$bd = "mibd";</p>
                  <p>$conexion = mysqli_connect($servidor, $usuario, $password, $bd);</p>
              </p>
              De esa forma podemos conectar a msql de una forma corta.
          </p>
      </p>
    </div>
  </div>
</div>
</section>
<?php include "footer.php";?>