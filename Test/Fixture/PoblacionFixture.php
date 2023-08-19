<?php
/**
 * PoblacionFixture
 *
 */
class PoblacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'poblacion' => array('type' => 'string', 'null' => false, 'length' => 100),
		'caracteristica' => array('type' => 'string', 'null' => false, 'length' => 100),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'poblacion' => 'Lorem ipsum dolor sit amet',
			'caracteristica' => 'Lorem ipsum dolor sit amet'
		),
	);

}
