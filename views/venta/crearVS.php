<main class="contenedor">
    <h1>Crear Venta</h1>
    <h2>Servicios</h2>
    <a href="/ventas" class="boton boton-verde">Volver</a>
    <?php
    include_once __DIR__ . '/../templates/alertas.php';

    ?>
    <form action="" class="formulario" method="POST">
        <?php include 'formServicio.php'; ?>

        <input type="submit" value="Crear Venta" class="boton-verde">
    </form>
</main>


<script src='build/js/cliente.js'></script>
<script src='build/js/vendedor.js'></script>
<script src='build/js/producto.js'></script>
    
