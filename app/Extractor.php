<?php

namespace App;
use allejo\Socrata\SodaClient;
use allejo\Socrata\SodaDataset;
use allejo\Socrata\SoqlQuery;
use allejo\Socrata\SoqlOrderDirection;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\TrojanHorse;

class Extractor extends Model
{ 
	public static $years = array(
		2004 => "sqcr-6mww",
		2005 => "sxmw-f24h",
		2006 => "hy4q-igkk",
		2007 => "aiww-p3af",
		2008 => "uzcy-9puk",
		2009 => "3rfa-3xsf",
	);
	
    public static function DataFromYear($year)
    {
	    	if ($year>=2010 && $year<=2020) {
	    	
	    	$sc = new SodaClient("data.cityofnewyork.us");

			$ds = new SodaDataset($sc, "erm2-nwe9");

			$soql = new SoqlQuery();
			
            $soql->select("count(created_date)","date_extract_m(created_date)")
            ->where("date_extract_y(created_date)=$year")
            ->group("date_extract_m(created_date)")
            ->order("date_extract_m(created_date)", SoqlOrderDirection::ASC);
            
            $NumbersPerMonth = $ds->getDataset($soql);
			
		    return $NumbersPerMonth;

    	}else{
	    	
	    	$sc = new SodaClient("data.cityofnewyork.us");

			$ds = new SodaDataset($sc, self::$years[$year]);

			$soql = new SoqlQuery();
			
            $soql->select("count(created_date)","date_extract_m(created_date)")
            ->where("date_extract_y(created_date)=$year")
            ->group("date_extract_m(created_date)")
            ->order("date_extract_m(created_date)", SoqlOrderDirection::ASC);
            
            $NumbersPerMonth = $ds->getDataset($soql);
			
		    return $NumbersPerMonth;

    }
}

	public static function CityData($year)
	{

		if($year>=2010 && $year<=2020){

    	$sc = new SodaClient("data.cityofnewyork.us");

		$ds = new SodaDataset($sc, "erm2-nwe9");

		$soql = new SoqlQuery();
		
        $soql->select("count(created_date)","city")
        ->where("date_extract_y(created_date)=$year")
        ->group("city")
        ->order("count(created_date)", SoqlOrderDirection::DESC)
        ->limit(10);
        
        $NumbersPerMonth = $ds->getDataset($soql);
		
	    return $NumbersPerMonth;

		}else{

    	$sc = new SodaClient("data.cityofnewyork.us");

		$ds = new SodaDataset($sc, self::$years[$year]);

		$soql = new SoqlQuery();
		
        $soql->select("count(created_date)","city")
        ->where("date_extract_y(created_date)=$year")
        ->group("city")
        ->order("count(created_date)",SoqlOrderDirection::DESC)
        ->limit(10);
        
        $NumbersPerMonth = $ds->getDataset($soql);
		
	    return $NumbersPerMonth;
	}
}
	public static function reportsPerAgency($year)
	{
		if($year>=2010 && $year<=2020){
	    	$sc = new SodaClient("data.cityofnewyork.us");

			$ds = new SodaDataset($sc, "erm2-nwe9");

			$soql = new SoqlQuery();
			
	        $soql->select("count(created_date)","agency_name")
	        ->where("date_extract_y(created_date)=$year")
	        ->group("agency_name")
	        ->order("count(created_date)", SoqlOrderDirection::DESC)
	        ->limit(10);
	        
	        $NumbersPerMonth = $ds->getDataset($soql);
			
		    return $NumbersPerMonth;
		}else{
	    	$sc = new SodaClient("data.cityofnewyork.us");

			$ds = new SodaDataset($sc, self::$years[$year]);

			$soql = new SoqlQuery();
			
	        $soql->select("count(created_date)","agency_name")
	        ->where("date_extract_y(created_date)=$year")
	        ->group("agency_name")
	        ->order("count(created_date)", SoqlOrderDirection::DESC)
	        ->limit(10);
	        
	        $NumbersPerMonth = $ds->getDataset($soql);
			
		    return $NumbersPerMonth;
		}
	}


	public static function decadeReview()
	{
		
		$sc = new SodaClient("data.cityofnewyork.us");

		$ds = new SodaDataset($sc, "erm2-nwe9");

		$soql = new SoqlQuery();
		
	    $soql->select("count(created_date)","date_extract_y(created_date)")
	    ->group("date_extract_y(created_date)")
	    ->order("date_extract_y(created_date)", SoqlOrderDirection::ASC);
	    
	    $yearlyNumbers = $ds->getDataset($soql);
		
	    return $yearlyNumbers;
		
	}


	public static function decadeCityReview()
	{
		
		$sc = new SodaClient("data.cityofnewyork.us");

		$ds = new SodaDataset($sc, "erm2-nwe9");

		$soql = new SoqlQuery();
		
	    $soql->select("count(created_date)","city")
	    ->group("city")
	    ->order("count(created_date)", SoqlOrderDirection::DESC)
        ->limit(10);
	    
	    $yearlyNumbers = $ds->getDataset($soql);
		
	    return $yearlyNumbers;
		
	}


	public static function decadeAgencyReview()
	{
		
		$sc = new SodaClient("data.cityofnewyork.us");

		$ds = new SodaDataset($sc, "erm2-nwe9");

		$soql = new SoqlQuery();
		
	    $soql->select("count(created_date)","agency_name")
	    ->group("agency_name")
	    ->order("count(created_date)", SoqlOrderDirection::DESC);
	    
	    $yearlyNumbers = $ds->getDataset($soql);
		
	    return $yearlyNumbers;
		
	}

}
