<?php
/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => true, 'default' => null),
		'tipoidoc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'identificacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombres' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechanac' => array('type' => 'date', 'null' => true, 'default' => null),
		'edad' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'genero' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'otrogenero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'preferencia' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'etnia' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'estudio_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'otroestudio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'profesion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'poblacion' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'poblacion_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'poblaciones' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'discapacidad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ubicacion_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'zona' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'vereda' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comuna' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'corregimiento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'celular' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'correo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ocupacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tiempoexperiencia' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'aseguradora_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'regimen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'perteneceorganizacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'organizacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sociedad_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sector_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'actividad_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecharegistro' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'actualizado' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'equipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fecha' => '2019-07-11',
			'tipoidoc' => 'Lorem ip',
			'identificacion' => 'Lorem ipsum d',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'fechanac' => '2019-07-11',
			'edad' => 1,
			'genero' => 1,
			'otrogenero' => 'Lorem ipsum dolor sit amet',
			'preferencia' => 1,
			'etnia' => 1,
			'estudio_id' => 1,
			'otroestudio' => 'Lorem ipsum dolor sit amet',
			'profesion' => 'Lorem ipsum dolor sit amet',
			'poblacion' => 1,
			'poblacion_id' => 1,
			'poblaciones' => 'Lorem ipsum dolor sit amet',
			'discapacidad' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'zona' => 1,
			'vereda' => 'Lorem ipsum dolor sit amet',
			'comuna' => 'Lorem ipsum dolor sit amet',
			'corregimiento' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'celular' => 'Lorem ipsum dolor ',
			'telefono' => 'Lorem ip',
			'correo' => 'Lorem ipsum dolor sit amet',
			'ocupacion' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'tiempoexperiencia' => 1,
			'aseguradora_id' => 1,
			'regimen' => 'Lorem ipsum dolor sit amet',
			'perteneceorganizacion' => 'Lorem ipsum dolor sit amet',
			'organizacion' => 'Lorem ipsum dolor sit amet',
			'sociedad_id' => 1,
			'sector_id' => 1,
			'actividad_id' => 1,
			'fecharegistro' => 1562809222,
			'actualizado' => 1562809222,
			'equipo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
