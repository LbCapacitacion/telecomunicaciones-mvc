<fieldset>
    <legend>Informacion general del Proveedor</legend>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre proveedor" value="<?php echo $proveedores->nombre; ?>">
    <label for="paelliod">Apellidos:</label>
    <input type="text" name="apellido" id="apellido" placeholder="Apellidos" value="<?php echo $proveedores->apellido; ?>">

    <label for="email">Email:</label>
    <input name="email" type="email" id="email" placeholder="Correo" value="<?php echo $proveedores->email; ?>">

    <label for="empresa">Empresa:</label>
    <input name="empresa" type="text" id="empresa" placeholder="Empresa" value="<?php echo $proveedores->empresa; ?>">


</fieldset>
<fieldset>
    <legend>Datos del proveedor</legend>
    <label for="razon">Razon Social:</label>
    <input type="text" name="razon_social" id="razon" placeholder="Razon social" value="<?php echo $proveedores->razon_social; ?>">
    <label for="cuenta">Numero de cuenta:</label>
    <input type="text" name="no_cuenta" id="cuenta" placeholder="No. Cuenta" value="<?php echo $proveedores->no_cuenta; ?>">
    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $proveedores->telefono; ?>">
    
</fieldset>
