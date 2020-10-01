<div class="container mx-auto px-5">
	<div class="container mt-10">
		<div class="flex items-center xl:flex lg:flex md:block sm:block">
				<div class="flex-1">
					<div
					 class=" flex m-auto items-center bg-white border-solid border-2 border-gray-300 shadow-md"
				  	 style="width: 320px; height: 320px; z-index: -1;">
						<div style="width: 300px; height: 300px;">
							
							<canvas id="myChart"></canvas>
							<script type="text/javascript">
								var holder = @json($data); 
							</script>
							<script type="text/javascript" src=" {{ asset('js/charts/pie.js')}} ">
							</script> 
						
						</div>
					</div>
				</div>
					
				<div class="flex-1 m-auto items-center">
					<div class="xl:mt-0 lg:mt-0 md:mt-5 sm:mt-5 bg-white font-semibold text-black shadow-xl">
					<div class="p-2 text-center">
						The pie chart represents the ten cities with the most reports from the year {{$year}}
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-20 mx-auto">
			<div class="flex text-center xl:flex lg:flex md:block sm:block">
				@if($year=='2010-2020')
				<div class="flex-1">
					<div style="width:450px; ">
					<a href="{{Route('AggData')}}" class="py-2 px-4 text-gray-800 text-lg font-bold m-auto cursor-pointer hover:text-black focus:outline-none focus:shadow-none"> Bar chart for the number of reports per year from 2010-2020</a>
					</div>
				</div>
				<div class="flex-1">
					<div style="width: 450px;">
					<a href="{{Route('AggAData')}}" class="py-2 px-2 text-gray-800 text-lg font-bold m-auto cursor-pointer hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per agency from 2010-2020</a>
					</div>
				</div>
				@else
				<div class="flex-1 xl:mt-0 lg:mt-0 md:mt-5 sm:mt-10">
					<a onclick="monthBar();" class="py-2 px-4 text-gray-800 text-lg font-bold m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none"> Bar chart for the number of reports per month</a>
				</div>
				<div class="flex-1 xl:mt-0 lg:mt-0 md:mt-5 sm:mt-10">
					<a onclick="pieAgency();" class="py-2 px-2 text-gray-800 text-lg font-bold m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per agency</a>
				</div>
				@endif
			</div>	
		</div>
		
</div>

<script type="text/javascript">
	
	function monthBar(){
		var year = @json($year);
		window.location.href= "http://localhost/NYC_OpenData/public/year/"+year;
	}

	function pieAgency(){
		var year = @json($year);
		window.location.href = "http://localhost/NYC_OpenData/public/year/agency/"+year;
	}
</script>
