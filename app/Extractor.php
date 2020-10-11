<?php

namespace App;
use allejo\Socrata\SodaClient;
use allejo\Socrata\SodaDataset;
use allejo\Socrata\SoqlQuery;
use allejo\Socrata\SoqlOrderDirection;

class Extractor
{ 
	public static $years = array(
		2004 => "sqcr-6mww",
		2005 => "sxmw-f24h",
		2006 => "hy4q-igkk",
		2007 => "aiww-p3af",
		2008 => "uzcy-9puk",
		2009 => "3rfa-3xsf",
	);

	public $sc;
	public $soql;
	public $decadeConn;

    public function __construct(){
        $this->sc = new SodaClient("data.cityofnewyork.us");
        $this->soql = new SoqlQuery();
        $this->decadeConn = new SodaDataset($this->sc, "erm2-nwe9");
    }
	
    public function dataFromYear($year)
    {
	    if ($year>=2010 && $year<=2020) {
	    				
            $this->soql->select("count(created_date)","date_extract_m(created_date)")
            ->where("date_extract_y(created_date)=$year")
            ->group("date_extract_m(created_date)")
            ->order("date_extract_m(created_date)", SoqlOrderDirection::ASC);
            
            $NumbersPerMonth = $this->decadeConn->getDataset($this->soql);
			
		    return $NumbersPerMonth;

    	}else{
	    	
			$ds = new SodaDataset($this->sc, self::$years[$year]);

            $this->soql->select("count(created_date)","date_extract_m(created_date)")
            ->where("date_extract_y(created_date)=$year")
            ->group("date_extract_m(created_date)")
            ->order("date_extract_m(created_date)", SoqlOrderDirection::ASC);
            
            $NumbersPerMonth = $ds->getDataset($this->soql);
			
		    return $NumbersPerMonth;
    	}
	}

	public function cityData($year)
	{
		if($year>=2010 && $year<=2020){
			
	        $this->soql->select("count(created_date)","city")
	        ->where("date_extract_y(created_date)=$year")
	        ->group("city")
	        ->order("count(created_date)", SoqlOrderDirection::DESC)
	        ->limit(10);
	        
	        $NumbersPerMonth = $this->decadeConn->getDataset($this->soql);
			
		    return $NumbersPerMonth;

		}else{

			$ds = new SodaDataset($this->sc, self::$years[$year]);
			
	        $this->soql->select("count(created_date)","city")
	        ->where("date_extract_y(created_date)=$year")
	        ->group("city")
	        ->order("count(created_date)",SoqlOrderDirection::DESC)
	        ->limit(10);
	        
	        $NumbersPerMonth = $ds->getDataset($this->soql);
			
		    return $NumbersPerMonth;
		}
	}

	public function reportsPerAgency($year)
	{
		if($year>=2010 && $year<=2020){
			
	        $this->soql->select("count(created_date)","agency_name")
	        ->where("date_extract_y(created_date)=$year")
	        ->group("agency_name")
	        ->order("count(created_date)", SoqlOrderDirection::DESC)
	        ->limit(10);
	        
	        $NumbersPerMonth = $this->decadeConn->getDataset($this->soql);
			
		    return $NumbersPerMonth;
		}else{

			$ds = new SodaDataset($this->sc, self::$years[$year]);

			$this->soql = new SoqlQuery();
			
	        $this->soql->select("count(created_date)","agency_name")
	        ->where("date_extract_y(created_date)=$year")
	        ->group("agency_name")
	        ->order("count(created_date)", SoqlOrderDirection::DESC)
	        ->limit(10);
	        
	        $NumbersPerMonth = $ds->getDataset($this->soql);
			
		    return $NumbersPerMonth;
		}
	}


	public function decadeReview()
	{	
	    $this->soql->select("count(created_date)","date_extract_y(created_date)")
	    ->group("date_extract_y(created_date)")
	    ->order("date_extract_y(created_date)", SoqlOrderDirection::ASC);
	    
	    $yearlyNumbers = $this->decadeConn->getDataset($this->soql);
		
	    return $yearlyNumbers;
		
	}


	public function decadeCityReview()
	{
	    $this->soql->select("count(created_date)","city")
	    ->group("city")
	    ->order("count(created_date)", SoqlOrderDirection::DESC)
        ->limit(10);
	    
	    $yearlyNumbers = $this->decadeConn->getDataset($this->soql);
		
	    return $yearlyNumbers;
		
	}

	public function decadeAgencyReview()
	{
	    $this->soql->select("count(created_date)","agency_name")
	    ->group("agency_name")
	    ->order("count(created_date)", SoqlOrderDirection::DESC);
	    
	    $yearlyNumbers = $this->decadeConn->getDataset($this->soql);
		
	    return $yearlyNumbers;
	}
}
