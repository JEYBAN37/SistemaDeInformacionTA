<?php
App::uses('AppModel', 'Model');
/**
 * Primerainfancia Model
 *
 * @property Familia $Familia
 * @property Persona $Persona
 */
class Primerainfancia extends AppModel
{


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $useTable = 'primerainfancias';


	/*public $validate = array(
		'persona_id' => array(
			'notEmpty' => array(
				'rule'     =>  'isUnique',
				'message'  =>  'Este usuario ya esta registrado en un curso de vida.',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);*/





	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'familia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
