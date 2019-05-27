<?php
//tests/Service/BusinessCheckerTest.php
namespace App\Test\Service;

use App\Service\BusinessChecker;
use App\Entity\Business;
use PHPUnit\Framework\TestCase;

class BusinessCheckerTest extends TestCase
{
	public function testCanCreateBusiness()
	{		
		$business = new Business();
		$this->assertInstanceOf(Business::class,$business, 'Not Instance of Business');
	}
	public function testCanAddBusiness()
	{
		
		$businessChecker = new BusinessChecker();
		$business = new Business();
		$result = $businessChecker->addBusiness($business);
		
		$this->assertTrue($result);
	}
}