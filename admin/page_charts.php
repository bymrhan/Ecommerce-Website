<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Charts</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Live Chart (initialized at the bottom of this page) -->
    <h3 class="page-header page-header-top">Server Load <small>Live data demostration!</small> <span id="server-live" class="badge badge-danger">0%</span></h3>

    <div id="example-chart-live" class="chart-live"></div>
    <!-- END Live Chart -->

    <!-- Classic Charts (initialized at the bottom of this page) -->
    <h3 class="page-header">Classic Charts <small>All kinds of them</small></h3>

    <div class="row">
        <div class="col-md-6">
            <h3 class="page-header-sub">Lines with points and tooltips</h3>
            <div id="example-chart-classic" class="chart"></div>
        </div>
        <div class="col-md-6">
            <h3 class="page-header-sub">Bars</h3>
            <div id="example-chart-bars" class="chart"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-header-sub">Stacked Lines</h3>
            <div id="example-chart-stacked" class="chart"></div>
        </div>
        <div class="col-md-6">
            <h3 class="page-header-sub">Pie</h3>
            <div id="example-chart-pie" class="chart"></div>
        </div>
    </div>
    <!-- END Classic Charts -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        // Get the elements where we will attach the charts
        var chartLive       = $('#example-chart-live');
        var chartClassic    = $('#example-chart-classic');
        var chartBars       = $('#example-chart-bars');
        var chartStacked    = $('#example-chart-stacked');
        var chartPie        = $('#example-chart-pie');

        /* Live Chart */
        // Function for getting random data for our live chart
        var data = [];
        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // do a random walk
            while (data.length < 300) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }

            // Show percentage
            $("#server-live").html(y.toFixed(0) + '%');

            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]]);
            return res;
        }

        // Initialize live chart
        var liveOptions = {
            series: { shadowSize: 0 },
            lines: { show: true, lineWidth: 1.5, fill: true, fillColor: { colors: [{ opacity: 0.1 }, { opacity: 1 }] } },
            colors: ['#555555'],
            grid: { show: false },
            yaxis: { min: 0, max: 130 },
            xaxis: { show: false }
        };
        var chartLive = $.plot(chartLive, [ { data: getRandomData() } ], liveOptions);

        // Function for updating live chart
        function updateChartLive() {

            chartLive.setData([ getRandomData() ]);
            chartLive.draw();
            setTimeout(updateChartLive, 30);
        }
        updateChartLive();

        /* Classic Chart */
        var classicData1 = [
            [0, 200],
            [1, 250],
            [2, 360],
            [3, 584],
            [4, 1250],
            [5, 1100],
            [6, 1500],
            [7, 1521],
            [8, 1600],
            [9, 1658],
            [10, 1623],
            [11, 1900],
            [12, 2100],
            [13, 1700],
            [14, 1620],
            [15, 1820],
            [16, 1950],
            [17, 2220],
            [18, 1951],
            [19, 2152],
            [20, 2300],
            [21, 2325],
            [22, 2200],
            [23, 2156],
            [24, 2350],
            [25, 2420],
            [26, 2480],
            [27, 2320],
            [28, 2380],
            [29, 2520],
            [30, 2590]
        ];
        var classicData2 = [
            [0, 50],
            [1, 180],
            [2, 200],
            [3, 350],
            [4, 700],
            [5, 650],
            [6, 700],
            [7, 780],
            [8, 820],
            [9, 880],
            [10, 1200],
            [11, 1250],
            [12, 1500],
            [13, 1195],
            [14, 1300],
            [15, 1350],
            [16, 1460],
            [17, 1680],
            [18, 1368],
            [19, 1589],
            [20, 1780],
            [21, 2100],
            [22, 1962],
            [23, 1952],
            [24, 2110],
            [25, 2260],
            [26, 2298],
            [27, 1985],
            [28, 2252],
            [29, 2300],
            [30, 2450]
        ];

        // Initialize Classic Chart
        $.plot(chartClassic, [
            { data: classicData1, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.05 }, { opacity: 0.05 }] } }, points: { show: true }, label: 'All Visits' },
            { data: classicData2, lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.05 }, { opacity: 0.05 }] } }, points: { show: true }, label: 'Unique Visits' } ],
            {
                legend: {
                    position: 'nw',
                    backgroundColor: '#f6f6f6',
                    backgroundOpacity: 0.8
                },
                colors: ['#555555', '#db4a39'],
                grid: {
                    borderColor: '#cccccc',
                    color: '#999999',
                    labelMargin: 10,
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    ticks: 5
                },
                xaxis: {
                    tickSize: 2
                }
            }
        );

        // Creating and attaching a tooltip
        var previousPoint = null;
        chartClassic.bind("plothover", function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0],
                        y = item.datapoint[1];

                    $('<div id="tooltip" class="chart-tooltip"><strong>' + y +'</strong> visits</div>')
                        .css( { top: item.pageY - 30, left: item.pageX + 5 })
                        .appendTo("body")
                        .show();
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

        /* Bars Chart */
        var barsData = [[1, 30], [3, 60], [5, 45], [7, 50], [9, 10]];

        // Initialize Bars Chart
        $.plot(chartBars, [
            { data: barsData, bars: { show: true, fillColor: { colors: [{ opacity: 1 }, { opacity: 1 }] } }, label: 'Example label' } ],
            {
                legend: {
                    backgroundColor: '#f6f6f6',
                    backgroundOpacity: 0.8
                },
                colors: ['#39d5db'],
                grid: {
                    borderColor: '#cccccc',
                    color: '#999999',
                    labelMargin: 10
                },
                yaxis: {
                    ticks: 5
                },
                xaxis: {
                    tickSize: 1
                }
            }
        );

        /* Stacked Chart */
        var stackedData1 = [];
        for (var i = 0; i <= 10; i++)
            stackedData1.push([i, parseInt(Math.random() * 20)]);

        var stackedData2 = [];
        for (var i = 0; i <= 10; i++)
            stackedData2.push([i, parseInt(Math.random() * 20)]);

        var stackedData3 = [];
        for (var i = 0; i <= 10; i++)
            stackedData3.push([i, parseInt(Math.random() * 20)]);

        var stack = 0, bars = true, lines = false, steps = false;

        // Initialize Stacked Chart
        $.plot(chartStacked, [ { data: stackedData1, label: 'Blue' }, { data: stackedData2, label: 'Red' }, { data: stackedData3, label: 'Green' } ], {
            series: {
                stack: true,
                lines: { show: true, fill: true }
            },
            lines: { show: true, lineWidth: 1.5, fill: true, fillColor: { colors: [{ opacity: 1 }, { opacity: 1 }] } },
            legend: {
                backgroundColor: '#f6f6f6',
                backgroundOpacity: 0.8
            },
            colors: ['#39a8db', '#db4a39', '#a8db39'],
            grid: {
                borderColor: '#cccccc',
                color: '#999999',
                labelMargin: 10
            },
            yaxis: {
                ticks: 5
            },
            xaxis: {
                tickSize: 1
            }
        });

        /* Pie Chart */
        var pieData = [];
        var pieSeries = Math.floor(Math.random()*10)+1;
        for(var i = 0; i < 4; i++)
            pieData[i] = { label: 'Data ' + (i+1), data: Math.floor(Math.random()*100)+1 };

        // Initialize Pie Chart
        $.plot(chartPie, pieData,
        {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 3/4,
                        formatter: function(label, pieSeries){
                            return '<div class="chart-pie-label">' + label + '<br>' + Math.round(pieSeries.percent) + '%</div>';
                        },
                        background: {
                            opacity: 0.5,
                            color: '#000000'
                        }
                    }
                }
            },
            colors: ['#39a8db', '#db4a39', '#a8db39', '#39d5db'],
            legend: {
                show: false
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>