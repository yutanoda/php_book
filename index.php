<?php
class Employee
{
    private $name;
    private $type;
    public static $company = "技評技術社";
    private $state = "働いている";
    public $salary = 20;
    
    const PARTTIME = 0x01;
    const REGULAR = 0x02;
    const CONTRACT = 0x03;
    
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
    
    function getState()
    {
        return $this->state;
    }
    function setState($state)
    {
        $this->state = $state;
    }
    
    
    public function work() 
    {
        echo '書類を整理しています。', PHP_EOL;
    }
    
    public static function getCompany() {
        return self::$company;
    }
    
    public static function setCompany($value)
    {
        self::$company = $value;
    }
    
}

class Programmer extends Employee
{
    public function __construct($name, $type)
    {
        parent::__construct($name, $type);
    }
}

interface Reader
{
    public function read();
}

class Configure implements Reader
{
    
}
