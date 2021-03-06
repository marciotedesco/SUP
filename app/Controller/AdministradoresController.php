<?php
App::uses('AppController', 'Controller');
/**
 * Administradores Controller
 *
 * @property Administrador $Administrador
 */
class AdministradoresController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Administrador->recursive = 0;
		$this->set('administradores', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Administrador->id = $id;
		if (!$this->Administrador->exists()) {
			throw new NotFoundException(__('Administrador inválido'));
		}
		$this->set('administrador', $this->Administrador->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Administrador->create();
			if ($this->Administrador->save($this->request->data)) {
				$this->Session->setFlash(__('O administrador foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O admininistrador não pôde ser salvo. Por favor, tente novamente.'));
			}
		}
		$instituicoes = $this->Administrador->Instituicao->find('list');
		$this->set(compact('instituicoes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Administrador->id = $id;
		if (!$this->Administrador->exists()) {
			throw new NotFoundException(__('Administrador inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Administrador->save($this->request->data)) {
				$this->Session->setFlash(__('O admininistrador foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O admininistrador não pôde ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Administrador->read(null, $id);
		}
		$instituicoes = $this->Administrador->Instituicao->find('list');
		/*$profissionais = $this->Administrador->Profissional->find('list');*/
		$this->set(compact('instituicoes'));
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
		$this->Administrador->id = $id;
		if (!$this->Administrador->exists()) {
			throw new NotFoundException(__('Administrador inválido'));
		}
		if ($this->Administrador->delete()) {
			$this->Session->setFlash(__('Administrador deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Administrador não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
