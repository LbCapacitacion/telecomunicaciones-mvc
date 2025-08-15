<?php
include_once __DIR__ . '/../templates/barra.php';
?>
<main class="contenedor seccion">


    <h2>Administrador de Pagos</h2>
    <a href="/crearPY" class="boton boton-verde">Realizar pago</a>
   

    <table class="propiedad">
        <thead>
            <tr>


                <th>Cliente</th>
                <th>Cajero</th>

                <th>Transaccion</th>
                <th>Fecha</th>

            </tr>
        </thead>
        <tbody>
            <!-- mostrar registros -->
            <?php foreach ($ventas as $venta) : ?>
                <tr>

                    <td class="clientepago"><?php echo $venta->cliente->nombre; ?></td>
                    <td class="cajero"><?php echo $venta->vendedor->nombre; ?></td>

                    <td class="servicio">
                        <?php

                        echo $venta->servicio->mbps;


                        ?>
                    </td>
                    <td class="fechapago"><?php echo $venta->fecha; ?></td>

                    <td class="pago" style="display: none;"><?php echo $venta->servicio->precio; ?></td>
                    <td>
                        <form action="" method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $venta->id; ?>">
                            <button type="button" onclick="generarPDFPG(this)" class="boton-verde-block">Descargar PDF</button>

    
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>

                    </td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
    
</main>
<!-- CDN oficial de jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src='build/js/pdf.js'></script>