<?php
App::uses('Canalizacion', 'Model');

/**
 * Canalizacion Test Case
 *
 */
class CanalizacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.canalizacion',
		'app.adolescencia',
		'app.familia',
		'app.sociambiental',
		'app.responsable',
		'app.ubicacion',
		'app.sociambientalscompletum',
		'app.gestante',
		'app.persona',
		'app.primerainfancia',
		'app.infantil',
		'app.juventudadulto',
		'app.observacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Canalizacion = ClassRegistry::init('Canalizacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Canalizacion);

		parent::tearDown();
	}

}
