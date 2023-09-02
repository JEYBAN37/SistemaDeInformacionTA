<?php
App::uses('Adolescencia', 'Model');

/**
 * Adolescencia Test Case
 *
 */
class AdolescenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adolescencia',
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
		$this->Adolescencia = ClassRegistry::init('Adolescencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adolescencia);

		parent::tearDown();
	}

}
