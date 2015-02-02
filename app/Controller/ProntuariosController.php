<?php
App::uses('AppController', 'Controller');
/**
 * Prontuarios Controller
 *
 * @property Prontuario $Prontuario
 */
class ProntuariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prontuario->recursive = 0;
		$this->set('prontuarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Prontuario->id = $id;
		if (!$this->Prontuario->exists()) {
			throw new NotFoundException(__('Invalid prontuario'));
		}
		$this->set('prontuario', $this->Prontuario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prontuario->create();
			if ($this->Prontuario->save($this->request->data)) {
				$this->Session->setFlash(__('The prontuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prontuario could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->Prontuario->Paciente->find('list');
		$this->set(compact('pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Prontuario->id = $id;
		if (!$this->Prontuario->exists()) {
			throw new NotFoundException(__('Invalid prontuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prontuario->save($this->request->data)) {
				$this->Session->setFlash(__('The prontuario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prontuario could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Prontuario->read(null, $id);
		}
		$pacientes = $this->Prontuario->Paciente->find('list');
		$this->set(compact('pacientes'));
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
		$this->Prontuario->id = $id;
		if (!$this->Prontuario->exists()) {
			throw new NotFoundException(__('Invalid prontuario'));
		}
		if ($this->Prontuario->delete()) {
			$this->Session->setFlash(__('Prontuario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Prontuario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
