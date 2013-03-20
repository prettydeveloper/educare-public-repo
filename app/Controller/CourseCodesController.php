<?php
App::uses('AppController', 'Controller');
/**
 * CourseCodes Controller
 *
 * @property CourseCode $CourseCode
 */
class CourseCodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CourseCode->recursive = 0;
		$this->set('courseCodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CourseCode->id = $id;
		if (!$this->CourseCode->exists()) {
			throw new NotFoundException(__('Invalid course code'));
		}
		$this->set('courseCode', $this->CourseCode->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CourseCode->create();
			if ($this->CourseCode->save($this->request->data)) {
				$this->Session->setFlash(__('The course code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course code could not be saved. Please, try again.'));
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
		$this->CourseCode->id = $id;
		if (!$this->CourseCode->exists()) {
			throw new NotFoundException(__('Invalid course code'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseCode->save($this->request->data)) {
				$this->Session->setFlash(__('The course code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course code could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CourseCode->read(null, $id);
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
		$this->CourseCode->id = $id;
		if (!$this->CourseCode->exists()) {
			throw new NotFoundException(__('Invalid course code'));
		}
		if ($this->CourseCode->delete()) {
			$this->Session->setFlash(__('Course code deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course code was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
