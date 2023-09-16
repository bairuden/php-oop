<?php
class Man
{
    public $name;
    public $age;
    public $address;
    function info($fname, $age, $address)
    {
        return "hi";
    }
    protected function info1()
    {
        return "hello";
    }
}
class limuinfo extends Man
{
    public function message()
    {
        return $this->info1(); //protected class child class e create kora jai,object take create kora jaina

    }
}
$limu = new limuinfo;
$limu->info("limu", 22, "dhaka");
$limu->message();
