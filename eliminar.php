<?php include "header.php";?>
<section style="font-family: 'Shadows Into Light', cursive;">
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Eliminar datos con php y mysqliS</h1>
      <p class="lead">
          para poder eliminar datos a masql con php, solo necesitamos crear la cadena sql validar y ejecutarla
          con el objeto de conexion, asi recibimos una repuesta en 1 o 0 o true o false, en este tipo de
          sentencia es totalmente necesario agregar un where.
      </p>
      <p style="color: red">
              Nota: no olvidar el where o te corren jaja
          </p>
          <h3>Ejemplo de como Eliminar con php y mysqli</h3>
          <p>$sql = "DELETE FROM t_tabla = 'insertar.php$idVariable'"</p>
          <p>$respuesta = mysqli_query($conexion, $sql);</p>
          <p>
              Con la variable $respuesta podremos validar si se ha llevado a cabo el delete o no.
          </p>
    </div>
  </div>
</div>
</section>
<?php include "footer.php";?>