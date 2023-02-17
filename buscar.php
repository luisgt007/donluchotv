<?php 
 $conexion= mysqli_connect("0.0.0.0","root","root","db_buscar");
 
 if (isset($_POST['register'])){
   if (strlen($_POST['buscar']) >= 1 && strlen($_POST['buscar']) >= 1){
     $usuario = trim($_POST['buscar']);
     $consulta = "  INSERT INTO db_datos1 (buscar) VALUES ('$buscar') ";
     $resultado = mysqli_query($conexion, $consulta);
     if ($resultado) {
        

        
     }else {
       ?>
       <h3>Error</h3>
       <?php
     }
   }
   
   
   
 }
 
?>