<?php

namespace App;

class FizzBuzz{
    public function testNumber($value){

        if($value % 3  ==  0 && $value % 5 == 0){
            return "FizzBuzz";
        }
        else if($value % 3 == 0){
           return "Fizz";
        }
        else if($value % 5 == 0){
           return "Buzz";
        }
        else{
            return $value;
        }    
    }
    public function printResult(){
        for($i = 1; $i <= 100; $i++){
            echo $this->testNumber ($i);
            echo "<br>";
        }
    }
}
$fizzBuzz = new FizzBuzz();
$fizzBuzz->printResult();