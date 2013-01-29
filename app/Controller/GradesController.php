<?php
App::uses('AppController', 'Controller');
/**
 * Grades Controller
 *
 * @property Grade $Grade
 */
class GradesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grade->recursive = 0;
		$this->set('grades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$this->set('grade', $this->Grade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grade->create();
			if ($this->Grade->save($this->request->data)) {
				$this->Session->setFlash(__('The grade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade could not be saved. Please, try again.'));
			}
		}
		$schools = $this->Grade->School->find('list');
		$courseCodes = $this->Grade->CourseCode->find('list');
		$this->set(compact('schools', 'courseCodes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grade->save($this->request->data)) {
				$this->Session->setFlash(__('The grade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Grade->read(null, $id);
		}
		$schools = $this->Grade->School->find('list');
		$courseCodes = $this->Grade->CourseCode->find('list');
		$this->set(compact('schools', 'courseCodes'));
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
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->Grade->delete()) {
			$this->Session->setFlash(__('Grade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Grade->recursive = 0;
		$this->set('grades', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$this->set('grade', $this->Grade->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Grade->create();
			if ($this->Grade->save($this->request->data)) {
				$this->Session->setFlash(__('The grade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade could not be saved. Please, try again.'));
			}
		}
		$schools = $this->Grade->School->find('list');
		$courseCodes = $this->Grade->CourseCode->find('list');
		$this->set(compact('schools', 'courseCodes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grade->save($this->request->data)) {
				$this->Session->setFlash(__('The grade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Grade->read(null, $id);
		}
		$schools = $this->Grade->School->find('list');
		$courseCodes = $this->Grade->CourseCode->find('list');
		$this->set(compact('schools', 'courseCodes'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->Grade->delete()) {
			$this->Session->setFlash(__('Grade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
