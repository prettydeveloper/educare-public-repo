<?php
App::uses('AppModel', 'Model');
/**
 * Meeting Model
 *
 * @property MeetingType $MeetingType
 * @property MeetingAttendance $MeetingAttendance
 * @property Employee $Employee
 */
class Meeting extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'meeting_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'MeetingType' => array(
			'className' => 'MeetingType',
			'foreignKey' => 'meeting_type_id',
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
		'MeetingAttendance' => array(
			'className' => 'MeetingAttendance',
			'foreignKey' => 'meeting_id',
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
			'joinTable' => 'employees_meetings',
			'foreignKey' => 'meeting_id',
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

}
