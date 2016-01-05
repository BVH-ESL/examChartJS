
<!--document url http://gionkunz.github.io/chartist-js/getting-started.html-->
<html>
    <head>
        <title>My first Chartist Tests</title>
        <link href="chartist-js-develop/dist/chartist.min.css" rel="stylesheet" type="text/css"/>
        <script src="chartist-js-develop/dist/chartist.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="ct-chart ct-golden-section" id="chart1"></div>
        <div class="ct-chart ct-golden-section" id="chart2"></div>

        <script>
            // Initialize a Line chart in the container with the ID chart1
            new Chartist.Line('#chart1', {
                labels: [1, 2, 3, 4],
                series: [[100, 120, 180, 200], [200, 180, 120, 100]]
            });

            // Initialize a Line chart in the container with the ID chart2
            new Chartist.Bar('#chart2', {
                labels: [1, 2, 3, 4],
                series: [[5, 2, 8, 3]]
            });
        </script>s
    </body>
</html>