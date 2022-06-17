<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        'name' => true,
        'email' => true,
        'password' => true,
        'created_at' => true,
        'modified_at' => true,
    ];

    
    protected $_hidden = [
        'password',
    ];
}
