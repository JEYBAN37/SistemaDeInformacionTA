<?php
// Recuperar el valor familia_id de la URL
if (isset($this->request->query['familia_id'])) {
	$familiaId = $this->request->query['familia_id'];
} else {
	$familiaId = null;
}
?>


<div>
    <div class="form-group col-sm-12">
        <?php echo $this->Form->create('Persona'); ?>
        <fieldset>
            <div class="col-12 text-center">
                <h1 class="titulo-general-pwa-govco" style="color: #3366CC;margin-top: 20px; ">Modulo Persona</h1>
            </div>
            <h2 class="titulo-general-pwa-govco col-md-12  "
                style="color: #3366CC; margin-left: 5px;margin-top: 20px; ">Datos Personales</h2>
            <hr style="border: 1px solid black; margin-left: 20px; margin-top: 1px;">

            <div class="grow justify-content-center" display="none" style="margin-top:20px">
                <div class="card col-sm-12" style="margin-left: 15px;font-size: 12px;">
                    <div class="form-group row">

                        <?php
						echo $this->Form->input('id');
						echo $this->Form->input('familia_id', array('value' => $familiaId, 'type' => 'hidden'));
						?>


                        <div class="form-group col-md-6">
                            <?php
							$TipoDeDocumentoOptions = array(
								'' => 'Elegir',
								'CC.' => 'Cedula de ciudadanía',
								'TI' => 'Tarjeta de identidad',
								'RC' => 'Registro Civil',
								'PPT' => 'Permiso Protección Temporal',
								'CE' => 'Cedula extrangeria',
								'RNV' => 'Registro nacido vivo'
							);
							echo $this->Form->input('tipodocumento', array(
								'label' => 'Tipo de Documento:',
								'class' => 'form-control',
								'style' => 'font-size: 12px;',
								'placeholder' => '',
								'type' => 'select',
								'options' => $TipoDeDocumentoOptions
							));
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('numerodoc', [
								'label' => 'N° de documento',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('primerapellido', [
								'label' => 'Primer Apellido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('segundoapellido', [
								'label' => 'Segundo Apellido',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('primernombre', [
								'label' => 'Primer Nombre',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('segundonombre', [
								'label' => 'Segundo Nombre',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <!-- Coloca el campo en una mitad de la pantalla en dispositivos medianos y grandes -->
                            <?php echo $this->Form->input('fechanac', [
								'label' => 'Fecha de nacimiento : ',
								'style' => 'font-size: 12px'
							]);
							?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('edad', [
								'label' => 'Edad',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
							$optionSexo = array('' => 'Elegir', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino');
							echo $this->Form->input('sexo', [
								'label' => 'Sexo',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
								'option' => $optionSexo
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('aseguradora', [
								'label' => 'Aseguradora',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('regimen', [
								'label' => 'Regimen',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('estadoafiliacion', [
								'label' => 'Estado de Afiliacion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('barrio', [
								'label' => 'Barrio',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('direccion', [
								'label' => 'Direccion',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('telefono', [
								'label' => 'Telefono',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('email', [
								'label' => 'Email',
								'class' => 'form-control',
								'style' => 'font-size: 12px',
							]);  ?>
                        </div>
                    </div>
                </div>
            </div>


        </fieldset>
        <?php echo $this->Form->end(('Guardar'), ['class' => 'btn btn-success']); ?>

    </div>
</div>

<!--div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?>
        </li>
        <li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Primerainfancias'), array('controller' => 'primerainfancias', 'action' => 'index')); ?>
        </li>
        <li><?php echo $this->Html->link(__('New Primerainfancia'), array('controller' => 'primerainfancias', 'action' => 'add')); ?>
        </li>
    </ul>
</div-->

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