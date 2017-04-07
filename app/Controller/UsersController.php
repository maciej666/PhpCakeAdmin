<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');


    public function beforeFilter()
    {
        $this->Auth->allow('add');
    }


    public function login()
    {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl()); //przenosi usera tam gdzie chciał
            } else {
                $this->Session->setFlash('Nieprawidłowe hasło bądź login');
            }
        }
    }


    public function logout()
    {
		$this->Auth->logout();
		$this->redirect('/invoices/index');
    }


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
            //hash
            $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
			$this->request->data['User']['role'] = 1;
			if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Dodano usera');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}

}
