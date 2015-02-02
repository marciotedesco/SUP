<?php
App::uses('AppModel', 'Model');
/**
 * Anexo Model
 *
 * @property Diagnostico $Diagnostico
 * @property Exame $Exame
 */
class Anexo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'anexos';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Diagnostico' => array(
			'className' => 'Diagnostico',
			'foreignKey' => 'Diagnostico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'Exame_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
