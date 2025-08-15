<?php
include_once __DIR__ . '/../templates/barra.php';
?>
<main class="contenedor seccion">


    <h2>Administrador de Servicios</h2>
    <a href="/crearS" class="boton boton-verde">Nuevo servicio</a>

    <table class="propiedad">
        <thead>
            <tr>
                <th>Mbps</th>
                <th>Precio</th>
                
            </tr>
        </thead>
        <tbody>
            <!-- mostrar registros -->
            <?php foreach ($servicios as $servicio) : ?>
                <tr>
                    <td><?php echo $servicio->mbps; ?></td>
                    <td>$<?php echo $servicio->precio; ?></td>
                    

                    <td>
                        <form action="" method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $servicio->id; ?>">
                            
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/actualizarS?id=<?php echo $servicio->id; ?>" class="boton-verde-block">Actualizar</a>
                    </td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>

</main>