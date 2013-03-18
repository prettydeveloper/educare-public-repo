<?php
App::uses('AppController', 'Controller');
/**
 * MeetingTypes Controller
 *
 * @property MeetingType $MeetingType
 */
class MeetingTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MeetingType->recursive = 0;
		$this->set('meetingTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MeetingType->id = $id;
		if (!$this->MeetingType->exists()) {
			throw new NotFoundException(__('Invalid meeting type'));
		}
		$this->set('meetingType', $this->MeetingType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingType->create();
			if ($this->MeetingType->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting type could not be saved. Please, try again.'));
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
		$this->MeetingType->id = $id;
		if (!$this->MeetingType->exists()) {
			throw new NotFoundException(__('Invalid meeting type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MeetingType->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MeetingType->read(null, $id);
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
		$this->MeetingType->id = $id;
		if (!$this->MeetingType->exists()) {
			throw new NotFoundException(__('Invalid meeting type'));
		}
		if ($this->MeetingType->delete()) {
			$this->Session->setFlash(__('Meeting type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Meeting type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
