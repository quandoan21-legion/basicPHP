<?php

    class MyParentClass {
        public $firstName = "Wiloke";

        protected $lastName = "PHPStorm";

        private $fullName = "Wiloke PHPStorm";

        public function setFristName($firstName){
            $this->firstName = $firstName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function setFullName($fullName){
            $this->fullName = $fullName;
        }

        public function getFullName() {
            return $this->fullName;
        }
        // public function getLastName() {
        //     return $this->lastName;
        // }
    }

    class ChildClass extends MyParentClass {
        public function getLastName() {
            return $this->lastName;
        }

        public function getFirstName() {
            return $this->firstName;
        }
    }

$oMyClass =  new MyParentClass();
// vì class $firstname là tcs property public nên có thể gọi từ concrete
echo $oMyClass->firstName . '<br> <br>';


// vì class $lastname là theo dạng private nên nếu muốn gọi ra thì chúng ta phải thông qua 1 function có medthod public
// trong chính class đóvà chỉ trong class đó thì mới có thể access được
$oMyClass->setFullName("Doan Quan");
echo $oMyClass->getFullName() . '<br> <br>';

$oChildClass = new ChildClass();
// vì class $lastname là theo dạng protected nên nếu muốn gọi ra thì chúng ta phải thông qua 1 function có medthod public
// trong chính class đó hoặc class con của nó thì mới có thể access được
echo $oChildClass->getLastName() . '<br> <br>';


