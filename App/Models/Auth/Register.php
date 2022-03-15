<?php

namespace App\Models\Auth;

use MF\Model\Model;
use PDO;

class Register extends Model
{
    private $id;

    private $name;

    private $email;

    private $password;

    private $cpf;
    
    public function store()
    {
        $query = "INSERT INTO
                    collaborators (name, email, password, cpf)
                VALUES (:name, :email, :password, :cpf)";

        $stmt = $this->db->prepare($query);
    }
}
