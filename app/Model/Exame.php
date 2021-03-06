<?php
App::uses('AppModel', 'Model');
/**
 * Exame Model
 *
 * @property Medico $Medico
 * @property Prontuario $Prontuario
 * @property ExameDisponivel $ExameDisponivel
 */
class Exame extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $name = 'Exame';
	public $useTable = 'exames';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $validate = array(
		'Resultado'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Resultado'))
	);
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
		),
		'Medico' => array(
			'className' => 'Medico',
			'foreignKey' => 'Medico_id',
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
		),
		'ExameDisponivel' => array(
			'className' => 'ExameDisponivel',
			'foreignKey' => 'Exame_Disponivel_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => true
		)
	);
	
}
