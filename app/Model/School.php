<?php
App::uses('AppModel', 'Model');
/**
 * School Model
 *
 * @property Grade $Grade
 * @property Employee $Employee
 */
class School extends AppModel {

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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Grade' => array(
			'className' => 'Grade',
			'foreignKey' => 'school_id',
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
		'Employee' => array(
			'className' => 'Employee',
			'joinTable' => 'employees_schools',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'employee_id',
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

	public $belongsTo = array(
			'CreatedBy' => array(
			'className' => 'User',
			'foreignKey' => 'created_by',
			'conditions' => '',
			'fields' => 'id, username',
			'order' => ''
		),
			'ModifiedBy' => array(
				'className' => 'User',
				'foreignKey' => 'modified_by',
				'conditions' => '',
				'fields' => 'id, username',
				'order' => ''
		),
			'TrashedBy' => array(
				'className' => 'User',
				'foreignKey' => 'trashed_by',
				'conditions' => '',
				'fields' => 'id, username',
				'order' => ''
		)
	);

}
