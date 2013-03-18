<?php
App::uses('AppController', 'Controller');
/**
 * MeetingAttendances Controller
 *
 * @property MeetingAttendance $MeetingAttendance
 */
class MeetingAttendancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MeetingAttendance->recursive = 0;
		$this->set('meetingAttendances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MeetingAttendance->id = $id;
		if (!$this->MeetingAttendance->exists()) {
			throw new NotFoundException(__('Invalid meeting attendance'));
		}
		$this->set('meetingAttendance', $this->MeetingAttendance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingAttendance->create();
			if ($this->MeetingAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting attendance could not be saved. Please, try again.'));
			}
		}
		$employees = $this->MeetingAttendance->Employee->find('list');
		$meetings = $this->MeetingAttendance->Meeting->find('list');
		$this->set(compact('employees', 'meetings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MeetingAttendance->id = $id;
		if (!$this->MeetingAttendance->exists()) {
			throw new NotFoundException(__('Invalid meeting attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MeetingAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting attendance could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MeetingAttendance->read(null, $id);
		}
		$employees = $this->MeetingAttendance->Employee->find('list');
		$meetings = $this->MeetingAttendance->Meeting->find('list');
		$this->set(compact('employees', 'meetings'));
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
		$this->MeetingAttendance->id = $id;
		if (!$this->MeetingAttendance->exists()) {
			throw new NotFoundException(__('Invalid meeting attendance'));
		}
		if ($this->MeetingAttendance->delete()) {
			$this->Session->setFlash(__('Meeting attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Meeting attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
