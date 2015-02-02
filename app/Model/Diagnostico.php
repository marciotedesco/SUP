<?php
App::uses('AppModel', 'Model');
/**
 * Diagnostico Model
 *
 * @property Prontuario $Prontuario
 * @property Paciente $Paciente
 * @property Medico $Medico
 */
class Diagnostico extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $validate = array(
		'Sintomas'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Sintomas')),
		'Comentarios'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Comentários')),		
		'Receita'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Receita'))
	);
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Prontuario' => array(
			'className' => 'Prontuario',
			'foreignKey' => 'Prontuario_id',
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
		'Medico' => array(
			'className' => 'Medico',
			'foreignKey' => 'Medico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
