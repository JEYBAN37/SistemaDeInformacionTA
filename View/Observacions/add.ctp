<div>

    <div class="form-group col-sm-12">
        <?php echo $this->Form->create('Observacion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo de Observaciones
                </h1>
            </div>

            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Detalles</h2>
            <hr
                style="background-clip: border-box; border:0.1px solid rgba(0,0,0,.125); margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">


                        <?php $idAux = $_GET['observaciones'];
						echo $this->Form->input('familia_id', array('value' => ''
							. $idAux, 'type' => 'hidden'));
						?>
                        <!--div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('familia_id', [
								'label' => 'ID_Familia/N° Hogar/Nombres',
								'class' => 'form-control',
								'placeholder' => '',
								'type' => 'select',
								'class' => 'form-control select-search',
								'style' => 'font-size: 12px',
							]);
							?>
                        </div-->


                        <div class="form-group col-md-6">
                            <?php
							$canalizacion = [
								' ' => 'Elegir',
								'Institución educativa' => 'Institución educativa',
								'Bienestar social' => 'Bienestar social',
								'Otro' => 'Otro'
							];
							echo $this->Form->input('canalizacionuno', array(
								'label' => 'Canalización a programa social',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $canalizacion,
								'placeholder' => ''
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('canalizaciondos', array(
								'label' => 'Canalización a programa social',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $canalizacion,
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('canalizaciontres', array(
								'label' => 'Canalización a programa social',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $canalizacion,
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							$estado = [
								'' => 'Elegir',
								'En tramite' => 'En tramite',
								'Efectiva' => 'Efectiva',
								'No efectiva' => 'No efectiva',
							];
							echo $this->Form->input('estado', array(
								'label' => 'Estado de canalizaciones',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'options' => $estado,
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('fechaseguimiento', array(
								'label' => 'Fecha de seguimiento de canalizaciones',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('responsable_id', array(
								'label' => 'Responsable de seguimiento',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							echo $this->Form->input('observacion', array(
								'label' => 'Observación general',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'placeholder' => ''
							));
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->
                            <?php echo $this->Form->input('date', array(
								'label' => 'Fecha de visita : ',
								'style' => 'font-size: 12px'
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <p class="help-block">Adjuntar anexo ' NOTA: Cargar un archivo tipo imagen o en pdf
                                extensión ".jpg, png" o
                                ".pdf" Nomenclatura de archivo: IdHogar_Apellidofamilia'</p>
                            <?php
							echo $this->Form->input('ecomapa', array(
								'label' => 'Ecomapa',
								'type' => 'file',
								'onchange' => 'validarTaanioSoporte()',
								'class' => 'form-control'
							));
							echo $this->Form->input(
								'direcomapa',
								array(
									'type' => 'hidden',
									'class' => 'form-control'
								)
							);
							?>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="help-block">Adjuntar anexo ' NOTA: Cargar un archivo tipo imagen o en pdf
                                extensión ".jpg, png" o
                                ".pdf" Nomenclatura de archivo: IdHogar_Apellidofamilia'</p>
                            <?php
							echo $this->Form->input('familiograma', array(
								'label' => 'Familiograma',
								'type' => 'file',
								'onchange' => 'validarTamanioSoporte()',
								'class' => 'form-control'
							));
							echo $this->Form->input(
								'dirfamilograma',
								array(
									'type' => 'hidden',
									'class' => 'form-control'
								)
							);
							?>
                        </div>


                    </div>
                </div>
            </div>

        </fieldset>
        <?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>
    </div>
</div>

<div class="actions">
    <h3><?php echo ('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(('List Observaciones'), array('action' => 'index')); ?></li>
    </ul>
</div>

<?php
$this->Html->css([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>
<script type="text/javascript">
$(document).ready(function() {
    $('.select-search').select2();
    agregarOpcionSeleccion();
});

function agregarOpcionSeleccion() {
    $("#ObservacionResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
}

function validarTamanioSoporte() {
    var auxFile = document.getElementById('ActaAnexo');
    var sizeF = auxFile.files[0].size;
    if (sizeF > 3000000) {
        alert('El archivo debe ser menor a 3 Mb');
        auxFile.value = '';
    }
}
</script>