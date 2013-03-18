<?php
App::uses('AppController', 'Controller');
/**
 * LaboratoryAttendances Controller
 *
 * @property LaboratoryAttendance $LaboratoryAttendance
 */
class LaboratoryAttendancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LaboratoryAttendance->recursive = 0;
		$this->set('laboratoryAttendances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LaboratoryAttendance->id = $id;
		if (!$this->LaboratoryAttendance->exists()) {
			throw new NotFoundException(__('Invalid laboratory attendance'));
		}
		$this->set('laboratoryAttendance', $this->LaboratoryAttendance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LaboratoryAttendance->create();
			if ($this->LaboratoryAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The laboratory attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laboratory attendance could not be saved. Please, try again.'));
			}
		}
		$students = $this->LaboratoryAttendance->Student->find('list');
		$laboratories = $this->LaboratoryAttendance->Laboratory->find('list');
		$this->set(compact('students', 'laboratories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->LaboratoryAttendance->id = $id;
		if (!$this->LaboratoryAttendance->exists()) {
			throw new NotFoundException(__('Invalid laboratory attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LaboratoryAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The laboratory attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laboratory attendance could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LaboratoryAttendance->read(null, $id);
		}
		$students = $this->LaboratoryAttendance->Student->find('list');
		$laboratories = $this->LaboratoryAttendance->Laboratory->find('list');
		$this->set(compact('students', 'laboratories'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->LaboratoryAttendance->id = $id;
		if (!$this->LaboratoryAttendance->exists()) {
			throw new NotFoundException(__('Invalid laboratory attendance'));
		}
		if ($this->LaboratoryAttendance->delete()) {
			$this->Session->setFlash(__('Laboratory attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Laboratory attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * selectSchool method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function selectSchool() {

	    // find the schools
	    $this->loadModel('Schools');
	    $this->set('schools', $this->Schools->find('all'));
	    // serialization for AJAX calls
	    $this->set('_serialize', array('schools'));

	}

	/** 
	 *	findGrades method
	 *	returns selected grades filered by school ID
     *
     *	@throws NotFoundException
	 * 	@return void
	 *	@param string $id the school_id
	 *
	 */

	public function findGrades($id = null) {
		$this->loadModel('Grades');
		$grades = $this->Grades->find('all',
				array(
					'conditions' => array(
						'Grades.school_id' => $id
					),
					'group' => array('Grades.grade_code')
				)
			) ;

		$this->set(array(
			'grades' => $grades,
			'_serialize' => array('grades')
		));
	}

	/** 
	 *	findLab method
	 *	returns selected laboratories filered by grade ID
     *
     *	@throws NotFoundException
	 * 	@return void
	 *	@param string $id the grade_id
	 *
	 */

	public function findLab($id = null) {
		$this->loadModel('Grade');
		$grade = $this->Grade->find('first',
				array( 'conditions' => array('Grade.id' => $id) )
		);

		$laboratories = $grade['Laboratory'];

		$this->set(array(
			'laboratories' => $laboratories,
			'_serialize' => array('laboratories')
		));
	}


	/**
	 * take method
	 *
	 * @throws NotFoundException
	 * @return void
	 */

	public function take($laboratory_id = null, $attendance_date = null) {
			
			// Has any form data been POSTed?
		    if ($this->request->is('post')) {
		        // If the form data can be validated and saved...

		        $this->Attendance->create();

		        foreach ($this->request->data['Attendance'] as $attendance): 
		        	if( $attendance['absent'] == true || $attendance['late'] == true || $attendance['present'] == true)
		        		$this->Attendance->save($attendance);
		        	else if( $attendance['absent'] == false && $attendance['late'] == false || $attendance['present'] == false)
		        		$this->Attendance->delete($attendance);
		        endforeach;

		        //if ($this->Attendance->saveMany($this->request->data['Attendance'], array('Attendance.absent' => true))) {

		            // Set a session flash message and redirect.
		            // debug($this->request->data, true , true);
		            $this->Session->setFlash('Presenze salvate!');
		            //$this->redirect('/attendances/take');
		        //}
		    }

		    // If no form data, find the students with attendance to be edited
		    // and hand it to the view.
		    $this->loadModel('Student');
		    $students = $this->Student->find('all', 
		    	array( 	'conditions' => array('Student.grade_id' => $grade_id),
		    			'group' => array('Student.last_name')));

		    $this->set('students', $students);

		    $this->loadModel('Grade');
		    $this->set('grade', $this->Grade->find('first', 
		    	array( 'conditions' => array('Grade.id' => $grade_id))
		    ));

		    $this->loadModel('Attendance');

		    $i = 0;
		    $attendances = array();
		    foreach ($students as $student) {
		    	$attendances[$i] = $this->Attendance->getDayAttendance($student['Student']['id'],
		    		date('Y-m-d',strtotime($attendance_date)));
		    	$i++;
		    }

		    $this->set('attendances',$attendances);
		    $this->set('attendance_date', $attendance_date);
	}
}
