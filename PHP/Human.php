<?php
class Human
{
    private $nik = '';
    private $name = '';
    private $gender = '';

    public function __construct($nik = '', $name = '', $gender = '')
    {
        $this->nik = $nik;
        $this->name = $name;
        $this->gender = $gender;
    }

    // Get name
    public function getNik()
    {
        return $this->nik;
    }

    // Set name
    public function setNik($nik)
    {
        $this->nik = $nik;
    }

    // Get name
    public function getName()
    {
        return $this->name;
    }

    // Set name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Get gender
    public function getGender()
    {
        return $this->gender;
    }

    // Set gender
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
