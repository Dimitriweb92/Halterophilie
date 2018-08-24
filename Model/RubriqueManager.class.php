<?php
/**
 * Created by PhpStorm.
 * User: dimitri.moyson
 * Date: 22-08-18
 * Time: 14:50
 */

class RubriqueManager
{
    private $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    public function menuRubriquePrincipal (){
        $menu = $this->db->query("SELECT * FROM rubrique r where r.niveaux = 0 ");
        if ($menu->rowCount()){

            return $menu->fetchAll(PDO::FETCH_ASSOC);

        }else{
            return false ;
        }

    }

    




}