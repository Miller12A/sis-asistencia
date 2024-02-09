<?php
    session_start();
    if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
        header('location:login/login.php');
    }

?>

<style>
    ul li:nth-child(3) .activo{
        background: rgb(11, 150, 214) !important;
    }
</style>


<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <h4 class="text-center text-secondary">REGISTRO DE EXPERIENCIA LABORAL</h4>

    <?php
    include "../modelo/conexion.php";
    include "../controlador/controlador_experiencia_empleado.php";
    ?>

    <div class="row">
        <form action="" method="POST">
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Puesto" class="input input__text" name="txtpuesto">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Empresa" class="input input__text" name="txtempresa">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="date" placeholder="" class="input input__text" name="txtinicio">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="date" placeholder="" class="input input__text" name="txtfin">
            </div>
            <div class="text-right p-2">
                <a href="empleado.php" class="btn btn-secondary btn-rounded">Atras</a>
                <button type="submit" value="ok" name="btnregistrar" class="btn btn-primary btn-rounded">Registrar</button>
            </div>
        </form>
    </div>

</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>