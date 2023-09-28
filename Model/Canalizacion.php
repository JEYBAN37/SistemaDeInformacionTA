<?php
App::uses('AppModel', 'Model');
/**
 * Canalizacion Model
 *
 */
class Canalizacion extends AppModel
{

	public $virtualFields = array(
		'enlace' => 'CONCAT(Canalizacion.tipo," ",Canalizacion.nombre, " ", Canalizacion.enlaceuno)'
	);
	public $displayField = 'enlace';
	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'canalizaciones';
}
