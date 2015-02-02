<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

class AppController extends Controller {
    var $idpaciente;

    public $components = array(        
        'Auth',
        'Session',
        'Acl'
    );
   
   public $helpers = array('Html', 'Form', 'Session');

   public function beforeFilter()
   {
        $this->Auth->authenticate = array(
            AuthComponent::ALL => array(
                'userModel' => 'User',
                'fields' => array(
                    'username' => 'username',
                    ),
                'scope' => array(
                    'User.status' => 1,
                    ),
                ),
            'Form',
            );        
        $this->Auth->authorize = array(
          AuthComponent::ALL => array('actionPath' => 'controllers'),
          'Actions'
        );
       
        $this->Auth->loginAction = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login',
        );
       
        $this->Auth->logoutRedirect = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login',
        );
     
        $this->Auth->loginRedirect = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'index',
        );
	
	$this->Auth->pacienteRedirect = array(
            'plugin' => null,
            'controller' => 'paciente',
            'action' => 'add',
        );

        $this->Auth->authError = __('Você não possui autorização para executar esta ação.');
	//print_r($this->Auth->user('idpaciente'));
	$this->idpaciente = $this->Auth->user('idpaciente');
	//print_r($this->Auth->user('idpaciente'));
	//echo $this->idpaciente;
       if ( $this->Auth->user() && $this->Auth->user('role_id') == 1 )
       {
           $this->Auth->allowedActions = array('*');
       }else{
           if ( $this->Auth->user() )
           {
               $roleId = $this->Auth->user('role_id');
           }else{
               $roleId = 4;
           }
           
           $aro = $this->Acl->Aro->find('first', array(
               'conditions' => array(
                   'Aro.model' => 'Role',
                   'Aro.foreign_key' => $roleId
               )
           ));
 	//echo $roleId;          
        $aroId = $aro['Aro']['id'];
	//echo $aroId;        
	$thisControllerNode = $this->Acl->Aco->node('controllers/' . $this->name);
        //print_r($thisControllerNode);		           
	if ( $thisControllerNode )
           {
               $thisControllerActions = $this->Acl->Aco->find('list', array(
                'conditions' => array(
                    'Aco.parent_id' => $thisControllerNode['0']['Aco']['id']
                 ),
                'fields' => array(
                 'Aco.id',
                 'Aco.alias'
                ),
                'recursive' => '-1'
               ));
		//print_r($thisControllerActions);
               $thisControllerActionsIds = array_keys($thisControllerActions);
		//print_r($thisControllerActionsIds);               
		$allowedActions = $this->Acl->Aco->Permission->find('list', array(
                'conditions' => array(
                    'Permission.aro_id' => $aroId,
                    'Permission.aco_id' => $thisControllerActionsIds,
                    'Permission._create' => 1,
                    'Permission._read' => 1,
                    'Permission._update' => 1,
                    'Permission._delete' => 1,
                ),
                 'fields' => array(
                     'id',
                     'aco_id'
                 ),
                 'recursive' => '-1'
               ));  
		//print_r($allowedActions);
               $allowedActionsIds = array_values($allowedActions); 
		//print_r($allowedActionsIds);                      
           }
               $allow = array();
               if ( isset($allowedActionsIds) && is_array($allowedActionsIds) && count($allowedActionsIds) )
               {
                   foreach($allowedActionsIds as $i => $aId)
                   {
                       $allow[] = $thisControllerActions[$aId];
                   }                   
               }
        //print_r($allow);   
    	$this->Auth->allowedActions = $allow;
               
       }  
      //print_r($this->Auth->allowedActions);        
   }
   
}
