<?php
App::uses('Canalizacione', 'Model');

/**
 * Canalizacione Test Case
 *
 */
class CanalizacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.canalizacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Canalizacione = ClassRegistry::init('Canalizacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Canalizacione);

		parent::tearDown();
	}

}
