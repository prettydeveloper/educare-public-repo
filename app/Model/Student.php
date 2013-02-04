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
/*	public $hasMany = array(
		'Attendance' => array(
			'className' => 'Attendance',
			'foreignKey' => 'student_id',
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
	);*/

	public $hasOne = array(
		'TodayAttendance' => array(
			'className' => 'Attendance',
			//'conditions' => array('DATE(TodayAttendance.month_date)' => 'CURDATE()')
			)
		);
	
	public $hasMany = array(
		'TotalAttendances' => array(
			'className' => 'Attendance'
			)
		);

}
