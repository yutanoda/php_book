<?php

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

