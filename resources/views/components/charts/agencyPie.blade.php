<div class="flex-1">
	<div
	 class=" flex m-auto items-center bg-white  border-solid border-2 border-gray-300 shadow-md"
  	 style="width: 400px; height: 450px; z-index: -1;">
		<div style="width: 400px; height: 450px;">
			<canvas id="myChart"></canvas>
			<script type="text/javascript">
					var holder = @json($data);
			</script>
			<script type="text/javascript" src=" {{ asset('js/charts/agencyData.js')}} ">
			</script>
		</div>
	</div>
</div>	

<div class="flex-1 m-auto items-center">
	<div class="bg-white  font-semibold text-black shadow-xl xl:mt-0 lg:mt-0 md:mt-5 sm:mt-5">
		<div class="p-2 text-center">
				The pie chart represents the number of reports per agency from {{$year}}
		</div>
	</div>
</div>