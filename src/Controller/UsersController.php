<?php
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
class UsersController extends Appcontroller{
    public function initialize()
    {
        // Always enable the CSRF component.
        $this->loadComponent('Csrf');
    }
    public function view(){
        $this->set('color', 'pink');
    }
    
    public function add(){
        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $user = $usersTable->newEntity($this->request->getData());
        if ($usersTable->save($user)) {
            // The $user entity contains the id now
            $id = $user->id;
        }
    }
}