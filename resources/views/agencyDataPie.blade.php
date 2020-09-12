@extends('layouts.layout2')

@section('content')
	@include('components.header')
    <div class="flex h-screen">
        @include('components.agencyData')
    </div>
@endsection