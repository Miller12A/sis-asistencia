<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["txtpuesto"]) and !empty($_POST["txtempresa"]) and !empty($_POST["txtinicio"]) and !empty($_POST["txtfin"])) {
        $puesto=$_POST["txtpuesto"];
        $empresa=$_POST["txtempresa"];
        $fechainicio=$_POST["txtinicio"];
        $fechafin=$_POST["txtfin"];
        $sql=$conexion->query(" insert into experiencialaboral(Puesto,Empresa,FechaInicio,FechaFin)values('$puesto', '$empresa', '$fechainicio', '$fechafin') ");
        if ($sql == true) { ?>
            <script>
            $(function notificacion() {
                new PNotify({
                    title: "CORRECTO",
                    type: "success",
                    text: "Experiencia laboral agregada correctamente",
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
                    text: "Error al registrar experiencia",
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