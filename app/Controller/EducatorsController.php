<?php
App::uses('AppController', 'Controller');
/**
 * Educators Controller
 *
 * @property Educator $Educator
 */
class EducatorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Educator->recursive = 0;
		$this->set('educators', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Educator->id = $id;
		if (!$this->Educator->exists()) {
			throw new NotFoundException(__('Invalid educator'));
		}
		$this->set('educator', $this->Educator->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Educator->create();
			if ($this->Educator->save($this->request->data)) {
				$this->Session->setFlash(__('The educator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educator could not be saved. Please, try again.'));
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
		$this->Educator->id = $id;
		if (!$this->Educator->exists()) {
			throw new NotFoundException(__('Invalid educator'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Educator->save($this->request->data)) {
				$this->Session->setFlash(__('The educator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educator could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Educator->read(null, $id);
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
		$this->Educator->id = $id;
		if (!$this->Educator->exists()) {
			throw new NotFoundException(__('Invalid educator'));
		}
		if ($this->Educator->delete()) {
			$this->Session->setFlash(__('Educator deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Educator was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Educator->recursive = 0;
		$this->set('educators', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Educator->id = $id;
		if (!$this->Educator->exists()) {
			throw new NotFoundException(__('Invalid educator'));
		}
		$this->set('educator', $this->Educator->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Educator->create();
			if ($this->Educator->save($this->request->data)) {
				$this->Session->setFlash(__('The educator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educator could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Educator->id = $id;
		if (!$this->Educator->exists()) {
			throw new NotFoundException(__('Invalid educator'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Educator->save($this->request->data)) {
				$this->Session->setFlash(__('The educator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educator could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Educator->read(null, $id);
		}
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
		$this->Educator->id = $id;
		if (!$this->Educator->exists()) {
			throw new NotFoundException(__('Invalid educator'));
		}
		if ($this->Educator->delete()) {
			$this->Session->setFlash(__('Educator deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Educator was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
