<?php
include("base.php");
date_default_timezone_set('America/Argentina/Buenos_Aires');
if(isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = trim(date("d/m/y  H:i:s"));
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="ok">Inscripción exitosa</h3>
            <?php
        } else {
          ?>
          <h3 class="bad">ERROR</h3> 
          <?php 
        }
        
    } else {
        ?>
        <h3 class="bad">mamawebo</h3>
        <?php
    }
}
?>