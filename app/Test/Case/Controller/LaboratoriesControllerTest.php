<?php
App::uses('LaboratoriesController', 'Controller');

/**
 * LaboratoriesController Test Case
 *
 */
class LaboratoriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.laboratory',
		'app.employee',
		'app.employee_category',
		'app.department',
		'app.user',
		'app.group',
		'app.meeting_attendance',
		'app.meeting',
		'app.meeting_type',
		'app.employees_meeting',
		'app.school',
		'app.grade',
		'app.course_code',
		'app.attendance',
		'app.student',
		'app.employees_school',
		'app.laboratory_attendance',
		'app.grades_laboratory'
	);

}
