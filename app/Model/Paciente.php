<?php
App::uses('AppModel', 'Model');
/**
 * Paciente Model
 *
 * @property Prontuario $Prontuario
 * @property Consulta $Consulta
 * @property Exame $Exame
 * @property Diagnostico $Diagnostico
 */
class Paciente extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    var $virtualFields = array(
		'CodNome' => 'CONCAT(Paciente.CodigoSUP, " : ", Paciente.Nome)'
    );


	public $displayField = 'CodNome';

	public $validate = array(
		'CodigoSUP'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo CódigoSUP')),
		'Nome'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Nome')),
		'CPF'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo CPF'),
			'isUnique' => array('rule'=>'isUnique','message'=>'Este CPF já está cadastrado')),		
		'Endereco'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Endereço')),
		'Telefone'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Telefone')),
		'Celular'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Celular')),
		'CEP'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo CEP')),		
		'Cidade'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Cidade')),
		'RG'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo RG')),
		'NomeResponsavel'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Nome Responsável')),
		'EstadoCivil'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Estado Civil'))
	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Prontuario' => array(
			'className' => 'Prontuario',
			'foreignKey' => 'Paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Consulta' => array(
			'className' => 'Consulta',
			'foreignKey' => 'Paciente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
		),
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'Paciente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Diagnostico' => array(
			'className' => 'Diagnostico',
			'foreignKey' => 'Paciente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
