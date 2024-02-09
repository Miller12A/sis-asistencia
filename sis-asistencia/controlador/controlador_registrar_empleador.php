<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["txtnombre"]) and !empty($_POST["txtapellido"]) and !empty($_POST["txtemail"]) and !empty($_POST["txttelefono"]) and !empty($_POST["txtfechanacimiento"]) and !empty($_POST["txtestadocivil"]) and !empty($_POST["txtdni"]) and !empty($_POST["txtcargo"])) {
        $nombre=$_POST["txtnombre"];
        $apellido=$_POST["txtapellido"];
        $email=$_POST["txtemail"];
        $telefono=$_POST["txttelefono"];
        $fechanacimiento=$_POST["txtfechanacimiento"];
        $estadocivil=$_POST["txtestadocivil"];
        $dni=$_POST["txtdni"];
        $cargo=$_POST["txtcargo"];
        $sql=$conexion->query(" insert into empleado(nombre,apellido,Email,Telefono,FechaNacimiento,EstadoCivil,dni,cargo)values('$nombre', '$apellido', '$email', '$telefono', '$fechanacimiento', '$estadocivil', $dni, $cargo) ");
        if ($sql == true) { ?>
            <script>
            $(function notificacion() {
                new PNotify({
                    title: "CORRECTO",
                    type: "success",
                    text: "Empleado registrado correctamente",
                    styling: "bootstrap3"
                    })
                })
            </script>
        <?php  } else { ?>
            <script>
            $(function notificacion() {
                new PNotify({
                    title: "ERROR",
                    type: "error",
                    text: "Error al registrar empleado",
                    styling: "bootstrap3"
                })
            })
        </script>
<?php   }
        

    } else { ?>
        <script>
            $(function notificacion() {
                new PNotify({
                    title: "ERROR",
                    type: "error",
                    text: "Los campos estan vacios",
                    styling: "bootstrap3"
                })
            })
        </script>
<?php } ?>

<script>
    setTimeout(() => {
        window.history.replaceState(null,null,window.location.pathname);
    }, 0);
</script>
    
<?php }

?>