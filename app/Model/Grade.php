<?php
App::uses('AppModel', 'Model');
/**
 * Grade Model
 *
 * @property School $School
 * @property CourseCode $CourseCode
 * @property Attendance $Attendance
 * @property Student $Student
 */
class Grade extends AppModel {

	public $actsAs = array('Containable');

/**
 * Virtual fields for display
 *
 * @var string
 */

public $virtualFields = array(
    'grade_name' => "CONCAT(grade_number, grade_code)"
);

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'grade_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'school_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CourseCode' => array(
			'className' => 'CourseCode',
			'foreignKey' => 'course_code_id',
			'conditions' => '',
			'fields' => 'id, value',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Attendance' => array(
			'className' => 'Attendance',
			'foreignKey' => 'grade_id',
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
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'grade_id',
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
		'Laboratory' => array(
			'className' => 'Laboratory',
			'joinTable' => 'grades_laboratories',
			'foreignKey' => 'grade_id',
			'associationForeignKey' => 'laboratory_id',
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
