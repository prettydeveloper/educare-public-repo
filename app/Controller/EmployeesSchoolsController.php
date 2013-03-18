<?php
App::uses('AppController', 'Controller');
/**
 * EmployeesSchools Controller
 *
 * @property EmployeesSchool $EmployeesSchool
 */
class EmployeesSchoolsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeesSchool->recursive = 0;
		$this->set('employeesSchools', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmployeesSchool->id = $id;
		if (!$this->EmployeesSchool->exists()) {
			throw new NotFoundException(__('Invalid employees school'));
		}
		$this->set('employeesSchool', $this->EmployeesSchool->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeesSchool->create();
			if ($this->EmployeesSchool->save($this->request->data)) {
				$this->Session->setFlash(__('The employees school has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employees school could not be saved. Please, try again.'));
			}
		}
		$schools = $this->EmployeesSchool->School->find('list');
		$employees = $this->EmployeesSchool->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EmployeesSchool->id = $id;
		if (!$this->EmployeesSchool->exists()) {
			throw new NotFoundException(__('Invalid employees school'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeesSchool->save($this->request->data)) {
				$this->Session->setFlash(__('The employees school has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employees school could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmployeesSchool->read(null, $id);
		}
		$schools = $this->EmployeesSchool->School->find('list');
		$employees = $this->EmployeesSchool->Employee->find('list');
		$this->set(compact('schools', 'employees'));
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
		$this->EmployeesSchool->id = $id;
		if (!$this->EmployeesSchool->exists()) {
			throw new NotFoundException(__('Invalid employees school'));
		}
		if ($this->EmployeesSchool->delete()) {
			$this->Session->setFlash(__('Employees school deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employees school was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
