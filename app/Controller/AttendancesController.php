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
		$studentAttendances = $this->Attendance->StudentAttendance->find('list');
		$gradeAttendances = $this->Attendance->GradeAttendance->find('list');
		$this->set(compact('studentAttendances', 'gradeAttendances'));
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
		$studentAttendances = $this->Attendance->StudentAttendance->find('list');
		$gradeAttendances = $this->Attendance->GradeAttendance->find('list');
		$this->set(compact('studentAttendances', 'gradeAttendances'));
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
}
