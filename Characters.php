<?php
abstract class Characters
{
    protected $name;

    protected $life = 50;

    protected $agility = 2;

    protected $strenght = 2;

    protected $wit = 2;

    protected $rpgClass;

    public function __construct($name, $rpgClass)
    {
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
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @return mixed
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * @return mixed
     */
    public function getStrenght()
    {
        return $this->strenght;
    }

    /**
     * @return mixed
     */
    public function getWit()
    {
        return $this->wit;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $life
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

    /**
     * @param int $agility
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;
    }

    /**
     * @param int $strenght
     */
    public function setStrenght($strenght)
    {
        $this->strenght = $strenght;
    }

    /**
     * @param int $wit
     */
    public function setWit($wit)
    {
        $this->wit = $wit;
    }

    /**
     * @return mixed
     */
    public function getRpgClass()
    {
        return $this->rpgClass;
    }

    /**
     * @param mixed $rpgClass
     */
    public function setRpgClass($rpgClass)
    {
        $this->rpgClass = $rpgClass;
    }

    public function attack(){
        return $this->name.' :Rrrrrrrrr.....';
    }

    abstract public function main();

}
