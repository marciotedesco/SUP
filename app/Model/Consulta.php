<?php
App::uses('AppModel', 'Model');
/**
 * Consulta Model
 *
 * @property Medico $Medico
 * @property Paciente $Paciente
 * @property Prontuario $Prontuario
 */
class Consulta extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'consultas';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Medico' => array(
			'className' => 'Medico',
			'foreignKey' => 'Medico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'Paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Prontuario' => array(
			'className' => 'Prontuario',
			'foreignKey' => 'Prontuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
