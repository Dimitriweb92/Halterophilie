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
}