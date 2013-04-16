<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property EmployeeCategory $EmployeeCategory
 * @property Department $Department
 * @property Manager $Manager
 * @property User $User
 * @property MeetingAttendance $MeetingAttendance
 * @property Meeting $Meeting
 * @property School $School
 */
class Employee extends AppModel {

	public $displayField = 'last_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
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

	/*public $hasOne = array(
        'LaboratoryEducator' => array(
            'className'    => 'Laboratory',
            'foreignKey' => 'employee_1_id',
            'fields' => 'name, description, id'
        ),
        'LaboratoryExpert' => array(
            'className'    => 'Laboratory',
            'foreignKey' => 'employee_2_id',
            'fields' => 'name, description, id'
        )
    );*/

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'EmployeeCategory' => array(
			'className' => 'EmployeeCategory',
			'foreignKey' => 'employee_category_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Department' => array(
			'className' => 'Department',
			'foreignKey' => 'department_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Manager' => array(
			'className' => 'Employee',
			'foreignKey' => 'manager_id',
			'conditions' => array('Employee.is_manager' => '1'),
			'fields' => 'id, first_name, last_name',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => 'id, username',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'EmployeeAttendance' => array(
			'className' => 'EmployeeAttendance',
			'foreignKey' => 'employee_id',
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
		'Meeting' => array(
			'className' => 'Meeting',
			'joinTable' => 'employees_meetings',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'meeting_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'School' => array(
			'className' => 'School',
			'joinTable' => 'employees_schools',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'school_id',
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
