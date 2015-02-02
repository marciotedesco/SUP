<?php
class Role extends AppModel {

    public $name = 'Role';

    public $actsAs = array(
        'Acl' => array(
            'type' => 'requester',
        ),
    );

    public function parentNode() {
        return null;
    }

}
?>