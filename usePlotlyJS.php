<!--ref url https://plot.ly/javascript/-->
<head>
    <!-- Plotly.js -->
    <!--<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>-->
    <script src="plotly-latest.min.js" type="text/javascript"></script>
</head>

<body>

    <div id="myDiv" style="width: 480px; height: 400px;"><!-- Plotly chart will be drawn inside this DIV --></div>
    <script>
        var trace1 = {
            x: [1, 2, 3, 4],
            y: [10, 15, 13, 17],
            type: 'scatter'
        };
        var trace2 = {
            x: [1, 2, 3, 4],
            y: [16, 5, 11, 9],
            type: 'scatter'
        };
        var data = [trace1, trace2];
        Plotly.newPlot('myDiv', data);
    </script>
</body>