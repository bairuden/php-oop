<?php

class Cat
{
    public function drink()
    {
        echo "drinking milk from the bowl\n";//hoise?hello,asen?response koren
    }
}

$cat = new Cat;
$cat->drink();//cat variavble take drink function ke call korsi ,cat class e aita execute hobe

class Sibber extends Cat
{
    /**
     * overridden drink function.
     */
    public function drink()
    {
        echo "Drinking from .\n";
    }
}

$sibber = new Sibber;
$sibber->drink();//sibber variable take drink function ke call , tarpor sibber class e execute hobe