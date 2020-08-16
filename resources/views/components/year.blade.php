<div class="flex h-screen">
	<div class="m-auto">
		<div class="bg-white px-10 py-10 rounded">
		
		<form 
		onsubmit="return yearAlert()"
		 method="GET" id="yearSelect">
		
		<label class="text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Choose a year</label>
			
			<select name="year" id="year" form="yearSelect" class="border-solid border-2 border-gray-800 px-4 py-2" required>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select>

			<input type="submit" name="submit" value="Extract Data"
			 class="mt-5 py-2 px-4 block text-gray-800 text-lg font-bold rounded m-auto cursor-pointer bg-white hover:text-black focus:outline-none focus:shadow-none">

			<div class="text-red-900">
				<p id="yearOutOfInterval"></p>
			</div>
		</form>
		
		</div>
	</div>
</div>

<script type="text/javascript">
	function yearAlert(){
		var yy = document.getElementById("year").value;

		if(yy<2004 || yy>2020){
			document.getElementById("yearOutOfInterval").innerHTML = "The year "+yy+ " is out of the interval. Please pick a valid year.";
				return false;
		}else if(yy>=2010 && yy <=2020){ alert("Results from years 2010-2020 may take longer to load");
			window.location = 'http://localhost/NYC_OpenData/public/year/' + year.value; return false
		}else{
			window.location = 'http://localhost/NYC_OpenData/public/year/' + year.value; return false
		}
	}
</script>