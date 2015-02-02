<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

    public $name = 'User';

    public $useTable = 'users';

    public $actsAs = array(
        'Acl' => array('type' => 'requester'),
    );

    public $belongsTo = array('Role');


    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (!isset($data['User']['role_id']) || !$data['User']['role_id']) {
            return null;
        } else {
            return array('Role' => array('id' => $data['User']['role_id']));
        }
    }

    public function beforeSave($options = array()) {
        if (!empty($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }



}
?>
