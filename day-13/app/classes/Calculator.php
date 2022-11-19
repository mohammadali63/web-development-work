<?php

namespace App\classes;

class Calculator
{
    public $firstNumber;
    public $lasttNumber;
    public $choice;
    public $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lasttNumber = $post['last_number'];
        $this->choice      = $post['choice'];
    }

    public function getResult()
    {
        switch ($this->choice)
        {
            case '+':
                $this->result = $this->addition();
                break;
            case '-':
                $this->result = $this->subtraction();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->division();
                break;
            case '%':
                $this->result = $this->remainder();
                break;
        }
        return $this->result;

    }

    public function addition()
    {
        return $this->firstNumber + $this->lasttNumber;
    }

    public function subtraction()
    {
        return $this->firstNumber - $this->lasttNumber;
    }

    public function multiplication()
    {
        return $this->firstNumber * $this->lasttNumber;
    }

    public function division()
    {
        return $this->firstNumber / $this->lasttNumber;
    }

    public function remainder()
    {
        return $this->firstNumber % $this->lasttNumber;
    }

}