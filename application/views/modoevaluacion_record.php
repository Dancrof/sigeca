<!--Archivo: modeevaluacion_record.php -->
<!--Modulo: modoevaluacion -->
<!--Descripción: vista que permite visualizar la información del modo de evaluación -->
<!--Autor: Stalin Francis -->
<!--Fecha: Última evaluación: Sábado 4 febrero 2023 -->

<div id="eys-nav-i" class="mt-4 p-2">
    <h3 class="mt-3 p-3"><?php echo $title; ?></h3>
    <ul class="list-inline border rounded">
        <?php if (isset($modoevaluacion) && isset($modoevaluacion['idmodoevaluacion'])) : ?>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/elprimero/'); ?>" class="text-decoration-none text-dark">Primero</a></li>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/siguiente/' . $modoevaluacion['idmodoevaluacion']); ?>" class="text-decoration-none text-dark">Siguiente</a></li>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/anterior/' . $modoevaluacion['idmodoevaluacion']); ?>" class="text-decoration-none text-dark">Anterior</a></li>
            <li class="list-inline-item" style="border-right:1px solid green"><a href="<?php echo site_url('modoevaluacion/elultimo/'); ?>" class="text-decoration-none text-dark">Último</a></li>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/add'); ?>" class="text-decoration-none text-dark">Nuevo</a></li>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/edit/' . $modoevaluacion['idmodoevaluacion']); ?>" class="text-decoration-none text-dark">Editar</a></li>
            <li class="list-inline-item " style="border-right:1px solid green"><a href="<?php echo site_url('modoevaluacion/delete/' . $modoevaluacion['idmodoevaluacion']); ?>" class="text-decoration-none text-dark">Quitar</a></li>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/listar/'); ?>" class="text-decoration-none text-dark">Listar</a></li>
        <?php else : ?>
            <li class="list-inline-item"><a href="<?php echo site_url('modoevaluacion/add'); ?>" class="text-decoration-none text-dark">Nuevo</a></li>
        <?php endif; ?>
    </ul>
</div>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Reduce el ancho del card -->
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('modoevaluacion/save_edit') ?>
                    <?php if (isset($modoevaluacion['idmodoevaluacion'])) : ?>
                        <?php echo form_hidden('idmodoevaluacion', $modoevaluacion['idmodoevaluacion']); ?>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Id:</label> <!-- Ajusta el ancho de la etiqueta -->
                        <div class="col-md-9 mt-2">
                            <?php if (isset($modoevaluacion['idmodoevaluacion'])) : ?>
                                <?php echo form_input('idmodoevaluacion', $modoevaluacion['idmodoevaluacion'], array("disabled" => "disabled", 'class' => 'form-control', 'placeholder' => 'Id de modoevaluación')); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nombre:</label> <!-- Ajusta el ancho de la etiqueta -->
                        <div class="col-md-9">
                            <?php if (isset($modoevaluacion['nombre'])) : ?>
                                <?php echo form_input('nombre', $modoevaluacion['nombre'], array('class' => 'form-control', 'placeholder' => 'Nombre del modoevaluación')); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (isset($modoevaluacion['ponderacion'])) : ?>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Ponderación:</label> <!-- Ajusta el ancho de la etiqueta -->
                            <div class="col-md-9">
                                <?php echo form_input('ponderacion', $modoevaluacion['ponderacion'], array('class' => 'form-control', 'placeholder' => 'Ponderación de la evaluación')); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>