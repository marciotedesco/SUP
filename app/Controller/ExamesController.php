<?php
App::uses('AppController', 'Controller');
/**
 * Exames Controller
 *
 * @property Exame $Exame
 */
class ExamesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Exame->recursive = 0;
		$this->set('exames', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame inválido'));
		}
		$this->set('exame', $this->Exame->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Exame->create();
			if ($this->Exame->save($this->request->data)) {
				$this->Session->setFlash(__('O exame foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O exame não pôde ser salvo. Por favor, tente novamente.'));
			}
		}
		$medicos = $this->Exame->Medico->find('list');
		$prontuarios = $this->Exame->Prontuario->find('list');
		$exameDisponiveis = $this->Exame->ExameDisponivel->find('list');
		$pacientes = $this->Exame->Paciente->find('list');		
		$this->set(compact('medicos', 'prontuarios', 'exameDisponiveis','pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Exame->save($this->request->data)) {
				$this->Session->setFlash(__('O exame foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O exame não pôde ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Exame->read(null, $id);
		}
		$medicos = $this->Exame->Medico->find('list');
		$prontuarios = $this->Exame->Prontuario->find('list');
		$exameDisponiveis = $this->Exame->ExameDisponivel->find('list');
		$pacientes = $this->Exame->Paciente->find('list');		
		$this->set(compact('medicos', 'prontuarios', 'exameDisponiveis','pacientes'));	}

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
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame inválido'));
		}
		if ($this->Exame->delete()) {
			$this->Session->setFlash(__('Exame deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exame não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Exame->recursive = 0;
		$this->set('exames', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame inválido'));
		}
		$this->set('exame', $this->Exame->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Exame->create();
			if ($this->Exame->save($this->request->data)) {
				$this->Session->setFlash(__('O exame foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O exame não pôde ser salvo. Por favor, tente novamente.'));
			}
		}
		$medicos = $this->Exame->Medico->find('list');
		$prontuarios = $this->Exame->Prontuario->find('list');
		$exameDisponiveis = $this->Exame->ExameDisponivel->find('list');
		$this->set(compact('medicos', 'prontuarios', 'exameDisponiveis'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Exame->save($this->request->data)) {
				$this->Session->setFlash(__('O exame foi salvo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O exame não pôde ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Exame->read(null, $id);
		}
		$medicos = $this->Exame->Medico->find('list');
		$prontuarios = $this->Exame->Prontuario->find('list');
		$exameDisponiveis = $this->Exame->ExameDisponivel->find('list');
		$this->set(compact('medicos', 'prontuarios', 'exameDisponiveis'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Exame inválido'));
		}
		if ($this->Exame->delete()) {
			$this->Session->setFlash(__('Exame deletado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exame não foi deletado'));
		$this->redirect(array('action' => 'index'));
	}
}
