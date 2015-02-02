<?php
App::uses('AppModel', 'Model');
/**
 * ExamesDisponivel Model
 *
 */
class ExameDisponivel extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $name = 'ExameDisponivel';
	public $displayField = 'Nome';
	public $useTable = 'exames_disponiveis';

}
