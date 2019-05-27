<?php
//tests/Entity/BusinessTest.php
namespace App\Test\Entity;

use App\Entity\Business;
use PHPUnit\Framework\TestCase;

class BusinessTest extends TestCase
{
	public function testCanCreateBusiness()
	{		
		$business = new Business();
		$this->assertInstanceOf(Business::class,$business, 'Not Instance of Business');
	}
	public function testCanEditBusiness()
	{
		
		$business = new Business();			
		$this->assertTrue($result);
	}
}