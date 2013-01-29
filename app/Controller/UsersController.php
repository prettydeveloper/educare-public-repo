<?php
App::uses('AuthComponent', 'Controller/Component');
App::uses('AppController', 'Controller');

/**
 * Users Controller
 * 
 * Educare Project
 * Copyright 2013 Lucia Moreno
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * per ACL
 *
 */
	public function beforeFilter() {
	    parent::beforeFilter();
	    //$this->Auth->allow('initDB');
	    $this->Auth->allow('*');
	}	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
* login method
*/
	public function login() {
    if ($this->request->is('post')) {
    	if ($this->Session->read('Auth.User')) {
	        $this->Session->setFlash('You are logged in!');
	        $this->redirect('/', null, false);
    	}
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash('Your username or password was incorrect.');
        }
    }
	}

	public function logout() {
	   	$this->Session->setFlash('Good-Bye!');
		$this->redirect($this->Auth->logout());
	}

	public function initDB() {
    $group = $this->User->Group;
    //Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    //allow managers to posts and widgets
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Attendances');
    $this->Acl->allow($group, 'controllers/Students');

    //allow users to only add and edit on posts and widgets
    /*$group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Attendances/add');
    $this->Acl->allow($group, 'controllers/Attendances/edit');
    $this->Acl->allow($group, 'controllers/Students/add');
    $this->Acl->allow($group, 'controllers/Students/edit');*/
    //we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}
}


