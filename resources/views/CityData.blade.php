@extends('layouts.layout2')

@section('content')
	@include('components.header')
    <div class="flex h-screen">
        @include('components.CityPieChart')
    </div>
@endsection

