<?php
class Man{
    public $Name;
    public  $Age;
function _construct($name,$age){//jokon class take akta object create korbo,php function  automatically call hobe
    $this->name = $name;
    $this->age = $age;

}
function _destruct(){
echo $this->name. $this->age;

}
}
    $student = New Man("lima",22);//akta variable e new keyword dia object create korbo,function ke call korbo
    $ayla = New Man("anjum",23);
    ?>