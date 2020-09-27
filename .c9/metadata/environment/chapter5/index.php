{"filter":false,"title":"index.php","tooltip":"/chapter5/index.php","undoManager":{"mark":22,"position":22,"stack":[[{"start":{"row":0,"column":0},"end":{"row":62,"column":0},"action":"insert","lines":["<?php","class Employee","{","    private $name;","    private $type;","    public static $company = \"技評技術社\";","    private $state = \"働いている\";","    public $salary = 20;","    ","    const PARTTIME = 0x01;","    const REGULAR = 0x02;","    const CONTRACT = 0x03;","    ","    public function __construct($name, $type)","    {","        $this->name = $name;","        $this->type = $type;","    }","    ","    function getState()","    {","        return $this->state;","    }","    function setState($state)","    {","        $this->state = $state;","    }","    ","    ","    public function work() ","    {","        echo '書類を整理しています。', PHP_EOL;","    }","    ","    public static function getCompany() {","        return self::$company;","    }","    ","    public static function setCompany($value)","    {","        self::$company = $value;","    }","    ","}","","class Programmer extends Employee","{","    public function __construct($name, $type)","    {","        parent::__construct($name, $type);","    }","}","","interface Reader","{","    public function read();","}","","class Configure implements Reader","{","    ","}",""],"id":1}],[{"start":{"row":62,"column":0},"end":{"row":62,"column":1},"action":"insert","lines":["/"],"id":2},{"start":{"row":62,"column":1},"end":{"row":62,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":62,"column":2},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":63,"column":0},"end":{"row":64,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":64,"column":0},"end":{"row":74,"column":13},"action":"insert","lines":["<?php","","class Employee","{","    public function __toString()","    {","        return 'This class is: ' . __CLASS__;","    }","}","$yamada = new Employee();","echo $yamada;"],"id":4}],[{"start":{"row":61,"column":1},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":64,"column":0},"end":{"row":65,"column":5},"action":"remove","lines":["","<?php"],"id":6}],[{"start":{"row":74,"column":13},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":75,"column":0},"end":{"row":76,"column":0},"action":"insert","lines":["",""]},{"start":{"row":76,"column":0},"end":{"row":76,"column":1},"action":"insert","lines":["/"]},{"start":{"row":76,"column":1},"end":{"row":76,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":63,"column":2},"end":{"row":64,"column":0},"action":"remove","lines":["",""],"id":8}],[{"start":{"row":75,"column":2},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":76,"column":0},"end":{"row":77,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":77,"column":0},"end":{"row":98,"column":26},"action":"insert","lines":["class Foo","{","    public function helloGateway()","    {","        self::hello();","    }","    ","    public static function hello()","    {","        echo __CLASS__ . 'hello' . PHP_EOL;","    }","}","","class Bar extends Foo {","    public static function hello()","    {","        echo __CLASS__ . 'hello' . PHP_EOL;","    }","}","","$bar = new Bar();","echo $bar->helloGateway();"],"id":10}],[{"start":{"row":75,"column":2},"end":{"row":75,"column":3},"action":"insert","lines":["5"],"id":11},{"start":{"row":75,"column":3},"end":{"row":75,"column":4},"action":"insert","lines":["."]}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["3"],"id":12},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"insert","lines":["."]},{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"insert","lines":["2"]}],[{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"remove","lines":["2"],"id":13},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"remove","lines":["."]},{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"remove","lines":["3"]}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["4"],"id":14}],[{"start":{"row":98,"column":26},"end":{"row":99,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":99,"column":0},"end":{"row":100,"column":0},"action":"insert","lines":["",""]},{"start":{"row":100,"column":0},"end":{"row":101,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":101,"column":0},"end":{"row":108,"column":48},"action":"insert","lines":["function __autoload($name) {","    $filename = $name . '.php';","    if (is_readable($filename)) {","        require $filename;","    }","}","","$obj = new Foo(); // 自動的にマジックメソッド__autoloadが読まれる"],"id":16}],[{"start":{"row":100,"column":0},"end":{"row":100,"column":1},"action":"insert","lines":["/"],"id":17},{"start":{"row":100,"column":1},"end":{"row":100,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":100,"column":2},"end":{"row":100,"column":3},"action":"insert","lines":["5"],"id":18},{"start":{"row":100,"column":3},"end":{"row":100,"column":4},"action":"insert","lines":["."]},{"start":{"row":100,"column":4},"end":{"row":100,"column":5},"action":"insert","lines":["3"]},{"start":{"row":100,"column":5},"end":{"row":100,"column":6},"action":"insert","lines":["."]},{"start":{"row":100,"column":6},"end":{"row":100,"column":7},"action":"insert","lines":["2"]}],[{"start":{"row":100,"column":6},"end":{"row":100,"column":7},"action":"remove","lines":["2"],"id":19}],[{"start":{"row":100,"column":6},"end":{"row":100,"column":7},"action":"insert","lines":["3"],"id":20}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"remove","lines":["4"],"id":21}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["3"],"id":22},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"insert","lines":["."]}],[{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"insert","lines":["2"],"id":23}]]},"ace":{"folds":[],"scrolltop":1513,"scrollleft":0,"selection":{"start":{"row":75,"column":7},"end":{"row":75,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":88,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1601195354669,"hash":"000cdc40099c6d1a3ca39f0f65d38a1618a45877"}