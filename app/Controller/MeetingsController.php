<?php
App::uses('AppController', 'Controller');
/**
 * Meetings Controller
 *
 * @property Meeting $Meeting
 */
class MeetingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Meeting->recursive = 0;
		$this->set('meetings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Meeting->id = $id;
		if (!$this->Meeting->exists()) {
			throw new NotFoundException(__('Invalid meeting'));
		}
		$this->set('meeting', $this->Meeting->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Meeting->create();
			if ($this->Meeting->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.'));
			}
		}
		$meetingTypes = $this->Meeting->MeetingType->find('list');
		$employees = $this->Meeting->Employee->find('list');
		$this->set(compact('meetingTypes', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Meeting->id = $id;
		if (!$this->Meeting->exists()) {
			throw new NotFoundException(__('Invalid meeting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Meeting->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Meeting->read(null, $id);
		}
		$meetingTypes = $this->Meeting->MeetingType->find('list');
		$employees = $this->Meeting->Employee->find('list');
		$this->set(compact('meetingTypes', 'employees'));
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
		$this->Meeting->id = $id;
		if (!$this->Meeting->exists()) {
			throw new NotFoundException(__('Invalid meeting'));
		}
		if ($this->Meeting->delete()) {
			$this->Session->setFlash(__('Meeting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Meeting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
