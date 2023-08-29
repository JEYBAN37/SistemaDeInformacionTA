<?php
App::uses('Juventudadulto', 'Model');

/**
 * Juventudadulto Test Case
 *
 */
class JuventudadultoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.juventudadulto',
		'app.familia',
		'app.sociambiental',
		'app.responsable',
		'app.ubicacion',
		'app.sociambientalscompletum',
		'app.primerainfancia',
		'app.persona'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Juventudadulto = ClassRegistry::init('Juventudadulto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Juventudadulto);

		parent::tearDown();
	}

}
