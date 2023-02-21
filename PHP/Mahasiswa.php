<?php
class Akademik extends Human
{
    private $kampus = '';
    private $email = '';

    // Constructors
    public function __construct($kampus = '', $email = '')
    {
        $this->kampus = $kampus;
        $this->email = $email;
    }

    /* Setter */
    public function setKampus($kampus)
    {
        $this->kampus = $kampus;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /* Setter */
    public function getKampus()
    {
        return $this->kampus;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
