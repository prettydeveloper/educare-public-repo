<?php
App::uses('AppController', 'Controller');
/**
 * StudentGrades Controller
 *
 * @property StudentGrade $StudentGrade
 */
class StudentGradesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StudentGrade->recursive = 0;
		$this->set('studentGrades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StudentGrade->id = $id;
		if (!$this->StudentGrade->exists()) {
			throw new NotFoundException(__('Invalid student grade'));
		}
		$this->set('studentGrade', $this->StudentGrade->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StudentGrade->create();
			if ($this->StudentGrade->save($this->request->data)) {
				$this->Session->setFlash(__('The student grade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student grade could not be saved. Please, try again.'));
			}
		}
		$students = $this->StudentGrade->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StudentGrade->id = $id;
		if (!$this->StudentGrade->exists()) {
			throw new NotFoundException(__('Invalid student grade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StudentGrade->save($this->request->data)) {
				$this->Session->setFlash(__('The student grade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student grade could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StudentGrade->read(null, $id);
		}
		$students = $this->StudentGrade->Student->find('list');
		$this->set(compact('students'));
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
		$this->StudentGrade->id = $id;
		if (!$this->StudentGrade->exists()) {
			throw new NotFoundException(__('Invalid student grade'));
		}
		if ($this->StudentGrade->delete()) {
			$this->Session->setFlash(__('Student grade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Student grade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
