<!DOCTYPE html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawTotalActivityChart);
  
    function drawTotalActivityChart() {
        var data = google.visualization.arrayToDataTable([
            ['Time', 'Messages'],
            ['4am', Math.ceil(Math.random() * 1000)],
            ['5am', Math.ceil(Math.random() * 1000)],
            ['6am', Math.ceil(Math.random() * 1000)],
            ['7am', Math.ceil(Math.random() * 1000)],
            ['8am', Math.ceil(Math.random() * 1000)],
            ['9am', Math.ceil(Math.random() * 1000)],
            ['10am', Math.ceil(Math.random() * 1000)],
            ['11am', Math.ceil(Math.random() * 1000)],
            ['12pm', Math.ceil(Math.random() * 1000)]
        ]);

        var options = {
            title: 'Device Activity',
            legend: {position: 'bottom'},
            backgroundColor: '#E7E7E7'
        };

        var chart = new google.visualization.LineChart(
                document.getElementById('total-activity-chart'));
        chart.draw(data, options);
    }
    
    $( window ).resize(function() {
       drawTotalActivityChart();
    });
    
</script>

