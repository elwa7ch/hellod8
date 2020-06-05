<?php
namespace Drupal\Tests\awsome\Unit;

use Drupal\Tests\UnitTestCase;

class HelloTest{
	function testHello(){
		$hello = "hello";
		$this->assertEqual("hello", $hello);
	}
}