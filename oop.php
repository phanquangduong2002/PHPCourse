<?php

echo "OOP - Object Oriented Programing <br>";


class User
{
    private $name;
    private $email;
    private $age;
    private $password;

    // constructor
    public function __construct($name, $email, $age, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }

    // method: a function that belongs to a class

    function set_name($name)
    {
        $this->name = $name;
    }

    // getter
    function get_name()
    {
        return $this->name;
    }

    function set_email($email)
    {
        $this->email = $email;
    }

    function get_email()
    {
        return $this->email;
    }
}

$user1 = new User('User1', 'user1@gmail.com', 21, '12345');
$user2 = new User('User2', 'user2@gmail.com', 21, '12345');

// $user->name = "Duong";
// $user->email = 'phanquangduong2002@gmail.com';
// $user->age = 21;
// $user->password = '12345';
// $user->set_name('duong');
// $user2->set_name('Box');
// print_r($user1);
// print_r($user2);

// echo $user1->get_email();
// echo $user2->get_email();

// Kế thừa

class Employee extends User
{
    private $title;
    public function __construct($name, $email, $age, $password, $title)
    {
        parent::__construct($name, $email, $age, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee("Taylor", 'taylor@gmail.com', 21, '12345', 'Sales manager');

print_r($employee1);
