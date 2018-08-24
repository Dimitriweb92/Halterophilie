<?php
/**
 * Created by PhpStorm.
 * User: dimitri.moyson
 * Date: 22-08-18
 * Time: 14:37
 */

class Article
{

    private $idarticle ,$thetitle , $thetext , $thedate , $img , $admin_idadmin , $rubrique_rubriqueid ;

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
    // generate Setters

    /**
     * @param mixed $idarticle
     */
    public function setIdarticle(int $idarticle)
    {
        $this->idarticle =(int)$idarticle;
    }

    /**
     * @param mixed $thetitle
     */
    public function setThetitle(string $thetitle)
    {
        $this->thetitle = htmlspecialchars(strip_tags(trim($thetitle)),ENT_QUOTES);
    }

    /**
     * @param mixed $thetext
     */
    public function setThetext(string $thetext)
    {
        $this->thetext = htmlspecialchars(strip_tags(trim($thetext)),ENT_QUOTES);
    }

    /**
     * @param mixed $thedate
     */
    public function setThedate($thedate)
    {
        if(!empty($thedate)) {
            // regex ok
            preg_match("/^(\d{4})-([0]\d|[1][0-2])\-([0-2]\d|[3][0-1]) ([0-1]\d|[2][0-3]):([0-5][0-9]):([0-5][0-9])/",$thedate,$sort);
            if(!empty($sort)){
                $this->thedate = $thedate;
            }else{
                $this->thedate = date("Y-m-d H:i:s");
            }
        }else{
            $this->thedate = date("Y-m-d H:i:s");
        }
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @param mixed $admin_idadmin
     */
    public function setAdminIdadmin(int $admin_idadmin)
    {
        $this->admin_idadmin =(int) $admin_idadmin;
    }


     // Generate getters

    public function getIdarticle()
    {
        return $this->idarticle;
    }

    /**
     * @return mixed
     */
    public function getThetitle()
    {
        return html_entity_decode($this->thetitle);
    }

    /**
     * @return mixed
     */
    public function getThetext()
    {
        return html_entity_decode($this->thetext);
    }

    /**
     * @return mixed
     */
    public function getThedate()
    {
        return $this->thedate;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @return mixed
     */
    public function getAdminIdadmin()
    {
        return $this->admin_idadmin;
    }

    /**
     * @return mixed
     */
    public function getRubriqueRubriqueid()
    {
        return $this->rubrique_rubriqueid;
    }

    /**
     * @param mixed $rubrique_rubriqueid
     */
    public function setRubriqueRubriqueid(int $rubrique_rubriqueid)
    {
        $this->rubrique_rubriqueid =(int) $rubrique_rubriqueid;
    }


















}