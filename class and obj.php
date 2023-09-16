<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Man // class name starts with capital letter
    { //class er akta nam dilam
        public $name;
        public $age;
        public $address;
        // protected
        // private



        function setInfo($fname, $age, $address)
        {
            $this->name = $fname; //class er propertiesgulu jodi function e assign korte cai
            $this->age = $age;
            $this->address = $address;
        }

        function getInfo()
        {
            return "name: $this->name Age: $this->age Address: $this->address <br>";
        }
    }
    $person1 = new Man(); //new keyword use kore object create korlam,akta variable er bitore raklam
    $person1->setInfo("ayla", 22, "dhaka"); //object er variable dia class er properties acess korlam
    echo $person1->getInfo();
    $person2 = new Man(); //new keyword use kore object create korlam,akta variable er bitore raklam;
    $person2->setInfo("lima", 20, "dhaka"); //object er variable dia class er properties acess korlam
    echo $person2->getInfo();
    ?>
</body>

</html>