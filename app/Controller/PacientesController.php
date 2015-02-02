<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 *
 * @property Paciente $Paciente
 */
class PacientesController extends AppController {

/**
 * viewpaciente method
 *
 * @return void
 */
	public function viewpaciente() {
		$this->Paciente->id = $this->idpaciente;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Paciente inválido'));
		}
		$this->set('paciente', $this->Paciente->read(null, $this->Paciente->id));
		//print_r($this->idpaciente);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paciente->recursive = 0;
		$this->set('pacientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Paciente inválido'));
		}
		$this->set('paciente', $this->Paciente->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paciente->create();
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('O paciente foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O paciente não pôde ser salvo. Por favor, tente novamente.'));
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
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Paciente inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('O paciente foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O paciente não pôde ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Paciente->read(null, $id);
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
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Paciente inválido'));
		}
		if ($this->Paciente->delete()) {
			$this->Session->setFlash(__('Paciente deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Paciente não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
