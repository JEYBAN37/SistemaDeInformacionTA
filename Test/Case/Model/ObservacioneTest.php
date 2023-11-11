<?php
App::uses('Observacione', 'Model');

/**
 * Observacione Test Case
 *
 */
class ObservacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.observacione',
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
		'app.gestante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Observacione = ClassRegistry::init('Observacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Observacione);

		parent::tearDown();
	}

}
