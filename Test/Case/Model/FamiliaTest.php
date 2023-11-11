<?php
App::uses('Familia', 'Model');

/**
 * Familia Test Case
 *
 */
class FamiliaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Familia = ClassRegistry::init('Familia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Familia);

		parent::tearDown();
	}

}
