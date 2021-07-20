<?php include "header.php";?>
<section style="font-family: 'Shadows Into Light', cursive;">
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Incertar datos con php a mysql usando msqli</h1>
      <p class="lead">
      para poder incertar datos desde php con mysqli, solo necesitamos crear la cadena de sql valida y
      ejecutarla con una conexion valida, los parametros a ser incertados, deben ir en variables como
      conversion, no necesitamos mas que saber la respuesta de mysqli_query para saber si se llevo con exito
      la insercion. 
          <h3>Ejempo de como incertar con php a mysql</h3>
          <p>$sql = "INSERT INTO t_tabla(campo1, campo2)VALUE ('$variable1','$variable2')"</p>
          <p>$respuesta = mysqli_query($conexion, $sql);</p>
          <p>la variable $respuesta nos retornara un 1 o un 0 si se ejecuta o no, asi sabremos si se logro</p>
      </p>
    </div>
  </div>
</div>
</section>
<?php include "footer.php";?>