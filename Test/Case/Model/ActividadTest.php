<?php
App::uses('Actividad', 'Model');

/**
 * Actividad Test Case
 *
 */
class ActividadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividad',
		'app.ubicacion',
		'app.acta_view_test',
		'app.producto',
		'app.productos_actividad',
		'app.acta',
		'app.responsable',
		'app.productosactividad',
		'app.referente',
		'app.infoevento',
		'app.actividades_view_test',
		'app.proactividad',
		'app.procesoregistro',
		'app.plsesion',
		'app.plsmomento',
		'app.persona',
		'app.estudio',
		'app.poblacion',
		'app.organizacion',
		'app.proyecto',
		'app.entidad',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.aseguradora',
		'app.sociedad',
		'app.sector',
		'app.personas_actividad',
		'app.institucion',
		'app.participantesacta',
		'app.participantesevento',
		'app.participantesproceso',
		'app.participantesprocesos',
		'app.canalizacion',
		'app.cantidad_personas_actividad_view_test',
		'app.cantidad_personas_pic_view_test',
		'app.personas_orgi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actividad = ClassRegistry::init('Actividad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actividad);

		parent::tearDown();
	}

}
