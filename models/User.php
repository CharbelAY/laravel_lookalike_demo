<?php


namespace app\models;

use app\core\DbModel;
use app\core\Model;

class User extends DbModel
{
    public string $firstName="";
    public string $lastName="";
    public string $email="";
    public string $password="";
    public string $confirmPassword="";


    public function register(){
       return $this->save();
    }

    public function tableName(): string
    {
        return 'users';
    }

    public function rules(): array
    {
        return [
            "firstName"=>[User::RULE_REQUIRED],
            "lastName"=>[self::RULE_REQUIRED],
            "email"=>[self::RULE_REQUIRED, self::RULE_EMAIL],
            "password"=>[[self::RULE_REQUIRED],[self::RULE_MIN,"min"=>8],[self::RULE_MAX,"max"=>20]],
            "confirmPassword"=>[[self::RULE_REQUIRED],[self::RULE_MATCH,'match'=>'password']]
        ];
    }

    public function attributes(): array
    {
        return ["firstName","lastName","email","password"];
    }
}