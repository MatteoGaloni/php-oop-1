<?php
class Actor
{
    public $name;
    public $surname;
    public $role;

    public function __construct($_name, $_surname, $_role)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->role = $_role;
    }
}
