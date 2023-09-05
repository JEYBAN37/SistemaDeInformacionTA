<?php
App::uses('Primerainfancia', 'Model');

/**
 * Primerainfancia Test Case
 *
 */
class PrimerainfanciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.primerainfancia',
		'app.persona',
		'app.familia',
		'app.sociambiental',
		'app.responsable',
		'app.ubicacion',
		'app.sociambientalscompletum',
		'app.adolescencia',
		'app.gestante',
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
		$this->Primerainfancia = ClassRegistry::init('Primerainfancia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Primerainfancia);

		parent::tearDown();
	}

}
