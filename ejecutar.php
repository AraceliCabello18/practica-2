<?php include "header.php";?>
<section style="font-family: 'Shadows Into Light', cursive;">
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Ejecucion de un Query con Mysqli</h1>
      <p class="lead">
          Para poder ejecutar un query de php al servidor de base de datos msqli o mariadb con mysqli,
          requierimos utilizar la funcion msqli_query esta ya viene en el API nativo de php en su
          version 5 o superior, esta funcion requiere de dos parmetros para poder ejecutarse 
          correctamente, como son:
          <ol>
              <li>Conexion al servidor</li>
              <li>Cadena de Sql valida</li>
          </ol>
          <h3>Ejemplo de uso de msqli_query</h3>
          <p>$sql = "SELECT campo1, campo2 * FROM t_tabla";</p>
          <p>$respuesta = msqli_query($conexion, $sql);</p>
          <p>
              Siendo $sql la variable que contiene la cadena que forma un sql valido, la variable $respuesta
              obtiene un 0 a un 1 despendiendo si msqli_query se ejecuta correctamente, la variable de $conexion
              esta expuesta <a href="conexion.php">aqui</a>
          </p>
          <p>
              Entiendase que cualquier cadena sql se desea ejecutar (select, insert, update, delete),
              debe ser pasada a la funcion mysqli_query,
              siempre que se necesite hacer alguna peticion.
          </p>
      </p>
    </div>
  </div>
</div>
</section>
<?php include "footer.php";?>