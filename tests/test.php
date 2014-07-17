<?php 

class HelloWorldTest extends PHPUnit_Framework_TestCase{

	public function __construct(){
		parent::__construct();
		require_once '../helloWorld.php';
	}

	public function testHelloWorld(){
		$this->assertEquals(helloWorld(),'Hello World!');
	}

}
