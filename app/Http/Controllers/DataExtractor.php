<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

use App\Extractor;

class DataExtractor extends Controller
{

	public $extractorClass;

	public function __construct()
	{
		$this->extractorClass = new Extractor();
	}

	public function getData($year)
	{
		return view('reportsData', [
			'year' => $year,
			'data' => $this->extractorClass->dataFromYear($year),
		]);
	}

	public function getCityData($year)
	{

		return view('cityData',[
			'year' => $year,
			'data' => $this->extractorClass->cityData($year),
		]);
	}

	public function getAgencyData($year)
	{

		return view('agencyDataPie',[
			'year' => $year,
			'data' => $this->extractorClass->reportsPerAgency($year),
		]);
	}

	public function decadeReview()
	{
		return view('reportsData',[
			'year' => '2010-2020',
			'data' => Cache::remember('decadeReview', now()->addMinutes(240), function() {
				return $this->extractorClass->decadeReview();
			})
		]);
	}

	public function decadeCityReview()
	{
		return view('cityData',[
			'year' => '2010-2020',
			'data' => Cache::remember('decadeCityReview', now()->addMinutes(240), function() {
				return $this->extractorClass->decadeCityReview();
			})
		]);
	}

	public function decadeAgencyReview()
	{
		return view('agencyDataPie',[
			'year' => '2010-2020',
			'data' => Cache::remember('decadeAgencyReview', now()->addMinutes(240), function() {
				return $this->extractorClass->decadeAgencyReview();
			})
		]);
	}
}
