var ctx = document.getElementById('myChart').getContext('2d');

var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
    	
    	labels: [
    		holder[0].agency_name,
    		holder[1].agency_name,
    		holder[2].agency_name,
    		holder[3].agency_name,
    		holder[4].agency_name,
    		holder[5].agency_name,
    		holder[6].agency_name,
    		holder[7].agency_name,
    		holder[8].agency_name,
    		holder[9].agency_name
    	],

    	datasets: [{
    		data: [
    		holder[0].count_created_date,
    		holder[1].count_created_date,
    		holder[2].count_created_date,
    		holder[3].count_created_date,
    		holder[4].count_created_date,
    		holder[5].count_created_date,
    		holder[6].count_created_date,
    		holder[7].count_created_date,
    		holder[8].count_created_date,
    		holder[9].count_created_date
    		],

    	backgroundColor: [
                '#8fff78',
                '#BA4357',
                '#772459',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                '#7679DB',
                '#76D19E',
                '#56CEC6',
                '#CE56A2'
    	]
    }]
	},
    options: {
    responsive: true,
    maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});