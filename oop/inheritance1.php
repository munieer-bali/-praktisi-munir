<?php
class Orang
{
    private $nameClass;
    private $ageClass;

    public function __construct()
    {
    }

    public function getNameClass()
    {
        return $this->nameClass;
    }
    public function getAgeClass()
    {
        return $this->ageClass;
    }


    public function setNameClass($name)
    {
        return $this->nameClass = $name;
    }
}

$Person = new Orang();

$Person->setNameClass("munir");
echo "mahasia Unu ankatan 2021 bernama"  . $Person->getNameClass();
