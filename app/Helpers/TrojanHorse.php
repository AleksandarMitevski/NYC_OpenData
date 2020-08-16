<?php 

namespace App\Helpers;

class TrojanHorse{

	public $Agencies;

	public $NumbersPerMonth;

	public $PerCity; 

	function __construct($array1,$array2,$array3)
	{
		$Agencies = $array1;
		$NumbersPerMonth = $array2;
		$PerCity = $array3;
	}

}