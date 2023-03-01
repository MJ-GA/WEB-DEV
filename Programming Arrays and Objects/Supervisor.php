<?php


class Supervisor extends Employee{
            private $employees;
            function __construct($employeeId, $firstName, $lastName, $employees){
                parent::__construct($employeeId, $firstName, $lastName);
                $this->employeeId=$employeeId;
                $this->firstName = $firstName;
                 $this->lastName = $lastName;
                 $this->employees=$employees;
            }
            public function getEmployees(){
                return  $this->employees;
            }
            public function setEmployees($employees){
                $this->employees = $employees;
            }
        }


        ?>