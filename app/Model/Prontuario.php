<?php
App::uses('AppModel', 'Model');
/**
 * Prontuario Model
 *
 * @property Paciente $Paciente
 */
class Prontuario extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'prontuarios';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'Paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $hasMany = array(
		'Consulta' => array(
			'className' => 'Consulta',
			'foreignKey' => 'Prontuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Diagnostico' => array(
			'className' => 'Diagnostico',
			'foreignKey' => 'Prontuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'Prontuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);	
}
