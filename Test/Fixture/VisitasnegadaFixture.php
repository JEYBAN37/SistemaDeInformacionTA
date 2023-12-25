<?php
/**
 * VisitasnegadaFixture
 *
 */
class VisitasnegadaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombreshabitante' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipodocumento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numerodocumento' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estadocasa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'observacion' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'ubicacion_id' => 1,
			'direccion' => 'Lorem ipsum dolor sit amet',
			'nombreshabitante' => 'Lorem ipsum dolor sit amet',
			'tipodocumento' => 'Lorem ipsum dolor ',
			'numerodocumento' => 1,
			'telefono' => 'Lorem ipsum d',
			'estadocasa' => 'Lorem ipsum dolor sit amet',
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'responsable_id' => 1,
			'fecha' => '2023-12-24 20:49:08'
		),
	);

}
