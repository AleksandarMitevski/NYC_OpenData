var ctx = document.getElementById('RadarChart').getContext('2d');

var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
    labels: ['Running', 'Swimming', 'Eating', 'Cycling', 'Eating', 'Coding', 'Designing'],
    datasets: [{
    label: 'My first dataset',
    data: [65,59,90,81,56,55,40],
    fill: true,
     backgroundColor: 'rgba(255, 99, 132, 0.2)',
     borderColor: 'rgb(255,99,132)',
     pointBackgroundColor:'rgb(255, 99, 132)',

    }]
},
    options: {
        responsive: true,
        maintainAspectRatio: false,
    scale: {
        angleLines: {
            display: false
        },
        ticks: {
            suggestedMin: 50,
            suggestedMax: 100
        }
    }
}
});



/*
"type":"radar",
"data":{"labels":["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"],
"datasets":[{"label":"My First Dataset","data":[65,59,90,81,56,55,40],
"fill":true,"backgroundColor":"rgba(255, 99, 132, 0.2)","borderColor":"rgb(255, 99, 132)","pointBackgroundColor":"rgb(255, 99, 132)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(255, 99, 132)"},{"label":"My Second Dataset","data":[28,48,40,19,96,27,100],"fill":true,"backgroundColor":"rgba(54, 162, 235, 0.2)","borderColor":"rgb(54, 162, 235)","pointBackgroundColor":"rgb(54, 162, 235)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(54, 162, 235)"}]},
"options":{"elements":{"line":{"tension":0,"borderWidth":3}}}; */