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
}
