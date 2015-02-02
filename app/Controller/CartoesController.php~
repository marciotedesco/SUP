<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 *
 * @property Cartoes $Cartoes
 */
class CartoesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cartao->recursive = 0;
		$this->set('cartoes', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cartao->create();
			if ($this->Cartao->save($this->request->data)) {
				$this->Session->setFlash(__('O cartão foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O cartão não pôde ser salvo. Por favor, tente novamente.'));
			}
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
		$this->Cartao->id = $id;
		if (!$this->Cartao->exists()) {
			throw new NotFoundException(__('Cartão inválido'));
		}
		if ($this->Cartao->delete()) {
			$this->Session->setFlash(__('Cartão deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cartão não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
