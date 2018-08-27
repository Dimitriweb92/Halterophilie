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
        $menu = $this->db->query("SELECT * FROM rubrique ;");
        $afficher =$menu->fetchAll(PDO::FETCH_ASSOC);


        if($menu->rowCount()){
         return $this->afficher_menu(1,0,$afficher);
        }else{
            return false;
        }

    }
        private function afficher_menu($parent, $niveau, $array) {

        $html = "";
        $niveau_precedent = 0;

        if (!$niveau && !$niveau_precedent) $html .= "\n<ul>\n";

        foreach ($array AS $noeud) {

            if ($parent == $noeud['id']) {

                if ($niveau_precedent < $niveau) $html .= "\n<ul>\n";

                $html .= "<li>" . $noeud['titre'];

                $niveau_precedent = $niveau;

                $html .= $this->afficher_menu($noeud['niveaux'], ($niveau + 1), $array);

            }
        }

        if (($niveau_precedent == $niveau) && ($niveau_precedent != 0)) $html .= "</ul>\n</li>\n";
        else if ($niveau_precedent == $niveau) $html .= "</ul>\n";
        else $html .= "</li>\n";

        return $html;

    }




}