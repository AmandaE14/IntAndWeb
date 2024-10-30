<?php

namespace MyNamespace;

class MyClass
{
    private string $property1;
    private int $property2;

    public function __construct(string $property1, int $property2) {
        $this->property1 = $property1;
        $this->property2 = $property2;
    }

    public function getProperty1(): string {
        return $this->property1;
    }

    public function setProperty1(string $property1): void {
        $this->property1 = $property1;
    }

    public function getProperty2(): int {
        return $this->property2;
    }

    public function setProperty2(int $property2): void {
        $this->property2 = $property2;
    }

    public static function displayStaticMethod(): string {
        return "This is a static method.";
    }
}

use MyNamespace\MyClass;

$instance = new MyClass("First String", 456);
echo $instance->getProperty1() . "<br>";
echo $instance->getProperty2() . "<br>";
$instance->setProperty1("New String");
$instance->setProperty2(789);
echo $instance->getProperty1() . "<br>";
echo $instance->getProperty2() . "<br>";
echo MyClass::displayStaticMethod();