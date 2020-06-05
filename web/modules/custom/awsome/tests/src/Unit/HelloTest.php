<?php
namespace Drupal\Tests\awsome\Unit;

use Drupal\Tests\UnitTestCase;

class HelloTest{
 	/**
     * @group hello
     */	
	function testHello(){
		$hello = "hello";
		$this->assertEqual("hello", $hello);
	}
}