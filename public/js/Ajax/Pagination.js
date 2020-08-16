		
		document.getElementById('NextValues').addEventListener('click', LoadData);


		function LoadData(){
			var xhr = new XMLHttpRequest();
			
			xhr.open('GET','https://data.cityofnewyork.us/resource/3rfa-3xsf.json?$limit=10&$offset='+pagination,true);

			xhr.onload = function(){
		        if(this.status == 200){
		          var users = JSON.parse(this.responseText);

	      var output = '<table class="table-auto">'+
	       '<tr>'+
	       '<th class="px-4 py-2">Unique key</th>'+
	       '<th class="px-4 py-2">Date of Creation</th>'+
	       '<th class="px-4 py-2">Agency</th>'+
	       '<th class="px-4 py-2">Complaint Type</th>'+
	       '<th class="px-4 py-2">Borough</th>'+
	       '<th class="px-4 py-2">Status</th>'+
	       '</tr>';

      for(var i in users){
      	
            output +=
            '<tr>'+
				'<td class="border px-4 py-2">' + users[i].unique_key + '</td>'+
				'<td class="border px-4 py-2">' + users[i].created_date + '</td>'+
				'<td class="border px-4 py-2">' + users[i].agency_name + '</td>'+
				'<td class="border px-4 py-2">' + users[i].complaint_type + '</td>'+
				'<td class="border px-4 py-2">' + users[i].borough + '</td>'+
				'<td class="border px-4 py-2">' + users[i].status + '</td>'
          	'</tr>';

		      }
		      output+='</table>'
		         document.getElementById('TableData').innerHTML = output;
		        }
		      }
      		pagination+=10;
			xhr.send();
		}