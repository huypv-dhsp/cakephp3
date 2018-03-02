<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username','User name is require')
            ->notEmpty('password','Password is require');

    }
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

}
