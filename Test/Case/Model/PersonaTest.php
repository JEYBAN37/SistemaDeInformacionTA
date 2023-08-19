<?php
App::uses('Persona', 'Model');

/**
 * Persona Test Case
 *
 */
class PersonaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.persona',
		'app.estudio',
		'app.poblacion',
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
		'app.plsesion',
		'app.plsmomento',
		'app.canalizacion',
		'app.aseguradora',
		'app.smsevento',
		'app.fuenteevento',
		'app.dimension',
		'app.evento',
		'app.ubicaciones',
		'app.entidad',
		'app.proyecto',
		'app.organizacion',
		'app.institucion',
		'app.personas_actividad',
		'app.sociedad',
		'app.sector',
		'app.participantesacta',
		'app.participantesevento',
		'app.participantesproceso',
		'app.procesoregistro',
		'app.proactividad',
		'app.prosesion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Persona = ClassRegistry::init('Persona');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Persona);

		parent::tearDown();
	}

}
