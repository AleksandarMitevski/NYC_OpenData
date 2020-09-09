<div class="container mx-auto">

	
	<div class=" mb-5 mt-5 ">
		<a href="{{ Route('home') }}">
			<img src="{{ asset('images/logo') }}">
		</a>
	</div>
		
		<div class="flex">	
			<div class="m-auto">
				@if(cache()->has('decadeReview'))
				<a class=" mt-3 py-2 block text-gray-800 text-2xl font-bold m-auto cursor-pointer hover:text-black" href="{{ Route('AggData') }}"> 2010-2020 </a>
				@else
				<a onclick="alert('Generating the charts for this view will take longer becuase of the large dataset');" class=" mt-3 py-2 block text-gray-800 text-2xl font-bold m-auto cursor-pointer hover:text-black" href="{{ Route('AggData') }}"> 2010-2020 </a>
				@endif
			</div>
		</div>	

	<div class="flex">

	<a class=" mt-3 py-2 block text-gray-800 text-2xl font-bold m-auto cursor-pointer hover:text-black" href="{{ Route('SelectYear') }}"> Year Select </a>

	</div>

	<div class="flex">
	<a class="mt-3 py-2 block text-gray-800 text-2xl font-bold m-auto cursor-pointer hover:text-black" href="{{ Route('RawData') }}"> Raw Data </a>
	</div>

</div>
