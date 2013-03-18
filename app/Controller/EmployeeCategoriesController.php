<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeCategories Controller
 *
 * @property EmployeeCategory $EmployeeCategory
 */
class EmployeeCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeeCategory->recursive = 0;
		$this->set('employeeCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmployeeCategory->id = $id;
		if (!$this->EmployeeCategory->exists()) {
			throw new NotFoundException(__('Invalid employee category'));
		}
		$this->set('employeeCategory', $this->EmployeeCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeeCategory->create();
			if ($this->EmployeeCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The employee category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EmployeeCategory->id = $id;
		if (!$this->EmployeeCategory->exists()) {
			throw new NotFoundException(__('Invalid employee category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeeCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The employee category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmployeeCategory->read(null, $id);
		}
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
		$this->EmployeeCategory->id = $id;
		if (!$this->EmployeeCategory->exists()) {
			throw new NotFoundException(__('Invalid employee category'));
		}
		if ($this->EmployeeCategory->delete()) {
			$this->Session->setFlash(__('Employee category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
