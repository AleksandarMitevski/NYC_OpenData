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