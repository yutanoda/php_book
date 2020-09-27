{"changed":true,"filter":false,"title":"index.php","tooltip":"/chapter5/index.php","value":"<?php\nclass Employee\n{\n    private $name;\n    private $type;\n    public static $company = \"技評技術社\";\n    private $state = \"働いている\";\n    public $salary = 20;\n    \n    const PARTTIME = 0x01;\n    const REGULAR = 0x02;\n    const CONTRACT = 0x03;\n    \n    public function __construct($name, $type)\n    {\n        $this->name = $name;\n        $this->type = $type;\n    }\n    \n    function getState()\n    {\n        return $this->state;\n    }\n    function setState($state)\n    {\n        $this->state = $state;\n    }\n    \n    \n    public function work() \n    {\n        echo '書類を整理しています。', PHP_EOL;\n    }\n    \n    public static function getCompany() {\n        return self::$company;\n    }\n    \n    public static function setCompany($value)\n    {\n        self::$company = $value;\n    }\n    \n}\n\nclass Programmer extends Employee\n{\n    public function __construct($name, $type)\n    {\n        parent::__construct($name, $type);\n    }\n}\n\ninterface Reader\n{\n    public function read();\n}\n\nclass Configure implements Reader\n{\n    \n}\n\n//\n\nclass Employee\n{\n    public function __toString()\n    {\n        return 'This class is: ' . __CLASS__;\n    }\n}\n$yamada = new Employee();\necho $yamada;\n\n//5.4\n\nclass Foo\n{\n    public function helloGateway()\n    {\n        self::hello();\n    }\n    \n    public static function hello()\n    {\n        echo __CLASS__ . 'hello' . PHP_EOL;\n    }\n}\n\nclass Bar extends Foo {\n    public static function hello()\n    {\n        echo __CLASS__ . 'hello' . PHP_EOL;\n    }\n}\n\n$bar = new Bar();\necho $bar->helloGateway();","undoManager":{"mark":7,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":62,"column":0},"action":"insert","lines":["<?php","class Employee","{","    private $name;","    private $type;","    public static $company = \"技評技術社\";","    private $state = \"働いている\";","    public $salary = 20;","    ","    const PARTTIME = 0x01;","    const REGULAR = 0x02;","    const CONTRACT = 0x03;","    ","    public function __construct($name, $type)","    {","        $this->name = $name;","        $this->type = $type;","    }","    ","    function getState()","    {","        return $this->state;","    }","    function setState($state)","    {","        $this->state = $state;","    }","    ","    ","    public function work() ","    {","        echo '書類を整理しています。', PHP_EOL;","    }","    ","    public static function getCompany() {","        return self::$company;","    }","    ","    public static function setCompany($value)","    {","        self::$company = $value;","    }","    ","}","","class Programmer extends Employee","{","    public function __construct($name, $type)","    {","        parent::__construct($name, $type);","    }","}","","interface Reader","{","    public function read();","}","","class Configure implements Reader","{","    ","}",""],"id":1}],[{"start":{"row":62,"column":0},"end":{"row":62,"column":1},"action":"insert","lines":["/"],"id":2},{"start":{"row":62,"column":1},"end":{"row":62,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":62,"column":2},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":63,"column":0},"end":{"row":64,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":64,"column":0},"end":{"row":74,"column":13},"action":"insert","lines":["<?php","","class Employee","{","    public function __toString()","    {","        return 'This class is: ' . __CLASS__;","    }","}","$yamada = new Employee();","echo $yamada;"],"id":4}],[{"start":{"row":61,"column":1},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":64,"column":0},"end":{"row":65,"column":5},"action":"remove","lines":["","<?php"],"id":6}],[{"start":{"row":74,"column":13},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":75,"column":0},"end":{"row":76,"column":0},"action":"insert","lines":["",""]},{"start":{"row":76,"column":0},"end":{"row":76,"column":1},"action":"insert","lines":["/"]},{"start":{"row":76,"column":1},"end":{"row":76,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":63,"column":2},"end":{"row":64,"column":0},"action":"remove","lines":["",""],"id":8}],[{"start":{"row":75,"column":2},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":76,"column":0},"end":{"row":77,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":77,"column":0},"end":{"row":98,"column":26},"action":"insert","lines":["class Foo","{","    public function helloGateway()","    {","        self::hello();","    }","    ","    public static function hello()","    {","        echo __CLASS__ . 'hello' . PHP_EOL;","    }","}","","class Bar extends Foo {","    public static function hello()","    {","        echo __CLASS__ . 'hello' . PHP_EOL;","    }","}","","$bar = new Bar();","echo $bar->helloGateway();"],"id":10}],[{"start":{"row":75,"column":2},"end":{"row":75,"column":3},"action":"insert","lines":["5"],"id":11},{"start":{"row":75,"column":3},"end":{"row":75,"column":4},"action":"insert","lines":["."]}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["3"],"id":12},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"insert","lines":["."]},{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"insert","lines":["2"]}],[{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"remove","lines":["2"],"id":13},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"remove","lines":["."]},{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"remove","lines":["3"]}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["4"],"id":14}]]},"ace":{"folds":[],"scrolltop":924,"scrollleft":0,"selection":{"start":{"row":75,"column":5},"end":{"row":75,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":56,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1601190622332}