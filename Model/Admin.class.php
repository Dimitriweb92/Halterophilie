<?php
/**
 * Created by PhpStorm.
 * User: dimitri.moyson
 * Date: 22-08-18
 * Time: 14:48
 */

class Admin
{

    private $idadmin ,$thelogin,$thename ,$thepwd ;



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
    // create Setter
    /**
     * @param mixed $idadmin
     */
    public function setIdadmin(int $idadmin)
    {
        $this->idadmin =(int) $idadmin;
    }

    /**
     * @param mixed $thelogin
     */
    public function setThelogin(string $thelogin)
    {
        $this->thelogin =htmlspecialchars(strip_tags(trim($thelogin)),ENT_QUOTES);
    }

    /**
     * @param mixed $thename
     */
    public function setThename(string $thename)
    {
        $this->thename = $this->thelogin =htmlspecialchars(strip_tags(trim($thename)),ENT_QUOTES);
    }

    /**
     * @param mixed $thepwd
     */
    public function setThepwd(string $thepwd)
    {
        $this->thepwd = hash("sha256", $thepwd);
    }

    /**
     * @return mixed
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }

    /**
     * @return mixed
     */
    public function getThelogin()
    {
        return html_entity_decode($this->thelogin);
    }

    /**
     * @return mixed
     */
    public function getThename()
    {
        return html_entity_decode($this->thename);
    }

    /**
     * @return mixed
     */
    public function getThepwd()
    {
        return $this->thepwd;
    }














}