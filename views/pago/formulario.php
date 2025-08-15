<fieldset>
    <legend>Informacion del pago</legend>

    <div class="formulario__campo">
        <label for="vendedores" class="formulario__label">Cajero:</label>
        <input type="text" class="formulario__input" id="vendedores" placeholder="Buscar Vendedor">
        <ul class="listado-vendedores" id="listado-vendedores"></ul>
        <input type="hidden" name="id_proveedor" value="<?php echo $pagos->id_proveedor; ?>">
    </div>
    
    <div class="formulario__campo">
        <label for="clientes" class="formulario__label">Cliente:</label>
        <input type="text" class="formulario__input" id="clientes" placeholder="Buscar Cliente">
        <ul class="listado-clientes" id="listado-clientes"></ul>
        <input type="hidden" name="id_cliente" value="<?php echo $pagos->id_cliente; ?>">
    </div>

    <div class="formulario__campo">
        <label for="servicios" class="formulario_label">Servicio:</label>
        <select name="id_servicio" id="servicios">
            <option value="0" selected>--Seleccione--</option>
            <?php foreach ($servicios as $servicio) { ?>

                <option <?php echo $pagos->id_servicio ===  $servicio->id ? 'selected' : ''; ?> value="<?php echo s($servicio->id); ?>"><?php echo $servicio->mbps; ?></option>
            <?php } ?>
        </select>
    </div>





</fieldset>