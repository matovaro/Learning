<div class="campos">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del contacto" value="<?php  if(isset($contacto['nombre'])){ echo $contacto['nombre']; }else{echo '';} ?>">            
            </div>

            <div class="campo">
                <label for="empresa">Empresa:</label>
                <input type="text" name="empresa" id="empresa" placeholder="Nombre de la empresa" value="<?php if(isset($contacto['empresa'])){ echo $contacto['empresa']; }else{echo '';} ?>">            
            </div>

            <div class="campo">
                <label for="telefono">Telefono:</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Telefono de la empresa" value="<?php if(isset($contacto['telefono'])){ echo $contacto['telefono']; }else{echo '';} ?>">       
            </div>

        
        </div>
        
        <div class="campo enviar">
                <?php 
                    if(isset($contacto['nombre'])){
                        $textoBtn='Guardar';
                        $act='editar';
                    }else{
                        $textoBtn='Añadir';
                        $act='crear';
                    }
                ?>
                <input type="hidden" value="<?php echo $act; ?>" id="accion">
                <?php if(isset($contacto['id'])){?>
                    <input type="hidden" value="<?php echo $contacto['id'] ?>" id="id">
                <?php } ?>
                <input type="submit" value="<?php echo $textoBtn; ?>">
            
            </div>