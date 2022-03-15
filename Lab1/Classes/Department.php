<?php

namespace App;

use Symfony\Component\Validator\Constraints as Assert;

class Department
{
    /**
    * @Assert\NotNull()
    * @Assert\NotBlank
    */
    private array $employArr = array();
    /**
    * @Assert\Type("string")
    * @Assert\NotNull()
    * @Assert\NotBlank
    * @Assert\Length(
    *      min = 2,
    *      max = 50
    */
    private string $name;

    //getter array
    public function getEmployArr() : array
    {
        return $this->employArr;
    }

    //setter id
    public function setEmployArr(array $newArr)
    {
        $this->employArr = $newArr;
    }

    //getter name
    public function getName() : string
    {
        return $this->name;
    }

    //setter name
    public function setName(string $name)
    {
        $this->name = $name;
    }

    //constructor
    public function __construct(array $arr, string $name)
    {
        $this->employArr = $arr;
        $this->name = $name;
    }

    //подсчет суммарной зарплаты всех работников департамента
    public function getEmploySumSalary() : int
    {
        $tmpSum = 0;
        foreach ($employArr as $employee) {
          $tmpSum += $employee->getSalary();
        }
        return $tmpSum;
    }
}

?>