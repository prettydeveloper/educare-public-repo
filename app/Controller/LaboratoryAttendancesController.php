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
			$user_id = $this->Session->read('Auth.User.id');
			if ($this->LaboratoryAttendance->saveRecord($this->request->data, $user_id)) {
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
			$user_id = $this->Session->read('Auth.User.id');
			if ($this->LaboratoryAttendance->saveRecord($this->request->data, $user_id)) {
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
		$this->set('grade_id', $grade['Grade']['id']);
	}


	/**
	 * take method
	 *
	 * @throws NotFoundException
	 * @return void
	 */

	public function take($grade_id = null, $laboratory_id = null, $attendance_date = null) {
			
			// Has any form data been POSTed?
		    if ($this->request->is('post')) {
		        // If the form data can be validated and saved...
		        $user_id = $this->Session->read('Auth.User.id');

		        // Retrieving and saving Students attendance data
		        foreach ($this->request->data['LaboratoryAttendance'] as $attendance): 
		        	if( $attendance['absent'] == true || $attendance['late'] == true || $attendance['present'] == true){		        			
		        		$this->LaboratoryAttendance->saveRecord($attendance, $user_id);
		        	} else if( $attendance['absent'] == false && $attendance['late'] == false || $attendance['present'] == false) {
		        		$this->LaboratoryAttendance->delete($attendance);
		        	}
		        endforeach;	

		        // Retrieving and saving Employees attendance data
		        $this->loadModel('EmployeeAttendance');
		        $educator_attendance = $this->request->data['EducatorAttendance'];
		        $expert_attendance = $this->request->data['ExpertAttendance'];
		        $this->EmployeeAttendance->saveRecord($educator_attendance, $user_id);
		        $this->EmployeeAttendance->saveRecord($expert_attendance, $user_id);

		        $this->loadModel('Observator');
		        $observator = $this->request->data['Observator'];
		        $this->Observator->save($observator);

		        $this->Session->setFlash('Presenze salvate!');
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

		    $this->loadModel('Laboratory');
		    $laboratory = $this->Laboratory->find('first', 
		    	array( 'conditions' => array('Laboratory.id' => $laboratory_id)));
		    $this->set('laboratory', $laboratory);

		    // Collecting and setting attendance data for students and staff
		    $this->loadModel('EmployeeAttendance');

		    $educator_id = $laboratory['Educator']['id'];
		    $expert_id = $laboratory['Expert']['id'];
		    $laboratory_id = $laboratory['Laboratory']['id'];

		    $educator_attendance = $this->EmployeeAttendance->getDayAttendance($educator_id, $laboratory_id, date('Y-m-d', strtotime($attendance_date)));
		    $expert_attendance = $this->EmployeeAttendance->getDayAttendance($expert_id, $laboratory_id, date('Y-m-d', strtotime($attendance_date)));

		    $i = 0;
		    $attendances = array();
		    foreach ($students as $student) {
		    	$attendances[$i] = $this->LaboratoryAttendance->getDayAttendance($student['Student']['id'],
		    		$laboratory_id, date('Y-m-d',strtotime($attendance_date)));
		    	$i++;
		    }

		    $this->loadModel('Observator');
		    $observator = $this->Observator->getLaboratoryObservator($laboratory_id, date('Y-m-d', strtotime($attendance_date)));

		    $this->set('observator',$observator);
		    $this->set('attendances',$attendances);
		    $this->set('educator_attendance',$educator_attendance);
		    $this->set('expert_attendance',$expert_attendance);
		    $this->set('attendance_date', $attendance_date);
	}
}
