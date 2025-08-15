<fieldset>
    <legend>Informacion general del Cliente</legend>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre cliente" value="<?php echo $clientes->nombre; ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Correo" value="<?php echo $clientes->email; ?>">

    <label for="telefono">Telefono:</label>
    <input name="telefono" type="number" id="telefono" placeholder="Telefono" value="<?php echo $clientes->telefono; ?>">

    <label for="rfc">RFC:</label>
    <input name="rfc" type="text" id="rfc" placeholder="RFC" value="<?php echo $clientes->rfc; ?>">


</fieldset>
<fieldset>
    <legend>Direccion del cliente</legend>
    <label for="localidad">Localidad:</label>
    <input type="text" name="localidad" id="localidad" placeholder="Localidad" value="<?php echo $clientes->localidad; ?>">
    <label for="colonia">Colonia:</label>
    <input type="text" name="colonia" id="colonia" placeholder="Colonia" value="<?php echo $clientes->colonia; ?>">
    <label for="calle">Calle:</label>
    <input type="text" name="calle" id="calle" placeholder="Calle" value="<?php echo $clientes->calle; ?>">
    <label for="municipio">Municipio:</label>
    <input type="text" name="municipio" id="municipio" placeholder="municipio" value="<?php echo $clientes->municipio; ?>">
</fieldset>
