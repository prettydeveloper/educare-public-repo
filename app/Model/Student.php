<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Class $Class
 * @property Attendance $Attendance
 */
class Student extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';
	public $belongsTo = 'Grade';
	
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
