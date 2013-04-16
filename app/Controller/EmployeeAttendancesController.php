<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeAttendances Controller
 *
 * @property EmployeeAttendance $EmployeeAttendance
 */
class EmployeeAttendancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeeAttendance->recursive = 0;
		$this->set('employeeAttendances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmployeeAttendance->id = $id;
		if (!$this->EmployeeAttendance->exists()) {
			throw new NotFoundException(__('Invalid employee attendance'));
		}
		$this->set('employeeAttendance', $this->EmployeeAttendance->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeeAttendance->create();
			if ($this->EmployeeAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The employee attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee attendance could not be saved. Please, try again.'));
			}
		}
		$employees = $this->EmployeeAttendance->Employee->find('list');
		$meetings = $this->EmployeeAttendance->Meeting->find('list');
		$laboratories = $this->EmployeeAttendance->Laboratory->find('list');
		$this->set(compact('employees', 'meetings', 'laboratories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EmployeeAttendance->id = $id;
		if (!$this->EmployeeAttendance->exists()) {
			throw new NotFoundException(__('Invalid employee attendance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeeAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The employee attendance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee attendance could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmployeeAttendance->read(null, $id);
		}
		$employees = $this->EmployeeAttendance->Employee->find('list');
		$meetings = $this->EmployeeAttendance->Meeting->find('list');
		$laboratories = $this->EmployeeAttendance->Laboratory->find('list');
		$this->set(compact('employees', 'meetings', 'laboratories'));
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
		$this->EmployeeAttendance->id = $id;
		if (!$this->EmployeeAttendance->exists()) {
			throw new NotFoundException(__('Invalid employee attendance'));
		}
		if ($this->EmployeeAttendance->delete()) {
			$this->Session->setFlash(__('Employee attendance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee attendance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
