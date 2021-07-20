<?php include "header.php";?>
<section style="font-family: 'Shadows Into Light', cursive;">
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Actualizar datos de php a msql con msqli</h1>
      <p class="lead">
          para poder actualizar datos con php usando mysql, necesitamos crear la cadena sql valida Y
          ejecutarla con el objeto de conexion, por otra parte la informacion que se desea actualizar
          debe estar contenida en variables por convension.
          <p style="color: red">
              Nota: no olvidar el where o te corren jaja
          </p>
          <h3>Ejemplo de Actualizar con php a msql </h3>
          <p>$sql = "UPDATE t_tabla SET campo1 = '$variable1', campo2 = '$variable2' WHERE id = '$variableid'"</p>
      </p>
    </div>
  </div>
</div>
</section>
<?php include "footer.php";?>