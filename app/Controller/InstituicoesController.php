	<?php
App::uses('AppController', 'Controller');

/**
 * Instituicoes Controller
 *
 * @property Instituicao $Instituicao
 */
class InstituicoesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instituicao->recursive = 0;
		$this->set('instituicoes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Instituicao->id = $id;
		if (!$this->Instituicao->exists()) {
			throw new NotFoundException(__('Instituição inválida'));
		}
		$this->set('instituicao', $this->Instituicao->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instituicao->create();
			if ($this->Instituicao->save($this->request->data)) {
				$this->Session->setFlash(__('A instituição foi adicionada com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A instituição não pôde ser salva. Por favor, tente novamente.'));
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
		$this->Instituicao->id = $id;
		if (!$this->Instituicao->exists()) {
			throw new NotFoundException(__('Instituição inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instituicao->save($this->request->data)) {
				$this->Session->setFlash(__('A instituição foi salva.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A instituição não pôde ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Instituicao->read(null, $id);
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
		$this->Instituicao->id = $id;
		if (!$this->Instituicao->exists()) {
			throw new NotFoundException(__('Instituição inválida'));
		}
		if ($this->Instituicao->delete()) {
			$this->Session->setFlash(__('Instituição deletada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instituição não foi deletada'));
		$this->redirect(array('action' => 'index'));
	}
}
