<?php

namespace App\classes;

class HelloWorld
{
public $massage,$firstName,$lastName;
public function __construct()
{
    $this ->massage='Hello';
    $this ->firstName='Mohammad';
    $this ->lastName='Ali';
}
public function index()
{
    echo $this->massage;
    echo "<br>";
    echo $this->firstName . ' '. $this->lastName;


}

}