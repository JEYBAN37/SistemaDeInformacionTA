<?php
App::uses('Observacion', 'Model');

/**
 * Observacion Test Case
 *
 */
class ObservacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.observacion',
		'app.familia',
		'app.sociambiental',
		'app.responsable',
		'app.ubicacion',
		'app.sociambientalscompletum',
		'app.adolescencia',
		'app.persona',
		'app.primerainfancia',
		'app.canalizacion',
		'app.infantil',
		'app.juventudadulto',
		'app.gestante',
		'app.observacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Observacion = ClassRegistry::init('Observacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Observacion);

		parent::tearDown();
	}

}
