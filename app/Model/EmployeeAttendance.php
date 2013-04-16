<?php
App::uses('AppModel', 'Model');
/**
 * EmployeeAttendance Model
 *
 * @property Employee $Employee
 * @property Meeting $Meeting
 * @property Laboratory $Laboratory
 */
class EmployeeAttendance extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'employee_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'attendance_date' => array(
			'date' => array(
				'rule' => array('date'),
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
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Meeting' => array(
			'className' => 'Meeting',
			'foreignKey' => 'meeting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Laboratory' => array(
			'className' => 'Laboratory',
			'foreignKey' => 'laboratory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function getDayAttendance($employee_id, $laboratory_id, $date) {
		$conditions = array(
			'employee_id' => $employee_id,
            'laboratory_id' => $laboratory_id,
            'attendance_date' => DATE($date)
        );
        return $this->find('first', compact('conditions'));
	}
}
