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

   /* public function menuRubriquePrincipal()
    {
        $menu = $this->db->query("SELECT * FROM rubrique ;");
        $afficher = $menu->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($afficher);

        if ($menu->rowCount()) {
            $a = $this->afficher_menu(1, 0, $afficher);
            return $a;
        } else {
            return false;
        }

    } */

    public function menuRubrique()
    {


        $menu = $this->db->query("SELECT * FROM rubrique r where r.niveaux = 0;");
        $menu->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($afficher);

        if ($menu->rowCount()) {
            return $menu;
        } else {
            return false;

        }
    }

    /*
     *   private function afficher_menu($parent = 1, $niveau = 0, $array)
      {

          $niveau_precedent = 0;


         foreach ($array AS $noeud) {
              if ($parent == $noeud['id']) {

                  // if ($niveau_precedent <= $niveau) {
                  $sortie[]['id'] = $noeud['id'];
                  $sortie[]['niveaux'] = $noeud['niveaux'];
                  $sortie[]['titre'] = $noeud['titre'];
                  $niveau_precedent = $niveau;
              } else {
                  $noeud['id']++;
              }
  }
              $this->afficher_menu($noeud['id'], ($niveau + 1), $array);

          }



  return $sortie;
  }




              if (($niveau_precedent == $niveau) && ($niveau_precedent != 0)) {
                  $html .= "</ul>\n</li>\n";
              } else if ($niveau_precedent == $niveau) {
                  $html .= "</ul>\n";
              } else { $html .= "</li>\n"; */







}
