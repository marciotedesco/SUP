<?php
App::uses('AppModel', 'Model');
/**
 * Cartoes Model
 *
 */
class Cartao extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $name = 'Cartoes';
	public $useTable = 'segundavia';

	public $validate = array(
		'nomeusuario'=> array('notempty' => array('rule'=>'notempty','message'=>'Você deve preencher o campo Nome Usuário')),

	);


}
