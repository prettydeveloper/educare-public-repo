<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Grade $Grade
 * @property Attendance $Attendance
 */
class Student extends AppModel {

	public $virtualFields = array(
	    'student_name' => "CONCAT(last_name, ' ', first_name)"
	);

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'student_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Grade' => array(
			'className' => 'Grade',
			'foreignKey' => 'grade_id',
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
		'Absence' => array(
			'className' => 'Attendance',
			'foreignKey' => 'student_id',
			'dependent' => false,
			'conditions' => 'Absence.absent = 1',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Late' => array(
			'className' => 'Attendance',
			'foreignKey' => 'student_id',
			'dependent' => false,
			'conditions' => 'Late.late = 1',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	/*public $hasOne = array(
		'TodayAttendance' => array(
			'className' => 'Attendance',
			'conditions' => array('DATE(TodayAttendance.attendance_date) = CURDATE()')
			)
		);*/
	
	/*public $hasMany = array(
		'TotalAttendances' => array(
			'className' => 'Attendance'
			)
		);
	*/
}
