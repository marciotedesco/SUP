<?php

class UsersController extends AppController {

    public $name = 'Users';
    
    public $uses = array('User');

    public $useTable ='users';

    public function admin_index()
    {
       
    }
	
    public function listar() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
    }

    public function index()
    {
        $this->set('title_for_layout', __('Bem vindo usuario'));
    }

    public function add()
    {
        if (!empty($this->request->data)) {
            $this->User->create();         
            if ($this->User->save($this->request->data)) {          
                $this->Session->setFlash(__('Usuario cadastrado com sucesso'), 'default', array('class' => 'success'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('Erro no cadastro, tente de novo.'), 'default', array('class' => 'error'));
            }
        }
    }
    public function login()
    {
        $this->set('title_for_layout', __('Log in'));
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash($this->Auth->authError, 'default', array(), 'auth');
                $this->redirect($this->Auth->loginAction);
            }
        }
    }

    public function logout()
    {
        $this->Session->setFlash(__('Deslogado com sucesso.'), 'default', array('class' => 'success'));
        $this->redirect($this->Auth->logout());
    }

    public function admin_logout()
    {
        $this->Session->setFlash(__('Deslogado com sucesso.'), 'default', array('class' => 'success'));
        $this->redirect($this->Auth->logout());
    }
    
 }

?>
