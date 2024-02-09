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

    <h4 class="text-center text-secondary">REGISTRO DE EMPLEADOS</h4>

    <?php
    include "../modelo/conexion.php";
    include "../controlador/controlador_registrar_empleador.php";
    ?>

    <div class="row">
        <form action="" method="POST">
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Nombre" class="input input__text" name="txtnombre">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Apellido" class="input input__text" name="txtapellido">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Email" class="input input__text" name="txtemail">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="number" placeholder="Telefono" class="input input__text" name="txttelefono">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="date" placeholder="" class="input input__text" name="txtfechanacimiento">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Estado Civil" class="input input__text" name="txtestadocivil">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <input type="text" placeholder="Dni" class="input input__text" name="txtdni">
            </div>
            <div class="fl-flex-label mb-4 px-2 col-12 col-md-6">
                <select name="txtcargo" class="input input__select">
                    <option value="">Seleccionar</option>
                    <?php
                    $sql=$conexion->query(" select * from cargo ");
                    while ($datos=$sql->fetch_object()) { ?>
                        <option value="<?= $datos->id_cargo ?>"><?= $datos->nombre ?></option>
                    <?php }
                    ?>
                </select>
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