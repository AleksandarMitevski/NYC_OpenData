
<div class="container mx-auto px-5">
	<div class="container mt-10">
		<div class="flex items-center xl:flex lg:flex md:block sm:block">
				<div class="flex-1">

					@if($year=='2010-2020')
					<div
					 class=" flex m-auto items-center bg-white rounded border-solid border-2 border-gray-300 shadow-md"
				  	 style="width: 320px; height: 320px; z-index: -1;">
						<div style="width: 300px; height: 300px;">
							<canvas id="myChart"></canvas>
							<script type="text/javascript">
								var holder = @json($data);
							</script>
							<script type="text/javascript" src=" {{ asset('js/charts/decadeBar.js')}} ">
							</script>
						
						</div>
					</div>
					@else
					<div
					 class=" flex m-auto items-center bg-white rounded border-solid border-2 border-gray-300 shadow-md"
				  	 style="width: 320px; height: 320px; z-index: -1;">
						<div style="width: 300px; height: 300px;">
							<canvas id="myChart"></canvas>
							<script type="text/javascript">
								var holder = @json($data);
							</script>
							<script type="text/javascript" src=" {{ asset('js/charts/bar.js')}} ">
							</script>
						
						</div>
					</div>
					@endif
				</div>
					
				<div class="flex-1 m-auto items-center">
					<div class="bg-white rounded-lg font-semibold text-black shadow-xl xl:mt-0 lg:mt-0 md:mt-5 sm:mt-5">
					<div class="p-2 text-center">
						@if($year=='2010-2020')
						The bar chart represents the number of reports per year from the decade {{$year}}
						@else
						The bar chart represents the number of reports per month from the year {{$year}}
						@endif
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-20 ml-8 mx-auto">
			<div class="flex text-center xl:flex lg:flex md:block sm:block">

				@if($year=='2010-2020')
				<div class="flex-1">
					<div style="width: 450px;">
					<a href="{{Route('AggCData')}}" class="py-2 px-4 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per city from 2010 to 2020</a>
					</div>
				</div>
				<div class="flex-1">
					<div style="width: 450px;">
					<a href="{{Route('AggAData')}}" class="py-2 px-2 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per agency from 2010 to 2020</a>
					</div>
				</div>
				@else
				<div class="flex-1 xl:mt-0 lg:mt-0 md:mt-5 sm:mt-5">
					<a onclick="pieCity();" class="py-2 px-4 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per city</a>
				</div>
				<div class="flex-1 xl:mt-0 lg:mt-0 md:mt-5 sm:mt-5">
					<a onclick="pieAgency();" class="py-2 px-2 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per agency</a>
				</div>
				@endif
			</div>	
		</div>
		
</div>

<script type="text/javascript">
	
	function pieCity(){
		var year = @json($year);
		window.location.href= "http://localhost/NYC_OpenData/public/year/City/"+year;
	}

	function pieAgency(){
		var year = @json($year);
		window.location.href = "http://localhost/NYC_OpenData/public/year/agency/"+year;
	}
</script>