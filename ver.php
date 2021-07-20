<?php include "header.php";?>
<section style="font-family: 'Shadows Into Light', cursive;">
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Maneras de mostrar datos con Php y Msqli</h1>
      <p class="lead">
          <h3>Mostrar datos con mysqli_fetch_row</h3>
          <p>
              Esta funcion nos permite convertir una consulta mysql a un arreglo de una dimension,
              por lo tanto podemos obtener el valor de un campo de la consulta por medio de un indice,
              la funcion mysqli_fetch_row lleva como parametro una respuesta de una ejecucion msql.
          </p>
          <h3>Ejemplo de uso de mysqli_fetch_row</h3>
          <p>
              <p>$sql = "SELECT campo1, campo2, campo3 FRON t_tabla";</p>
              <p>$respuesta = msqli_query($conexion, $sql);</p>
              <p>$datos = mysqli_fetch_row($respuesta);</p>
              <p>echo $datos[0];//esto nos retornara la informacion del campo1</p>
          </p>
          <h3>Ejemplo de loop de datos con mysqli_fetch_row</h3>
          <P>while($datos = mysqli_fetch_row($respuesta)){//mientras datos sean ejecutado, continuara</P>
          <p>echo $datos[0];//esto nos permite obtener todos los datos de la columna</p>
          <p>}</p>
      </p>
      <h3>Mostrar datos con mysqli_fetch_array</h3>
      <p>
          Esta funcion nos permite convertir una consulta msql a un arreglo asociativo,
          por lo tanto podemos obtener el valor de un campo de la consulta por medio de una llave,
          las funciones mysqli_fetch_array lleva como parametro una respuesta de una ejecucion mysql y 
          un objeto de conexion.
      </p>
      <h3>Ejemplo de loop de datos con mysqli_fetch_array</h3>
      <p>$sql = "SELECT campo1, campo2, campo3 FROM t_tabla";</p>
      <p>$respuesta = msqli_query($conexion, $sql);</p>
      <p>while($datos = mysqli_fetch_array($respuesta)){//mientras datos sean ejecutado, continuara</p>
      <p>echo $datos[0];//esto nos permite obtener todos los datos de la columna</p>
      <p>}</p>
    </div>
  </div>
</div>
</section>
<?php include "footer.php";?>