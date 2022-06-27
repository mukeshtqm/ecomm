<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    // public function initialize(){

    // }
    public function validationDefault(Validator $validator)
    {
             
            $validator
            ->requirePresence("email")
            ->notEmpty("email", "Email field value is needed")
            ->add("email", [
                "valid_email" => [
                    "rule" => ["email"],
                    "message" => "Email Address is not valid",
                ],
                "min_length" => [
                    "rule" => ["minLength", 10],
                    "message" => "Invalid min length",
                ],
                "max_length" => [
                    "rule" => ["maxLength", 25],
                    "message" => "Invalid max length",
                ],
            ])
            ->requirePresence("fullName")
            ->notEmpty('fullName', 'Name must not be empty!')
            ->add("fullName", [
                "min_length" => [
                    "rule" => ["minLength", 3],
                    "message" => "Invalid min length",
                ],
                "max_length" => [
                    "rule" => ["maxLength", 25],
                    "message" => "Invalid max length",
                ],
            ]);
            
             
            
        return $validator;
    }
}