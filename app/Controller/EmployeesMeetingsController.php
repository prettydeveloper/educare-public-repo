<?php
App::uses('AppController', 'Controller');
/**
 * EmployeesMeetings Controller
 *
 * @property EmployeesMeeting $EmployeesMeeting
 */
class EmployeesMeetingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeesMeeting->recursive = 0;
		$this->set('employeesMeetings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmployeesMeeting->id = $id;
		if (!$this->EmployeesMeeting->exists()) {
			throw new NotFoundException(__('Invalid employees meeting'));
		}
		$this->set('employeesMeeting', $this->EmployeesMeeting->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeesMeeting->create();
			if ($this->EmployeesMeeting->save($this->request->data)) {
				$this->Session->setFlash(__('The employees meeting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employees meeting could not be saved. Please, try again.'));
			}
		}
		$employees = $this->EmployeesMeeting->Employee->find('list');
		$meetings = $this->EmployeesMeeting->Meeting->find('list');
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
		$this->EmployeesMeeting->id = $id;
		if (!$this->EmployeesMeeting->exists()) {
			throw new NotFoundException(__('Invalid employees meeting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeesMeeting->save($this->request->data)) {
				$this->Session->setFlash(__('The employees meeting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employees meeting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmployeesMeeting->read(null, $id);
		}
		$employees = $this->EmployeesMeeting->Employee->find('list');
		$meetings = $this->EmployeesMeeting->Meeting->find('list');
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
		$this->EmployeesMeeting->id = $id;
		if (!$this->EmployeesMeeting->exists()) {
			throw new NotFoundException(__('Invalid employees meeting'));
		}
		if ($this->EmployeesMeeting->delete()) {
			$this->Session->setFlash(__('Employees meeting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employees meeting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
