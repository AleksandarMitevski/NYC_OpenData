var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2010','2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020'],
        datasets: [{
            label: '# of reports per year',
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
            holder[9].count_created_date,
            holder[10].count_created_date
            ],
            
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                '#7679DB',
                '#76D19E',
                '#56CEC6',
                '#CE56A2',
                '#772459',
                '#BA4357'            
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                '#5156DA',
                '#56CE8A'
            ],
            borderWidth: 1
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