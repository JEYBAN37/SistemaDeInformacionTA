<?php
App::uses('Visitasnegada', 'Model');

/**
 * Visitasnegada Test Case
 *
 */
class VisitasnegadaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.visitasnegada',
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
		$this->Visitasnegada = ClassRegistry::init('Visitasnegada');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Visitasnegada);

		parent::tearDown();
	}

}
