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
			The pie chart represents the ten cities with the most reports from {{$year}}
		</div>
	</div>
</div>