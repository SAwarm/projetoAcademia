<?php

namespace App\Models\Auth;

use MF\Model\Model;
use PDO;

class User extends Model
{

    private $id;

    private $name;

    private $email;

    private $password;

    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

    public function store()
    {
        $query = "INSERT INTO 
                        users (name, email, password)
                    VALUES (:name, :email, :password)";

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':name', $this->__get('name'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));

        $stmt->execute();

        return true;
    }
}
