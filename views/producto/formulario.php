<fieldset>
    <legend>Informacion del producto</legend>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre producto" value="<?php echo $productos->nombre; ?>">
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion del producto" value="<?php echo $productos->descripcion; ?>">

    <label for="stock">Stock:</label>
    <input name="stock" type="text" id="stock" placeholder="Stock" value="<?php echo $productos->stock; ?>">

    <label for="precio">Precio:</label>
    <input name="precio" type="number" id="precio" placeholder="Precio" value="<?php echo $productos->precio; ?>">

   

</fieldset>