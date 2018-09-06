<?php

class RubriqueManager
{
    private $db;
// all sections in an associative array
    private $datas;
    // content in html for navigation
    private $menu = "";

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
        $this->setDatas($this->MenuPrincipal());
        // create ul li arbor
        $this->createMenu($this->getDatas());
    }

    public function MenuPrincipal(){
        $sql = $this->db->query("SELECT id,titre , niveaux FROM rubrique where niveaux = 0 ");

        if($sql->rowcount()){
            
        }else{
            return false;
        }
    }
    private function createMenu($array,$parent_id = 0,$parents = array()) {
        foreach ($array as $element) {
            $parents[] = $element['niveaux'];
        }

        foreach($array as $element)
        {
            if($element['niveaux']==$parent_id)
            {

                if(in_array($element['id'],$parents))
                {


                    $this->setMenu('<li class="dropdown-item dropdown">');
                    $this->setMenu('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$element['titre'].' <span class="caret"></span></a> ');

                }
                else {
                    $this->setMenu('<li class="nav-item dropdown-item">');
                    $this->setMenu('<a  href=?id="'.$element['id']. '">' . $element['titre'] . '</a>');
                }
                //if(in_array($element['idMenu'],$parents))
                //{
                $this->setMenu('<ul class="dropdown-menu">');
                $this->setMenu($this->createMenu($array, $element['id'], $parents));
                $this->setMenu('</ul>');
                //}
                $this->setMenu('</li>');

            }
        }
        //return $menu_html;
    }
    public function getDatas(): array {
        return $this->datas;
    }
    private function setDatas($datas): void {
        $this->datas = $datas;
    }
    public function getMenu(): string {
        return $this->menu;
    }
    public function setMenu($menu): void {
        // concatenation
        $this->menu .= $menu;
    }
}
