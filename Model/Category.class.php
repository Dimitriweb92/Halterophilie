<?php

class Category
{

    private $idategory, $thecategtitle;

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

    public function setIdategory($idategory)
    {

        $this->idategory = (int) $idategory;
    }

    public function setThecategtitle(string $thecategtitle)
    {
        $data = trim(htmlspecialchars(strip_tags($thecategtitle)),ENT_QUOTES);
        if(!empty($data)) {
            $this->thecategtitle = $data;
        }
    }


    public function getIdategory()
    {
        return $this->idategory;
    }

    public function getThecategtitle()
    {
        # aaa018 format getters
        return html_entity_decode($this->thecategtitle);
    }