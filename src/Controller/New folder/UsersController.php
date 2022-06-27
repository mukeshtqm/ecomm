<?php
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
class UsersController extends Appcontroller{
    public function initialize()
    {
        // Always enable the CSRF component.
        $this->loadComponent('Csrf');
        $this->loadComponent('Flash');  
    }
    public function view(){
        $this->set('color', 'pink');
    }
    
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    public function add_(){
        try{
            // $this->autoRender = false;
            $user = $this->Users->newEntity();
        $usersTable = TableRegistry::getTableLocator()->get('Users');
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
        }
        $user = $usersTable->newEntity($this->request->getData());
        // $user->name = ucfirst($user->fullName);
        // debug($user);
        if ($usersTable->save($user)) {
            // The $user entity contains the id now
            $id = $user->id;
            // $this->Flash->success("Registered Successfully!.");
            // $this->Flash->set('Registered Successfully!', [
            //     'element' => 'success'
            // ]);
            
        }
        $this->set('user',$user);
    } catch (\Exception $e) {
        $message = $e->getMessage();
        $this->Flash->error($message);
    } catch (\PDOException $e) {
        $message = $e->getMessage();
        $this->Flash->error($message);
    }
    }
}