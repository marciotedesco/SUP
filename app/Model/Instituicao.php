<?php
App::uses('AppModel', 'Model');
/**
 * Instituicao Model
 *
 */
class Instituicao extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'instituicoes';
	public $displayField = 'Nome';

	public $paginate = array(
        'limit' => 25,
        'order' => array(
            'instituicoes.nome' => 'asc'
        ));

	public $validate = array(
		'Nome'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Nome'),
			'isUnique' => array('rule'=>'isUnique','message'=>'Este nome de instituição já está cadastrado')),
		'Endereco'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Endereço')),
		'Telefone'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Telefone')),
		'Cidade'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Cidade')),
		'DataFundacao'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Data Fundação'))
	);

}
