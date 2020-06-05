<?php
namespace Drupal\Tests\awsome\Unit;

use Drupal\Tests\UnitTestCase;

class HelloTest  extends UnitTestCase {
 	/**
     * @group hello
     */	
	function testHello(){
		$hello = "hello";
		$this->assertEquals("hello", $hello);
	}
}