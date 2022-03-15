<?php

namespace App;

use Symfony\Component\Validator\Constraints as Assert;

class Employee
{
    /**
    * @Assert\NotBlank
    * @Assert\NotNull()
    * @Assert\GreaterThan(0)
    * @Assert\Type("int")
    */
    private int $id;
    /**
    * @Assert\Type("string")
    * @Assert\NotNull()
    * @Assert\NotBlank
    * @Assert\Length(
    *      min = 2,
    *      max = 50
    *)
    */
    private string $name;
    /**
    * @Assert\NotBlank
    * @Assert\NotNull()
    * @Assert\GreaterThan(0)
    * @Assert\Type("int")
    */
    private int $salary;
    /**
    * @Assert\NotBlank
    * @Assert\NotNull()
    * @Assert\Date()
    */
    private string $startWorkDate;

    //getter id
    public function getId(): int
    {
        return $this->id;
    }

    //setter id
    public function setId(int $id)
    {
        $this->id = $id;
    }

    //getter name
    public function getName(): string
    {
        return $this->name;
    }

    //setter name
    public function setName(string $name)
    {
        $this->name = $name;
    }

    //getter salary
    public function getSalary(): int
    {
        return $this->salary;
    }

    //setter salary
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    //getter startWorkDate
    public function getStartWorkDate(): string
    {
        return $this->startWorkDate;
    }

    //setter startWorkDate
    public function setStartWorkDate(string $date)
    {
        $this->date = $date;
    }

    //constructor
    public function __construct(int $id, string $name, int $salary, string $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
        $this->startWorkDate = $date;
    }

    public function getExperience(): int
    {
        $todayYear = (int)date('Y');
        $startYear = (int)date('Y', strtotime($this->startWorkDate));
        return $todayYear - $startYear;
    }
}
