<?php
App::uses('AppController', 'Controller');
/**
 * Attendances Controller
 *
 * @property Attendance $Attendance
 */
class AttendancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Attendance->recursive = 0;
		$this->set('attendances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		$this->set('attendance', $this->Attendance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attendance->create();
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		}
		$students = $this->Attendance->Student->find('list');
		$grades = $this->Attendance->Grade->find('list');
		$this->set(compact('students', 'grades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attendance->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Attendance->read(null, $id);
		}
		$students = $this->Attendance->Student->find('list');
		$grades = $this->Attendance->Grade->find('list');
		$this->set(compact('students', 'grades'));
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
		$this->Attendance->id = $id;
		if (!$this->Attendance->exists()) {
			throw new NotFoundException(__('Invalid attendance'));
		}
		if ($this->Attendance->delete()) {
			$this->Session->setFlash(__('Attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * take method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */

	public function take() {
			// Has any form data been POSTed?
		    if ($this->request->is('post')) {
		        // If the form data can be validated and saved...
		        $this->Attendance->create();

		        foreach ($this->request->data['Attendance'] as $attendance): 
		        	if( $attendance['absent'] == true || $attendance['late'] == true)
		        		$this->Attendance->save($attendance);
		        	else if( $attendance['absent'] == false && $attendance['late'] == false )
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
		    $this->set('students', $this->Student->find('all'));
	}

}
