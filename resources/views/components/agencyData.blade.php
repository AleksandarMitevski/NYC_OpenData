
<div class="container mx-auto px-5">

	<div class="container mt-3 bg-white rounded">

		<div class="flex items-center w-full">

			<div class="ml-5 text-xl flex-1 text-center text-black font-semibold">
				Data from {{$year}}
			</div>

			<div class="flex-1">
				<div class="flex ">

					<div class="text-m text-black font-semibold">
					<b>311</b> is a non-emergency phone number that people can call in many cities to find information about services, make complaints, or report problems like graffiti or road damage.
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container mt-10">
		<div class="flex items-center">
				<div class="flex-1">
					<div
					 class=" flex m-auto items-center bg-white rounded border-solid border-2 border-gray-300 shadow-md"
				  	 style="width: 400px; height: 450px; z-index: -1;">
						<div style="width: 400px; height: 450px;">
							<canvas id="myChart"></canvas>
							<script type="text/javascript">
								var holder = @json($data);
							</script>
							<script type="text/javascript" src=" {{ asset('js/charts/AgencyData.js')}} ">
							</script>
						
						</div>
					</div>
				</div>
					
				<div class="flex-1">
					<div class=" max-w-sm bg-white text-xl rounded-lg font-semibold text-black shadow-xl">
					<div class="p-2 text-center">
						@if($year=='2010-2020')
						The pie chart represents the number of reports per agency from the decade {{$year}}
						@else
						The pie chart represents the number of reports per agency from the year {{$year}}
						@endif
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-20 ml-8 mx-auto">
			<div class="flex text-center">
				@if($year=='2010-2020')
				<div class="flex-1">
					<div style="width: 450px;">
					<a href="{{Route('AggData')}}" class="py-2 px-4 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer hover:text-black focus:outline-none focus:shadow-none">Bar chart for the amount of reports per year from 2010 to 2020</a>
					</div>
				</div>
				<div class="flex-1">
					<div style="width: 450px;">
					<a href="{{Route('AggCData')}}" class="py-2 px-2 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per city from 2010 to 2020</a>
					</div>
				</div>
				@else
				<div class="flex-1">
					<a onclick="barData();" class="py-2 px-4 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none">Bar chart for the amount of reports per month</a>
				</div>
				<div class="flex-1">
					<a onclick="pieCity();" class="py-2 px-2 text-gray-800 text-lg font-bold rounded m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none">Pie chart for the amount of reports per city</a>
				</div>
				@endif
			</div>	
		</div>
		
</div>

<script type="text/javascript">
	
	function barData(){
		var year = @json($year);
		window.location.href= "http://localhost/NYC_OpenData/public/year/"+year;
	}

	function pieCity(){
		var year = @json($year);
		window.location.href = "http://localhost/NYC_OpenData/public/year/City/"+year;
	}

</script>