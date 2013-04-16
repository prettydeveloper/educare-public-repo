<?php
App::uses('AppController', 'Controller');
/**
 * Observators Controller
 *
 * @property Observator $Observator
 */
class ObservatorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Observator->recursive = 0;
		$this->set('observators', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Observator->id = $id;
		if (!$this->Observator->exists()) {
			throw new NotFoundException(__('Invalid observator'));
		}
		$this->set('observator', $this->Observator->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Observator->create();
			if ($this->Observator->save($this->request->data)) {
				$this->Session->setFlash(__('The observator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observator could not be saved. Please, try again.'));
			}
		}
		$laboratories = $this->Observator->Laboratory->find('list');
		$meetings = $this->Observator->Meeting->find('list');
		$this->set(compact('laboratories', 'meetings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Observator->id = $id;
		if (!$this->Observator->exists()) {
			throw new NotFoundException(__('Invalid observator'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Observator->save($this->request->data)) {
				$this->Session->setFlash(__('The observator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observator could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Observator->read(null, $id);
		}
		$laboratories = $this->Observator->Laboratory->find('list');
		$meetings = $this->Observator->Meeting->find('list');
		$this->set(compact('laboratories', 'meetings'));
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
		$this->Observator->id = $id;
		if (!$this->Observator->exists()) {
			throw new NotFoundException(__('Invalid observator'));
		}
		if ($this->Observator->delete()) {
			$this->Session->setFlash(__('Observator deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Observator was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
