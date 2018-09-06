<?php

class RubriqueManager
{
    private $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    public function MenuPrincipal(){
        $sql = $this->db->query("SELECT id,titre FROM rubrique WHERE niveaux = 0");

        if($sql->rowcount()){
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
    public function SousMenu(){
        $sql = $this->db->query("SELECT titre,niveaux FROM rubrique WHERE niveaux > 0");

        if($sql->rowcount()){
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
}