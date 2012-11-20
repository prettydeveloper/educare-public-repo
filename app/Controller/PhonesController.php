<?php
App::uses('AppController', 'Controller');
/**
 * Phones Controller
 *
 * @property Phone $Phone
 */
class PhonesController extends AppController {
	public $scaffold;
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Phone->recursive = 0;
		$this->set('phones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Phone->id = $id;
		if (!$this->Phone->exists()) {
			throw new NotFoundException(__('Invalid phone'));
		}
		$this->set('phone', $this->Phone->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Phone->create();
			if ($this->Phone->save($this->request->data)) {
				$this->Session->setFlash(__('The phone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone could not be saved. Please, try again.'));
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
		$this->Phone->id = $id;
		if (!$this->Phone->exists()) {
			throw new NotFoundException(__('Invalid phone'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Phone->save($this->request->data)) {
				$this->Session->setFlash(__('The phone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The phone could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Phone->read(null, $id);
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
		$this->Phone->id = $id;
		if (!$this->Phone->exists()) {
			throw new NotFoundException(__('Invalid phone'));
		}
		if ($this->Phone->delete()) {
			$this->Session->setFlash(__('Phone deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Phone was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
