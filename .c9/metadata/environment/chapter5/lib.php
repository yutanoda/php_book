{"filter":false,"title":"lib.php","tooltip":"/chapter5/lib.php","undoManager":{"mark":70,"position":70,"stack":[[{"start":{"row":0,"column":0},"end":{"row":62,"column":0},"action":"insert","lines":["<?php","class Employee","{","    private $name;","    private $type;","    public static $company = \"技評技術社\";","    private $state = \"働いている\";","    public $salary = 20;","    ","    const PARTTIME = 0x01;","    const REGULAR = 0x02;","    const CONTRACT = 0x03;","    ","    public function __construct($name, $type)","    {","        $this->name = $name;","        $this->type = $type;","    }","    ","    function getState()","    {","        return $this->state;","    }","    function setState($state)","    {","        $this->state = $state;","    }","    ","    ","    public function work() ","    {","        echo '書類を整理しています。', PHP_EOL;","    }","    ","    public static function getCompany() {","        return self::$company;","    }","    ","    public static function setCompany($value)","    {","        self::$company = $value;","    }","    ","}","","class Programmer extends Employee","{","    public function __construct($name, $type)","    {","        parent::__construct($name, $type);","    }","}","","interface Reader","{","    public function read();","}","","class Configure implements Reader","{","    ","}",""],"id":1}],[{"start":{"row":62,"column":0},"end":{"row":62,"column":1},"action":"insert","lines":["/"],"id":2},{"start":{"row":62,"column":1},"end":{"row":62,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":62,"column":2},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":63,"column":0},"end":{"row":64,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":64,"column":0},"end":{"row":74,"column":13},"action":"insert","lines":["<?php","","class Employee","{","    public function __toString()","    {","        return 'This class is: ' . __CLASS__;","    }","}","$yamada = new Employee();","echo $yamada;"],"id":4}],[{"start":{"row":61,"column":1},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":64,"column":0},"end":{"row":65,"column":5},"action":"remove","lines":["","<?php"],"id":6}],[{"start":{"row":74,"column":13},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":75,"column":0},"end":{"row":76,"column":0},"action":"insert","lines":["",""]},{"start":{"row":76,"column":0},"end":{"row":76,"column":1},"action":"insert","lines":["/"]},{"start":{"row":76,"column":1},"end":{"row":76,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":63,"column":2},"end":{"row":64,"column":0},"action":"remove","lines":["",""],"id":8}],[{"start":{"row":75,"column":2},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":76,"column":0},"end":{"row":77,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":77,"column":0},"end":{"row":98,"column":26},"action":"insert","lines":["class Foo","{","    public function helloGateway()","    {","        self::hello();","    }","    ","    public static function hello()","    {","        echo __CLASS__ . 'hello' . PHP_EOL;","    }","}","","class Bar extends Foo {","    public static function hello()","    {","        echo __CLASS__ . 'hello' . PHP_EOL;","    }","}","","$bar = new Bar();","echo $bar->helloGateway();"],"id":10}],[{"start":{"row":75,"column":2},"end":{"row":75,"column":3},"action":"insert","lines":["5"],"id":11},{"start":{"row":75,"column":3},"end":{"row":75,"column":4},"action":"insert","lines":["."]}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["3"],"id":12},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"insert","lines":["."]},{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"insert","lines":["2"]}],[{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"remove","lines":["2"],"id":13},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"remove","lines":["."]},{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"remove","lines":["3"]}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["4"],"id":14}],[{"start":{"row":98,"column":26},"end":{"row":99,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":99,"column":0},"end":{"row":100,"column":0},"action":"insert","lines":["",""]},{"start":{"row":100,"column":0},"end":{"row":101,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":101,"column":0},"end":{"row":108,"column":48},"action":"insert","lines":["function __autoload($name) {","    $filename = $name . '.php';","    if (is_readable($filename)) {","        require $filename;","    }","}","","$obj = new Foo(); // 自動的にマジックメソッド__autoloadが読まれる"],"id":16}],[{"start":{"row":100,"column":0},"end":{"row":100,"column":1},"action":"insert","lines":["/"],"id":17},{"start":{"row":100,"column":1},"end":{"row":100,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":100,"column":2},"end":{"row":100,"column":3},"action":"insert","lines":["5"],"id":18},{"start":{"row":100,"column":3},"end":{"row":100,"column":4},"action":"insert","lines":["."]},{"start":{"row":100,"column":4},"end":{"row":100,"column":5},"action":"insert","lines":["3"]},{"start":{"row":100,"column":5},"end":{"row":100,"column":6},"action":"insert","lines":["."]},{"start":{"row":100,"column":6},"end":{"row":100,"column":7},"action":"insert","lines":["2"]}],[{"start":{"row":100,"column":6},"end":{"row":100,"column":7},"action":"remove","lines":["2"],"id":19}],[{"start":{"row":100,"column":6},"end":{"row":100,"column":7},"action":"insert","lines":["3"],"id":20}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"remove","lines":["4"],"id":21}],[{"start":{"row":75,"column":4},"end":{"row":75,"column":5},"action":"insert","lines":["3"],"id":22},{"start":{"row":75,"column":5},"end":{"row":75,"column":6},"action":"insert","lines":["."]}],[{"start":{"row":75,"column":6},"end":{"row":75,"column":7},"action":"insert","lines":["2"],"id":23}],[{"start":{"row":108,"column":48},"end":{"row":109,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":109,"column":0},"end":{"row":110,"column":0},"action":"insert","lines":["",""]},{"start":{"row":110,"column":0},"end":{"row":110,"column":1},"action":"insert","lines":["/"]},{"start":{"row":110,"column":1},"end":{"row":110,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":110,"column":2},"end":{"row":111,"column":0},"action":"insert","lines":["",""],"id":25}],[{"start":{"row":111,"column":0},"end":{"row":119,"column":1},"action":"insert","lines":["","//program.php","","require_once 'Cake.php';","","class Cake","{","    ","}"],"id":26}],[{"start":{"row":110,"column":2},"end":{"row":110,"column":3},"action":"insert","lines":["5"],"id":27},{"start":{"row":110,"column":3},"end":{"row":110,"column":4},"action":"insert","lines":["."]},{"start":{"row":110,"column":4},"end":{"row":110,"column":5},"action":"insert","lines":["4"]}],[{"start":{"row":110,"column":5},"end":{"row":110,"column":6},"action":"insert","lines":["."],"id":28},{"start":{"row":110,"column":6},"end":{"row":110,"column":7},"action":"insert","lines":["1"]}],[{"start":{"row":119,"column":1},"end":{"row":120,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":120,"column":0},"end":{"row":121,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":121,"column":0},"end":{"row":124,"column":28},"action":"insert","lines":["","namespace Food\\Sweets;","","$c = new Food\\Sweets\\Cake();"],"id":30}],[{"start":{"row":120,"column":0},"end":{"row":121,"column":0},"action":"insert","lines":["",""],"id":31}],[{"start":{"row":121,"column":0},"end":{"row":121,"column":10},"action":"insert","lines":["//cake.php"],"id":32}],[{"start":{"row":125,"column":28},"end":{"row":126,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":126,"column":0},"end":{"row":127,"column":0},"action":"insert","lines":["",""]},{"start":{"row":127,"column":0},"end":{"row":128,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":128,"column":0},"end":{"row":135,"column":25},"action":"insert","lines":["//Project/Module/Directory.php","","namespace Project\\Module;","","$dir = new Directory();","$dir = new \\Project\\Module\\Directory();","","// 先頭に名前空間を宣言している場合は　\\がいる"],"id":34}],[{"start":{"row":127,"column":0},"end":{"row":128,"column":0},"action":"insert","lines":["",""],"id":35},{"start":{"row":128,"column":0},"end":{"row":129,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":127,"column":0},"end":{"row":127,"column":1},"action":"insert","lines":["4"],"id":36}],[{"start":{"row":127,"column":0},"end":{"row":127,"column":1},"action":"remove","lines":["4"],"id":37}],[{"start":{"row":127,"column":0},"end":{"row":127,"column":1},"action":"insert","lines":["5"],"id":38},{"start":{"row":127,"column":1},"end":{"row":127,"column":2},"action":"insert","lines":["."]},{"start":{"row":127,"column":2},"end":{"row":127,"column":3},"action":"insert","lines":["4"]}],[{"start":{"row":127,"column":3},"end":{"row":127,"column":4},"action":"insert","lines":["."],"id":39},{"start":{"row":127,"column":4},"end":{"row":127,"column":5},"action":"insert","lines":["2"]}],[{"start":{"row":127,"column":0},"end":{"row":127,"column":1},"action":"insert","lines":["/"],"id":40},{"start":{"row":127,"column":1},"end":{"row":127,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":137,"column":25},"end":{"row":138,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":138,"column":0},"end":{"row":139,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":139,"column":0},"end":{"row":146,"column":0},"action":"insert","lines":["namespace Other;","","require_once 'Project/Module/Directory.php';","","$dir1 = new \\Project\\Module\\Directory();","","$dir2 = new \\Directory();",""],"id":42}],[{"start":{"row":146,"column":0},"end":{"row":147,"column":0},"action":"insert","lines":["",""],"id":43}],[{"start":{"row":147,"column":0},"end":{"row":147,"column":1},"action":"insert","lines":["/"],"id":44},{"start":{"row":147,"column":1},"end":{"row":147,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":147,"column":2},"end":{"row":147,"column":6},"action":"insert","lines":["名前空間"],"id":45},{"start":{"row":147,"column":6},"end":{"row":147,"column":7},"action":"insert","lines":["が"]}],[{"start":{"row":147,"column":7},"end":{"row":147,"column":9},"action":"insert","lines":["宣言"],"id":46}],[{"start":{"row":147,"column":9},"end":{"row":147,"column":15},"action":"insert","lines":["されていない"],"id":47},{"start":{"row":147,"column":15},"end":{"row":147,"column":17},"action":"insert","lines":["場合"]}],[{"start":{"row":147,"column":17},"end":{"row":148,"column":0},"action":"insert","lines":["",""],"id":48},{"start":{"row":148,"column":0},"end":{"row":149,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":149,"column":0},"end":{"row":149,"column":1},"action":"insert","lines":["r"],"id":49},{"start":{"row":149,"column":1},"end":{"row":149,"column":2},"action":"insert","lines":["e"]},{"start":{"row":149,"column":2},"end":{"row":149,"column":3},"action":"insert","lines":["q"]},{"start":{"row":149,"column":3},"end":{"row":149,"column":4},"action":"insert","lines":["u"]},{"start":{"row":149,"column":4},"end":{"row":149,"column":5},"action":"insert","lines":["i"]},{"start":{"row":149,"column":5},"end":{"row":149,"column":6},"action":"insert","lines":["r"]},{"start":{"row":149,"column":6},"end":{"row":149,"column":7},"action":"insert","lines":["e"]}],[{"start":{"row":149,"column":7},"end":{"row":149,"column":8},"action":"insert","lines":["_"],"id":50},{"start":{"row":149,"column":8},"end":{"row":149,"column":9},"action":"insert","lines":["o"]},{"start":{"row":149,"column":9},"end":{"row":149,"column":10},"action":"insert","lines":["n"]},{"start":{"row":149,"column":10},"end":{"row":149,"column":11},"action":"insert","lines":["c"]},{"start":{"row":149,"column":11},"end":{"row":149,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":149,"column":12},"end":{"row":149,"column":13},"action":"insert","lines":[" "],"id":51}],[{"start":{"row":149,"column":13},"end":{"row":149,"column":15},"action":"insert","lines":["''"],"id":52}],[{"start":{"row":149,"column":14},"end":{"row":149,"column":15},"action":"insert","lines":["P"],"id":53},{"start":{"row":149,"column":15},"end":{"row":149,"column":16},"action":"insert","lines":["r"]},{"start":{"row":149,"column":16},"end":{"row":149,"column":17},"action":"insert","lines":["o"]},{"start":{"row":149,"column":17},"end":{"row":149,"column":18},"action":"insert","lines":["j"]},{"start":{"row":149,"column":18},"end":{"row":149,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":149,"column":19},"end":{"row":149,"column":20},"action":"insert","lines":["c"],"id":54},{"start":{"row":149,"column":20},"end":{"row":149,"column":21},"action":"insert","lines":["t"]},{"start":{"row":149,"column":21},"end":{"row":149,"column":22},"action":"insert","lines":["/"]}],[{"start":{"row":149,"column":22},"end":{"row":149,"column":23},"action":"insert","lines":["M"],"id":55},{"start":{"row":149,"column":23},"end":{"row":149,"column":24},"action":"insert","lines":["o"]},{"start":{"row":149,"column":24},"end":{"row":149,"column":25},"action":"insert","lines":["d"]},{"start":{"row":149,"column":25},"end":{"row":149,"column":26},"action":"insert","lines":["u"]},{"start":{"row":149,"column":26},"end":{"row":149,"column":27},"action":"insert","lines":["l"]},{"start":{"row":149,"column":27},"end":{"row":149,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":149,"column":28},"end":{"row":149,"column":29},"action":"insert","lines":["/"],"id":56},{"start":{"row":149,"column":29},"end":{"row":149,"column":30},"action":"insert","lines":["D"]},{"start":{"row":149,"column":30},"end":{"row":149,"column":31},"action":"insert","lines":["i"]},{"start":{"row":149,"column":31},"end":{"row":149,"column":32},"action":"insert","lines":["r"]},{"start":{"row":149,"column":32},"end":{"row":149,"column":33},"action":"insert","lines":["e"]},{"start":{"row":149,"column":33},"end":{"row":149,"column":34},"action":"insert","lines":["c"]}],[{"start":{"row":149,"column":34},"end":{"row":149,"column":35},"action":"insert","lines":["t"],"id":57},{"start":{"row":149,"column":35},"end":{"row":149,"column":36},"action":"insert","lines":["o"]},{"start":{"row":149,"column":36},"end":{"row":149,"column":37},"action":"insert","lines":["r"]},{"start":{"row":149,"column":37},"end":{"row":149,"column":38},"action":"insert","lines":["y"]}],[{"start":{"row":149,"column":38},"end":{"row":149,"column":39},"action":"insert","lines":["."],"id":58},{"start":{"row":149,"column":39},"end":{"row":149,"column":40},"action":"insert","lines":["p"]},{"start":{"row":149,"column":40},"end":{"row":149,"column":41},"action":"insert","lines":["h"]},{"start":{"row":149,"column":41},"end":{"row":149,"column":42},"action":"insert","lines":["p"]}],[{"start":{"row":149,"column":43},"end":{"row":149,"column":44},"action":"insert","lines":[";"],"id":59}],[{"start":{"row":149,"column":44},"end":{"row":150,"column":0},"action":"insert","lines":["",""],"id":60},{"start":{"row":150,"column":0},"end":{"row":151,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":151,"column":0},"end":{"row":151,"column":1},"action":"insert","lines":["$"],"id":61},{"start":{"row":151,"column":1},"end":{"row":151,"column":2},"action":"insert","lines":["d"]},{"start":{"row":151,"column":2},"end":{"row":151,"column":3},"action":"insert","lines":["i"]},{"start":{"row":151,"column":3},"end":{"row":151,"column":4},"action":"insert","lines":["r"]}],[{"start":{"row":151,"column":4},"end":{"row":151,"column":5},"action":"insert","lines":[" "],"id":62},{"start":{"row":151,"column":5},"end":{"row":151,"column":6},"action":"insert","lines":["="]}],[{"start":{"row":151,"column":6},"end":{"row":151,"column":7},"action":"insert","lines":[" "],"id":63},{"start":{"row":151,"column":7},"end":{"row":151,"column":8},"action":"insert","lines":["n"]},{"start":{"row":151,"column":8},"end":{"row":151,"column":9},"action":"insert","lines":["e"]},{"start":{"row":151,"column":9},"end":{"row":151,"column":10},"action":"insert","lines":["w"]}],[{"start":{"row":151,"column":10},"end":{"row":151,"column":11},"action":"insert","lines":[" "],"id":64},{"start":{"row":151,"column":11},"end":{"row":151,"column":12},"action":"insert","lines":["P"]}],[{"start":{"row":151,"column":12},"end":{"row":151,"column":13},"action":"insert","lines":["r"],"id":65},{"start":{"row":151,"column":13},"end":{"row":151,"column":14},"action":"insert","lines":["o"]},{"start":{"row":151,"column":14},"end":{"row":151,"column":15},"action":"insert","lines":["j"]},{"start":{"row":151,"column":15},"end":{"row":151,"column":16},"action":"insert","lines":["e"]},{"start":{"row":151,"column":16},"end":{"row":151,"column":17},"action":"insert","lines":["c"]},{"start":{"row":151,"column":17},"end":{"row":151,"column":18},"action":"insert","lines":["t"]}],[{"start":{"row":151,"column":18},"end":{"row":151,"column":19},"action":"insert","lines":["\\"],"id":66}],[{"start":{"row":151,"column":19},"end":{"row":151,"column":20},"action":"insert","lines":["M"],"id":67},{"start":{"row":151,"column":20},"end":{"row":151,"column":21},"action":"insert","lines":["o"]},{"start":{"row":151,"column":21},"end":{"row":151,"column":22},"action":"insert","lines":["d"]},{"start":{"row":151,"column":22},"end":{"row":151,"column":23},"action":"insert","lines":["u"]},{"start":{"row":151,"column":23},"end":{"row":151,"column":24},"action":"insert","lines":["l"]},{"start":{"row":151,"column":24},"end":{"row":151,"column":25},"action":"insert","lines":["e"]}],[{"start":{"row":151,"column":25},"end":{"row":151,"column":26},"action":"insert","lines":["\\"],"id":68}],[{"start":{"row":151,"column":26},"end":{"row":151,"column":27},"action":"insert","lines":["D"],"id":69},{"start":{"row":151,"column":27},"end":{"row":151,"column":28},"action":"insert","lines":["i"]},{"start":{"row":151,"column":28},"end":{"row":151,"column":29},"action":"insert","lines":["r"]},{"start":{"row":151,"column":29},"end":{"row":151,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":151,"column":26},"end":{"row":151,"column":30},"action":"remove","lines":["Dire"],"id":70},{"start":{"row":151,"column":26},"end":{"row":151,"column":35},"action":"insert","lines":["Directory"]}],[{"start":{"row":151,"column":35},"end":{"row":151,"column":36},"action":"insert","lines":[";"],"id":71}]]},"ace":{"folds":[],"scrolltop":2319,"scrollleft":0,"selection":{"start":{"row":151,"column":36},"end":{"row":151,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1601196750815,"hash":"1d4f9aa1f55642673858796faab2a5b8cfef438a"}