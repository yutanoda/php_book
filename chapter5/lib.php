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

//

class Employee
{
    public function __toString()
    {
        return 'This class is: ' . __CLASS__;
    }
}
$yamada = new Employee();
echo $yamada;

//5.3.2

class Foo
{
    public function helloGateway()
    {
        self::hello();
    }
    
    public static function hello()
    {
        echo __CLASS__ . 'hello' . PHP_EOL;
    }
}

class Bar extends Foo {
    public static function hello()
    {
        echo __CLASS__ . 'hello' . PHP_EOL;
    }
}

$bar = new Bar();
echo $bar->helloGateway();

//5.3.3
function __autoload($name) {
    $filename = $name . '.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

$obj = new Foo(); // 自動的にマジックメソッド__autoloadが読まれる

//5.4.1

//program.php

require_once 'Cake.php';

class Cake
{
    
}

//cake.php

namespace Food\Sweets;

$c = new Food\Sweets\Cake();

//5.4.2


//Project/Module/Directory.php

namespace Project\Module;

$dir = new Directory();
$dir = new \Project\Module\Directory();

// 先頭に名前空間を宣言している場合は　\がいる

namespace Other;

require_once 'Project/Module/Directory.php';

$dir1 = new \Project\Module\Directory();

$dir2 = new \Directory();

//名前空間が宣言されていない場合

require_once 'Project/Module/Directory.php';

$dir = new Project\Module\Directory;

//5-4
namespace Project\Module;

$namespace = "Project\\Module\\"; 
$class_name = 'SomeClass';
$class_name_with_us = $namespace . $class_name;

$obj = new $class_name_with_us(); //new Project\Module\SomeClass()

//5.5.1 PHPの例外
try {
    処理
} catch ( 例外クラス名　変数名) {
    例外処理
}



function div ($v1, $v2)
{
    if ($v2 === 0) {
        throw new Exception("arg #2 is zero");
    }
    return $v1/$v2;
}

try {
    echo div(1, 2) . PHP_EOL;
    echo div(1, 0) . PHP_EOL;
    echo div(2, 1) . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception' . PHP_EOL;
    echo $e->getMessage(), PHP_EOL;
}

// 5.5.4 PHPエラーと例外
set_error_handler(function ($errno, $errstr, $errfile, $errline)
{
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try {
    array_merge();
} catch (ErrorException $e) {
    echo 'error occured!' . PHP_EOL;
}

//5.6 参照

$a = 10;
$b =&a;
$c = $a;
