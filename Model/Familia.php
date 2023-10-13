<?php
App::uses('AppModel', 'Model');
/**
 * Familia Model
 *
 * @property Sociambiental $Sociambiental
 * @property Adolescencia $Adolescencia
 * @property Gestante $Gestante
 * @property Infantil $Infantil
 * @property Juventudadulto $Juventudadulto
 * @property Observacion $Observacion
 * @property Persona $Persona
 * @property Primerainfancia $Primerainfancia
 */
class Familia extends AppModel
{


	public $virtualFields = array(
		'apellidosfamilia' => 'CONCAT(Familia.sociambiental_id, " ", Familia.hogar, " ", Familia.nombres, " ", Familia.apellidos)'
	);
	public $displayField = 'apellidosfamilia';


	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'sociambiental_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipofamilia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		), 'nombres' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellidos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'genero' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rol' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'correo' => array(
			'email' => array(
				'rule' => array('email', false),
				'message' => 'diligencie correctamente ejemplo@correo.xxx',
				//'rule'     =>  'isUnique' , 
				//'message'  =>  'el correo ya esta registrado.' ,
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		), 'celular' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'numeropersonas' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'vivienda' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'tenencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'combustible' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'otrocombustible' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cursovidafamilia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lgtbi' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estilodevidapredominante' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'poblacionvulnerable' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'poblacionvulnerable1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'hogar' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'antecedenteenfermedad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'antecedenteenfermedad1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'antecedenteenfermedad2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'riesgopsicosocial' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'riesgopsicosocial1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'riesgopsicosocial2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'programasocial' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'programasocial1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'programasocial2' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'cepilladodientes' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'otroelementohigiene' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'elementoshigiene' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lavadomanos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aseococina' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'higienealimentos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'higiene' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'saludalternativa' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cuidadopermanente' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enfermedadtransmible' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		/*'enfermedadtransmible1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'tiemporesidencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'permanenciaresidencia' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Revisar campo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Sociambiental' => array(
			'className' => 'Sociambiental',
			'foreignKey' => 'sociambiental_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Adolescencia' => array(
			'className' => 'Adolescencia',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Gestante' => array(
			'className' => 'Gestante',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Infantil' => array(
			'className' => 'Infantil',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Juventudadulto' => array(
			'className' => 'Juventudadulto',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Observacion' => array(
			'className' => 'Observacion',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Primerainfancia' => array(
			'className' => 'Primerainfancia',
			'foreignKey' => 'familia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}