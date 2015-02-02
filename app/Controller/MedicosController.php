<?php
App::uses('AppController', 'Controller');
/**
 * Medicos Controller
 *
 * @property Medico $Medico
 */
class MedicosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Medico->recursive = 0;
		$this->set('medicos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Medico->id = $id;
		if (!$this->Medico->exists()) {
			throw new NotFoundException(__('Médico inválido'));
		}
		$this->set('medico', $this->Medico->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medico->create();
			if ($this->Medico->save($this->request->data)) {
				$this->Session->setFlash(__('O médico foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O médico não pôde ser salvo. Por favor, tente novamente.'));
			}
		}
		$instituicoes = $this->Medico->Instituicao->find('list');
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
		$this->Medico->id = $id;
		if (!$this->Medico->exists()) {
			throw new NotFoundException(__('Médico inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medico->save($this->request->data)) {
				$this->Session->setFlash(__('O médico foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O médico não pôde ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Medico->read(null, $id);
		}
		$instituicoes = $this->Medico->Instituicao->find('list');
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
		$this->Medico->id = $id;
		if (!$this->Medico->exists()) {
			throw new NotFoundException(__('Médico inválido'));
		}
		if ($this->Medico->delete()) {
			$this->Session->setFlash(__('Médico deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Médico não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
