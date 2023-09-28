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
		'app.canalizacion'
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
