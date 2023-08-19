<?php
App::uses('Ubicacion', 'Model');

/**
 * Ubicacion Test Case
 *
 */
class UbicacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ubicacion',
		'app.sociambiental',
		'app.responsable',
		'app.sociambientalscompletum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ubicacion = ClassRegistry::init('Ubicacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ubicacion);

		parent::tearDown();
	}

}
