<?php
App::uses('School', 'Model');

/**
 * School Test Case
 *
 */
class SchoolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.school',
		'app.grade',
		'app.course_code',
		'app.attendance',
		'app.student',
		'app.employee',
		'app.employee_category',
		'app.department',
		'app.manager',
		'app.user',
		'app.group',
		'app.meeting_attendance',
		'app.meeting',
		'app.meeting_type',
		'app.employees_meeting',
		'app.employees_school'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->School = ClassRegistry::init('School');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->School);

		parent::tearDown();
	}

}
