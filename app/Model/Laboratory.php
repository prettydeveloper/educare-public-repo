<?php
App::uses('AppModel', 'Model');
/**
 * Laboratory Model
 *
 * @property Educator $Educator
 * @property Expert $Expert
 * @property EmployeesSchool $EmployeesSchool
 * @property LaboratoryAttendance $LaboratoryAttendance
 * @property Grade $Grade
 */
class Laboratory extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
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
		'Educator' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id_1',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Expert' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id_2',
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
		/*'EmployeesSchool' => array(
			'className' => 'EmployeesSchool',
			'foreignKey' => 'laboratory_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		'LaboratoryAttendance' => array(
			'className' => 'LaboratoryAttendance',
			'foreignKey' => 'laboratory_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Grade' => array(
			'className' => 'Grade',
			'joinTable' => 'grades_laboratories',
			'foreignKey' => 'laboratory_id',
			'associationForeignKey' => 'grade_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
