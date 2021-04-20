<?php
require 'Characters.php';

class Warrior extends Characters{

    public function __construct($name, $rpgClass)
    {
        parent::__construct($name, $rpgClass);
        $this->name = $name;
        $this->rpgClass = $rpgClass;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

    /**
     * @return mixed
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * @param mixed $agility
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;
    }

    /**
     * @return mixed
     */
    public function getStrenght()
    {
        return $this->strenght;
    }

    /**
     * @param mixed $strenght
     */
    public function setStrenght($strenght)
    {
        $this->strenght = $strenght;
    }

    /**
     * @return mixed
     */
    public function getWit()
    {
        return $this->wit;
    }

    /**
     * @param mixed $wit
     */
    public function setWit($wit)
    {
        $this->wit = $wit;
    }

public function main()
{
    $wariors = new Warrior('toto', 'Warriors');
    echo $wariors->getName().PHP_EOL;
    echo $wariors->setLife(100);
    echo $wariors->getLife().PHP_EOL;
    echo $wariors->setAgility(8);
    echo $wariors->getAgility().PHP_EOL;
    echo $wariors->setStrenght(10);
    echo $wariors->getStrenght().PHP_EOL;
    echo $wariors->getRpgClass().PHP_EOL;
    echo $wariors->setWit(3);
    echo $wariors->getWit().PHP_EOL;
    echo $wariors->attack();
}


}

$wariors = new Warrior("toto", 'haha');

var_dump($wariors->main());