<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use  App\FizzBuzz;


class ExampleTest extends TestCase {

	public function test_Fizz(
	) {
		$fizzBuzz = new FizzBuzz();
		$result = $fizzBuzz->testNumber(3);
		$this->assertEquals("Fizz", $result);
	}
	public function test_Buzz(	
	){
		$fizzBuzz = new FizzBuzz();
		$result = $fizzBuzz ->testNumber(5);
		$this->assertEquals("Buzz",$result);
	}
	public function test_FizzBuzz(
	){
		$fizzBuzz = new FizzBuzz();
		$result = $fizzBuzz ->testNumber(15);
		$this->assertEquals("FizzBuzz",$result);
	}

}


?>

