<?php
/**
 * UbicacionFixture
 *
 */
class UbicacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'zona' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'tipo1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'comuna' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'tipo2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'barrio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'estrato' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'zona' => 'Lorem ipsum dolor sit amet',
			'tipo1' => 'Lorem ipsum dolor sit amet',
			'comuna' => 'Lorem ipsum dolor sit amet',
			'tipo2' => 'Lorem ipsum dolor sit amet',
			'barrio' => 'Lorem ipsum dolor sit amet',
			'estrato' => 1
		),
	);

}
