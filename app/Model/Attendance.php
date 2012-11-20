<?php
App::uses('AppModel', 'Model');
/**
 * Attendance Model
 *
 * @property Student $Student
 * @property Class $Class
 */
class Attendance extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'student_id';

	public $belongsTo = array(
        'StudentAttendance' => array(
            'className'    => 'Student',
            'foreignKey'   => 'student_id'
        ) ,
        'GradeAttendance' => array(
            'className'    => 'Grade',
            'foreignKey'   => 'grade_id'
        )
    );
}
