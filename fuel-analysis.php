<!DOCTYPE html>
<html>
<head>
    <title>Fuel Analysis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Fuel Analysis</h2>
        <div id="fuelChart"></div>
        <div id="dateChart"></div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Location</th>
                    <th>Fuel Filled</th>
                    <th>Date</th>
                    <th>Vendor name (IOC/BPCL)</th>
                    <th>Approve</th>
                    <th>Disapprove</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nashik</td>
                    <td>100 liters</td>
                    <td>2023-01-01</td>
                    <td>IOC</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Vellore</td>
                    <td>200 liters</td>
                    <td>2023-01-02</td>
                    <td>BPCL</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bengaluru</td>
                    <td>150 liters</td>
                    <td>2023-01-03</td>
                    <td>IOC</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Lucknow</td>
                    <td>300 liters</td>
                    <td>2023-01-04</td>
                    <td>BPCL</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0"></script>
    <script>
        // Pie chart
        const fuelData = {
            series: [3, 2], // Number of fuel filled via IOC and BPCL respectively
            labels: ['IOC', 'BPCL']
        };
        const fuelChartOptions = {
            chart: {
                type: 'pie',
                height: 300
            },
            labels: fuelData.labels,
            series: fuelData.series,
            colors: ['#008FFB', '#00E396'],
            legend: {
                position: 'bottom'
            }
        };
        const fuelChart = new ApexCharts(document.querySelector("#fuelChart"), fuelChartOptions);
        fuelChart.render();

        // Bar chart
        const dateData = {
            series: [{
                name: 'Fuel Filled',
                data: [100, 200, 150, 300] // Fuel filled on each date
            }],
            xaxis: {
                categories: ['2023-01-01', '2023-01-02', '2023-01-03', '2023-01-04'] // Dates
            }
        };
        const dateChartOptions = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: dateData.series,
            xaxis: dateData.xaxis,
            colors: ['#FF4560'],
            legend: {
                position: 'bottom'
            }
        };
        const dateChart = new ApexCharts(document.querySelector("#dateChart"), dateChartOptions);
        dateChart.render();
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    
    <div class="container">
        <h2>Fuel Analysis</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Location</th>
                    <th>Fuel Filled</th>
                    <th>Date</th>
                    <th>Vendor name (IOC/BPCL)</th>
                    <th>Approve</th>
                    <th>Disapprove</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Location 1</td>
                    <td>100 liters</td>
                    <td>2023-01-01</td>
                    <td>IOC</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Location 2</td>
                    <td>200 liters</td>
                    <td>2023-01-02</td>
                    <td>BPCL</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Location 3</td>
                    <td>150 liters</td>
                    <td>2023-01-03</td>
                    <td>IOC</td>
                    <td><button class="btn btn-success">Approve</button></td>
                    <td><button class="btn btn-danger">Disapprove</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Location 4</td>
                    <td>300 liters</td>
                    <td>2023-01-04</td>
                    <td>BPCL</td>
                    <td><button class="btn btn-success">Approve</button></td>
            60table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
