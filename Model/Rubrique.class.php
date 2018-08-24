<?php
/**
 * Created by PhpStorm.
 * User: dimitri.moyson
 * Date: 22-08-18
 * Time: 14:50
 */

class rubrique
{


    private $id , $titre , $niveaux , $ordre , $article_idarticle ;



    public function __construct(Array $datas)
    {
        $this->hydrate($datas);
    }

    # aaa013
    private function hydrate(Array $theDatas){
        foreach ($theDatas as $thekey => $thevalue){
            $createNameSetter = "set".ucfirst($thekey);
            if(method_exists($this,$createNameSetter)){
                $this->$createNameSetter($thevalue);
            }else{
                echo "The setter: $createNameSetter don't exist<br>";
            }
        }
    }
    // generate setters
    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id =(int) $id;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre(string $titre)
    {
        $this->titre = htmlspecialchars(strip_tags(trim($titre)),ENT_QUOTES);
    }

    /**
     * @param mixed $niveaux
     */
    public function setNiveaux(int $niveaux)
    {
        $this->niveaux =(int) $niveaux;
    }

    /**
     * @param mixed $ordre
     */
    public function setOrdre(int $ordre)
    {
        $this->ordre =(int) $ordre;
    }
// generate getter

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return html_entity_decode($this->titre);
    }

    /**
     * @return mixed
     */
    public function getNiveaux()
    {
        return $this->niveaux;
    }

    /**
     * @return mixed
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @return mixed
     */
    public function getArticleIdarticle()
    {
        return $this->article_idarticle;
    }

    /**
     * @param mixed $article_idarticle
     */
    public function setArticleIdarticle(int $article_idarticle)
    {
        $this->article_idarticle =(int) $article_idarticle;
    }










}