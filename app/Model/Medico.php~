<?php
App::uses('AppModel', 'Model');
/**
 * Medico Model
 *
 * @property Instituicao $Instituicao
 */
class Medico extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    var $virtualFields = array(
		'CodNome' => 'CONCAT(Medico.CodigoSUP, " : ", Medico.Nome)'
    );


	public $displayField = 'CodNome';

	public $validate = array(
		'Nome'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Nome'),
			'isUnique' => array('rule'=>'isUnique','message'=>'Este nome já está cadastrado')),
		'CPF'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo CPF'),
			'isUnique' => array('rule'=>'isUnique','message'=>'Este CPF já está cadastrado')),		
		'Endereco'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Endereço')),
		'Telefone'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Telefone')),
		'Celular'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Celular')),
		'CEP'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo CEP')),		
		'Cidade'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Cidade')),
		'Especialidade'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Especialidade')),
		'CRM'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo CRM'),
			'isUnique' => array('rule'=>'isUnique','message'=>'Este CRM já está cadastrado'))
	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Instituicao' => array(
			'className' => 'Instituicao',
			'joinTable' => 'instituicao_medicos',
			'foreignKey' => 'medico_id',
			'associationForeignKey' => 'instituicao_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
