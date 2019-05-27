<?php
namespace App\Service;

use App\Entity\Business;

class BusinessChecker
{
	private $business;
	public function __constructor()
	{
		
	}
	public function addBusiness(Business $business)
	{
		$this->business = $business;
		return $business instanceOf Business;
	}
}