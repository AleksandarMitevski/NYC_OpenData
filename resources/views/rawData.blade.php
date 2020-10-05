@extends('layouts.layout2')


@section('content')

        <div class="flex h-screen">
			@include('components.dataTable')
        </div>
        
        @include('components.mapModal')

@endsection