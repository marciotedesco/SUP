<?php
App::uses('AppController', 'Controller');
/**
 * Consultas Controller
 *
 * @property Consulta $Consulta
 */
class ConsultasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Consulta->recursive = 0;
		$this->set('consultas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Consulta->id = $id;
		if (!$this->Consulta->exists()) {
			throw new NotFoundException(__('Consulta inválida'));
		}
		$this->set('consulta', $this->Consulta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consulta->create();
			
			//print_r($this->request->data);
			
			$this->request->data['Consulta']['Prontuario_id'] = 1;
			
			if ($this->Consulta->save($this->request->data)) {
				$this->Session->setFlash(__('A Consulta foi salva'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Consulta não pôde ser salva. Por favor, tente novamente.'));
			}
		}
		$medicos = $this->Consulta->Medico->find('list');
		$pacientes = $this->Consulta->Paciente->find('list');
		$prontuarios = $this->Consulta->Prontuario->find('list');
		$this->set(compact('medicos', 'pacientes', 'prontuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Consulta->id = $id;
		if (!$this->Consulta->exists()) {
			throw new NotFoundException(__('Consulta inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Consulta->save($this->request->data)) {
				$this->Session->setFlash(__('A Consulta foi salva'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Consulta não pôde ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Consulta->read(null, $id);
		}
		$medicos = $this->Consulta->Medico->find('list');
		$pacientes = $this->Consulta->Paciente->find('list');
		$prontuarios = $this->Consulta->Prontuario->find('list');
		$this->set(compact('medicos', 'pacientes', 'prontuarios'));
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
		$this->Consulta->id = $id;
		if (!$this->Consulta->exists()) {
			throw new NotFoundException(__('Consulta inválida'));
		}
		if ($this->Consulta->delete()) {
			$this->Session->setFlash(__('Consulta deletada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consulta não foi deletada'));
		$this->redirect(array('action' => 'index'));
	}
}
