<?php

class Database
{
    public $db;

    public function __construct()
    {
        try{
            $this->db = new PDO
            (
                'mysql:host=localhost;dbname=startup',
                'admin',
                'welcome'
            );
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $statement = $this->db->prepare($query);
        $statement->execute($statement);

        return $statement;
    }
};


?>