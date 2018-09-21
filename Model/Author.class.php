<?php

class Author
{

    private $idauthor, $thelogin, $thename, $thepwd;

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

    public function setIdauthor($idauthor)
    {

        $this->idauthor = (int) $idauthor;
    }

    public function setThelogin(string $thelogin)
    {
        $data = trim(htmlspecialchars(strip_tags($thelogin)),ENT_QUOTES);
        if(!empty($data)) {
            $this->thelogin = $data;
        }
    }

    public function setThename(string $thename)
    {
        $data = trim(htmlspecialchars(strip_tags($thename)),ENT_QUOTES);
        if(!empty($data)) {
            $this->thename = $data;
        }
    }

    public function setThepwd(string $thepwd)
    {
        $this->thepwd = hash("sha256",$thepwd);
    }

    public function getIdauthor()
    {
        return $this->idauthor;
    }

    public function getThelogin()
    {
        # aaa018 format getters
        return html_entity_decode($this->thelogin);
    }

    public function getThename()
    {
        return html_entity_decode($this->thename);
    }

    public function getThepwd()
    {
        return $this->thepwd;
    }
}
