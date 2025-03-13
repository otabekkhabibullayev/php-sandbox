<?php

// Class example

class Car
{
    // Свойства переменные
    public $brand;
    public $color;

    // Конструктор (вызывается при создании объекта)
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    function drive()
    {
        echo "Машина $this->brand едет!";
    }
}

$car1 = new Car('Ford', 'green');
$car2 = new Car("BMW", "Черный");

$car2->drive();

// Encapsulation

class User {
    private $password;

    function __construct($password) {
        $this->password = $this->hashPassword($password);
    }

    private function hashPassword($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function getPassword() {
        return $this->password;
    }
}

$user = new User("123456");
// echo $user->password; ❌ Ошибка, так как password — private
echo $user->getPassword(); // ✅ Выведет хешированный пароль

// Inherit
class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function sayHello() {
        echo "Привет, меня зовут $this->name";
    }
}

// Класс Employee наследует Person
class Employee extends Person {
    public $job;

    function __construct($name, $job) {
        parent::__construct($name); // Вызов конструктора родителя
        $this->job = $job;
    }

    function work() {
        echo "$this->name работает как $this->job";
    }
}

$employee = new Employee("Иван", "Программист");
$employee->sayHello(); // "Привет, меня зовут Иван"
$employee->work(); // "Иван работает как Программист"

class Animal {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function makeSound() {
        echo "Этот животное издает звук";
    }
}

class Dog extends Animal {
    function makeSound() {
        echo "$this->name говорит Гав!";
    }
}

class Cat extends Animal {
    function makeSound() {
        echo "$this->name говорит Мяу!";
    }
}

$dog = new Dog("Шарик");
$cat = new Cat("Мурка");

$dog->makeSound(); // "Шарик говорит Гав!"
$cat->makeSound(); // "Мурка говорит Мяу!"

