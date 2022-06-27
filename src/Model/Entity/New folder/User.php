<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
class User extends Entity
{

    protected $_accessible = [
        'fullName' => true,
        'email' => true,
        'role_type' => true,
        'password' => true,
        'created_at' => true,
        'modified_at' => true,
    ];

    
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
