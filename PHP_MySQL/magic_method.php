<?php


/* -------------------------------------------------------------------------- */
/*                             __get() and set()                              */
/* -------------------------------------------------------------------------- */

class Age
{
    // __set() được gọi khi ta truyền dữ liệu vào thuộc tính không tồn tại của đối tượng
    public function __set($property, $age)
    {
        $this->property = $age;
    }
    // __get() được gọi khi ta truy cập dữ liệu vào thuộc tính không tồn tại của đối tượng
    public function __get($property)
    {
        if (($this->property) >= 18) {
            return "Tuổi của bạn là $this->property.  Bạn được phép học lái xe";
        } else {
            return "Tuổi của bạn là $this->property.  Bạn không được phép học lái xe";
        }
    }
}

$var = new Age();
$var->age = "2";
echo $var->age;

/* ------------------------ end of __get() and set() ------------------------ */



/* -------------------------------------------------------------------------- */
/*                        __construct and __destruct()                        */
/* -------------------------------------------------------------------------- */


class Student
{
    // __contruct dùng để khởi tạo đối tượng 
    public function __construct($stdName, $stdAge, $stdClass)
    {
        $this->stdName = $stdName;
        $this->stdAge = $stdAge;
        $this->stdClass = $stdClass;
    }

    public function __destruct()
    {
    }
    public function getName()
    {
        return $this->stdName;
    }

    public function getAge()
    {
        return $this->stdAge;
    }

    public function getClass()
    {
        return $this->stdClass;
    }
}


$quan = new Student("Quan", 21, "12A8");

echo $quan->getName() . '<br>';
echo $quan->getAge() . '<br>';
echo $quan->getClass() . '<br>';

/* ------------------- end of __construct and __destruct() ------------------ */




/* -------------------------------------------------------------------------- */
/*                                __toString()                                */
/* -------------------------------------------------------------------------- */

class Name
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    // __toString trả về obj như 1 string
    public function __toString()
    {
        echo "Tên của bạn là ";
        return $this->name;
    }
}

$name = new Name('Quan');
echo $name . '<br>';


/* -------------------------- end off __toString() -------------------------- */




/* -------------------------------------------------------------------------- */
/*                                 __invoke()                                 */
/* -------------------------------------------------------------------------- */

class ExampleClass
{
    // __invoke được gọi khi ta cố gắng gọi một đối tượng như một hàm.
    public function __invoke($x)
    {
        var_dump($x) . '<br>';
    }
}
$obj = new ExampleClass;
$obj(5);
var_dump(is_callable($obj)) . '<br>';

/* ---------------------------- end of __invoke() --------------------------- */

