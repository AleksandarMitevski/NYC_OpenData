<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Extractor;

class DataExtractor extends Controller
{

	public function getData($year)
	{
		return view('welcome', [
			'year' => $year,
			'data' => Extractor::DataFromYear($year),
		]);
	}

	public function getCityData($year)
	{

		return view('CityData',[
			'year' => $year,
			'data' => Extractor::CityData($year),
		]);
	}

	public function getAgencyData($year)
	{
		return view('agencyDataPie',[
			'year' => $year,
			'data' => Extractor::reportsPerAgency($year),
		]);
	}

	public function decadeReview()
	{

		return view('welcome',[
			'year' => '2010-2020',
			'data' => Extractor::decadeReview(),
		]);

	}

	public function decadeCityReview()
	{

		return view('CityData',[
			'year' => '2010-2020',
			'data' => Extractor::decadeCityReview(),
		]);

	}

	public function decadeAgencyReview()
	{

		return view('agencyDataPie',[
			'year' => '2010-2020',
			'data' => Extractor::decadeAgencyReview(),
		]);

	}

}
