<?php
App::uses('AppController', 'Controller');
/**
 * GradesLaboratories Controller
 *
 * @property GradesLaboratory $GradesLaboratory
 */
class GradesLaboratoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GradesLaboratory->recursive = 0;
		$this->set('gradesLaboratories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GradesLaboratory->id = $id;
		if (!$this->GradesLaboratory->exists()) {
			throw new NotFoundException(__('Invalid grades laboratory'));
		}
		$this->set('gradesLaboratory', $this->GradesLaboratory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GradesLaboratory->create();
			if ($this->GradesLaboratory->save($this->request->data)) {
				$this->Session->setFlash(__('The grades laboratory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grades laboratory could not be saved. Please, try again.'));
			}
		}
		$grades = $this->GradesLaboratory->Grade->find('list');
		$laboratories = $this->GradesLaboratory->Laboratory->find('list');
		$this->set(compact('grades', 'laboratories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GradesLaboratory->id = $id;
		if (!$this->GradesLaboratory->exists()) {
			throw new NotFoundException(__('Invalid grades laboratory'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GradesLaboratory->save($this->request->data)) {
				$this->Session->setFlash(__('The grades laboratory has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grades laboratory could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GradesLaboratory->read(null, $id);
		}
		$grades = $this->GradesLaboratory->Grade->find('list');
		$laboratories = $this->GradesLaboratory->Laboratory->find('list');
		$this->set(compact('grades', 'laboratories'));
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
		$this->GradesLaboratory->id = $id;
		if (!$this->GradesLaboratory->exists()) {
			throw new NotFoundException(__('Invalid grades laboratory'));
		}
		if ($this->GradesLaboratory->delete()) {
			$this->Session->setFlash(__('Grades laboratory deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grades laboratory was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
