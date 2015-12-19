<?php
App::uses('EmployeesMeeting', 'Model');

/**
 * EmployeesMeeting Test Case
 *
 */
class EmployeesMeetingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employees_meeting',
		'app.employee',
		'app.employee_category',
		'app.department',
		'app.manager',
		'app.user',
		'app.group',
		'app.meeting_attendance',
		'app.meeting',
		'app.school',
		'app.grade',
		'app.course_code',
		'app.attendance',
		'app.student',
		'app.employees_school'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployeesMeeting = ClassRegistry::init('EmployeesMeeting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployeesMeeting);

		parent::tearDown();
	}

}
