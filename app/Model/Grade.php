<?php
App::uses('AppModel', 'Model');
/**
 * Grade Model
 *
 */
class Grade extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descrizione';
	public $belongsTo = 'School';
	public $hasMany = 'Student';
	public $HasMany = array(
        'Students' => array(
            'className'    => 'Student',
        ) ,
        'Attendances' => array(
            'className'    => 'Attendance',
        )
    );
}
