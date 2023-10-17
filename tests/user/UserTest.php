<?php

require_once('../../lib/User.php');
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{ 
  private $u;

  public function setUp():void {
    $this->u = new User("docenten@educom.nu", "password");	
  }

  public function testCanCreateInstanceOfUser() {
    $this->assertIsObject($this->u);
  }
}
?>