<?php
class Table
{
     public  $color;
     public  $legs;
     public function  show()
     {
echo 'привет я стол!';
echo ' у меня '.$this->color,$this->legs. 'ног';
     }
}
$table1 = new Table;
$table1->color='red';
$table1->legs = 4;
$table1->show();

$table2 = new Table;
$table2->color='white';
$table2->legs = 3;
var_dump($table2);