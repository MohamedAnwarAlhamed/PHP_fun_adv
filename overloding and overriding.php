<?php


class Customer {

    function avgSell(){
        echo "average sell is 1000k in hm".PHP_EOL;
    }
}


class Dealer extends Customer{

    function avgSell()
    {
        echo "sell is minimum 20000k".PHP_EOL;
    }

}

$customer1 =new Customer();

$customer2 =new Dealer();

$customer1->avgSell();
$customer2->avgSell();


<?php

// php doesnt suppot overload ..

// overloading is same method different parameter  only suport by magic method __call()


class Salary{


    public $hour =8;
    public $price =1000;

//defalut value
    function getSalary(){
        return $this->hour * $this->price;
    }
//if take input
    function getSalary($hour,$price){
        return $this->hour * $this->price;
    }
}

//cannot possible
$employee1 =new Salary();

echo $employee1->getSalary();