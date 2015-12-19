<?php
App::uses('AppController', 'Controller');
/**
 * Laboratories Controller
 *
 * @property Laboratory $Laboratory
 */
class LaboratoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Laboratory->recursive = 0;
		$this->set('laboratories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Laboratory->id = $id;
		if (!$this->Laboratory->exists()) {
			throw new NotFoundException(__('Invalid laboratory'));
		}
		$this->set('laboratory', $this->Laboratory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Laboratory->create();
			if ($this->Laboratory->save($this->request->data)) {
				$this->flash(__('Laboratory saved.'), array('action' => 'index'));
			} else {
			}
		}
		$educators = $this->Laboratory->Educator->find('list');
		$experts = $this->Laboratory->Expert->find('list');
		$grades = $this->Laboratory->Grade->find('list');
		$this->set(compact('educators', 'experts', 'grades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Laboratory->id = $id;
		if (!$this->Laboratory->exists()) {
			throw new NotFoundException(__('Invalid laboratory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Laboratory->save($this->request->data)) {
				$this->flash(__('The laboratory has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Laboratory->read(null, $id);
		}
		$educators = $this->Laboratory->Educator->find('list');
		$experts = $this->Laboratory->Expert->find('list');
		$grades = $this->Laboratory->Grade->find('list');
		$this->set(compact('educators', 'experts', 'grades'));
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
		$this->Laboratory->id = $id;
		if (!$this->Laboratory->exists()) {
			throw new NotFoundException(__('Invalid laboratory'));
		}
		if ($this->Laboratory->delete()) {
			$this->flash(__('Laboratory deleted'), array('action' => 'index'));
		}
		$this->flash(__('Laboratory was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Laboratory->recursive = 0;
		$this->set('laboratories', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Laboratory->id = $id;
		if (!$this->Laboratory->exists()) {
			throw new NotFoundException(__('Invalid laboratory'));
		}
		$this->set('laboratory', $this->Laboratory->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Laboratory->create();
			if ($this->Laboratory->save($this->request->data)) {
				$this->flash(__('Laboratory saved.'), array('action' => 'index'));
			} else {
			}
		}
		$educators = $this->Laboratory->Educator->find('list');
		$experts = $this->Laboratory->Expert->find('list');
		$grades = $this->Laboratory->Grade->find('list');
		$this->set(compact('educators', 'experts', 'grades'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Laboratory->id = $id;
		if (!$this->Laboratory->exists()) {
			throw new NotFoundException(__('Invalid laboratory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Laboratory->save($this->request->data)) {
				$this->flash(__('The laboratory has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Laboratory->read(null, $id);
		}
		$educators = $this->Laboratory->Educator->find('list');
		$experts = $this->Laboratory->Expert->find('list');
		$grades = $this->Laboratory->Grade->find('list');
		$this->set(compact('educators', 'experts', 'grades'));
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
		$this->Laboratory->id = $id;
		if (!$this->Laboratory->exists()) {
			throw new NotFoundException(__('Invalid laboratory'));
		}
		if ($this->Laboratory->delete()) {
			$this->flash(__('Laboratory deleted'), array('action' => 'index'));
		}
		$this->flash(__('Laboratory was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
