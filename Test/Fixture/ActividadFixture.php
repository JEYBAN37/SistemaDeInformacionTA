<?php
/**
 * ActividadFixture
 *
 */
class ActividadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'Identificador'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Fecha de realización de la actividad'),
		'hora_inicio' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'Hora de inicio de una actividad'),
		'hora_fin' => array('type' => 'time', 'null' => false, 'default' => null, 'comment' => 'Hora de finalización de una actividad'),
		'tema' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'latin1_spanish_ci', 'comment' => 'Nombre de la temática desarrollada', 'charset' => 'latin1'),
		'ubicacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'BD_ Barrio_Comuna para asociación'),
		'vereda' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Datos de vereda donde se realiza la actividad', 'charset' => 'latin1'),
		'lugar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'poblaciones' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la poblaciones que participan en la actividad', 'charset' => 'latin1'),
		'producto1' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombregrupo' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Refiere al nombre de un grupo especifico que participa en la actividad(ejemplo: Proinco, mesa victimas, etc )', 'charset' => 'latin1'),
		'caracteristicasesion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'comment' => 'Dato que caracteriza la actividad (Taller, minga, encuentro, otro)', 'charset' => 'latin1'),
		'otrocual' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena otro atributo de caracterización de la actividad diferentes a los criterios establecidos', 'charset' => 'latin1'),
		'objetivouno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el objetivo uno de la Estrategia', 'charset' => 'latin1'),
		'objetivodos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el objetivo dos de la Estrategia 				', 'charset' => 'latin1'),
		'objetivotres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el objetivo tres de la Estrategia', 'charset' => 'latin1'),
		'contobjetivo' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con el objetivos', 'charset' => 'latin1'),
		'objactividad' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena el objetivo de la actividad', 'charset' => 'latin1'),
		'objetivoespecifico' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena el objetivo especifico de la actividad', 'charset' => 'latin1'),
		'premisauno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con las premisa uno de la Estrategia CB', 'charset' => 'latin1'),
		'premisados' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con las premisa dos de la Estrategia CB', 'charset' => 'latin1'),
		'premisatres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con las premisa tres de la Estrategia CB', 'charset' => 'latin1'),
		'contpremisa' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con las premisas', 'charset' => 'latin1'),
		'perspectivauno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con la perspectiva uno de la Estrategia CB', 'charset' => 'latin1'),
		'perspectivados' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con las premisa dos de la Estrategia CB', 'charset' => 'latin1'),
		'contperspectiva' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con las perspectivas', 'charset' => 'latin1'),
		'enfoqueuno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el enfoque uno Estrategia CB', 'charset' => 'latin1'),
		'enfoquedos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el enfoque dos de la Estrategia CB', 'charset' => 'latin1'),
		'enfoquetres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el enfoque tres de la Estrategia CB', 'charset' => 'latin1'),
		'enfoquecuatro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la actividad con el enfoque cuatro de la Estrategia CB', 'charset' => 'latin1'),
		'contribucionenfoque' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena la contribución de la actividad con los enfoques', 'charset' => 'latin1'),
		'compromiso' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena los compromisos generados en la actividad', 'charset' => 'latin1'),
		'aportes' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'conclusiones' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'externo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena el nombre de persona externa al proyecto que apoya la actividad', 'charset' => 'latin1'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena el cargo que tiene la persona externa que apoya en la actividad', 'charset' => 'latin1'),
		'organizacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_spanish_ci', 'comment' => 'Almacena el nombre de la organización o entidad a la que hace parte la persona externa que apoya la organización ', 'charset' => 'latin1'),
		'tipoorganizacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_spanish_ci', 'comment' => 'Asocia la organización o entidad a uno criterios definidos ', 'charset' => 'latin1'),
		'anexo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'actividad_dir' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'plan' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_spanish_ci', 'charset' => 'latin1'),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Campo que relaciona a un integrante del equipo CB'),
		'fecharegistro' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'actualizado' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
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
			'fecha' => '2019-08-13',
			'hora_inicio' => '16:14:42',
			'hora_fin' => '16:14:42',
			'tema' => 'Lorem ipsum dolor sit amet',
			'ubicacion_id' => 1,
			'vereda' => 'Lorem ipsum dolor sit amet',
			'lugar' => 'Lorem ipsum dolor sit amet',
			'poblaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'producto1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'producto_id' => 1,
			'nombregrupo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'caracteristicasesion' => 'Lorem ipsum dolor sit amet',
			'otrocual' => 'Lorem ipsum dolor sit amet',
			'objetivouno' => 'Lorem ipsum d',
			'objetivodos' => 'Lorem ipsum d',
			'objetivotres' => 'Lorem ipsum d',
			'contobjetivo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'objactividad' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'objetivoespecifico' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'premisauno' => 'Lorem ipsum dolor sit amet',
			'premisados' => 'Lorem ipsum dolor sit amet',
			'premisatres' => 'Lorem ipsum dolor sit amet',
			'contpremisa' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'perspectivauno' => 'Lorem ipsum dolor sit amet',
			'perspectivados' => 'Lorem ipsum dolor sit amet',
			'contperspectiva' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'enfoqueuno' => 'Lorem ipsum dolor sit amet',
			'enfoquedos' => 'Lorem ipsum dolor sit amet',
			'enfoquetres' => 'Lorem ipsum dolor sit amet',
			'enfoquecuatro' => 'Lorem ipsum dolor sit amet',
			'contribucionenfoque' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'compromiso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'aportes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conclusiones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'externo' => 'Lorem ip',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'organizacion' => 'Lorem ipsum dolor sit amet',
			'tipoorganizacion' => 'Lorem ipsum dolor sit amet',
			'anexo' => 'Lorem ipsum dolor sit amet',
			'actividad_dir' => 'Lorem ipsum dolor sit amet',
			'plan' => 'Lorem ipsum dolor sit amet',
			'responsable_id' => 1,
			'fecharegistro' => 1565705682,
			'actualizado' => 1565705682
		),
	);

}
