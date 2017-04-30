<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile | Predict Fire</title>    
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="height: 600px"></div>
    <script type="text/javascript">
        // Give the points a 3D feel by adding a radial gradient
        Highcharts.getOptions().colors = $.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: {
                    cx: 0.4,
                    cy: 0.3,
                    r: 0.5
                },
                stops: [
                    [0, color],
                    [1, Highcharts.Color(color).brighten(-0.2).get('rgb')]
                ]
            };
        });

        // Set up the chart
        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                margin: 100,
                type: 'scatter',
                options3d: {
                    enabled: true,
                    alpha: 10,
                    beta: 30,
                    depth: 250,
                    viewDistance: 5,
                    fitToPlot: false,
                    frame: {
                        bottom: { size: 1, color: 'rgba(0,0,0,0.02)' },
                        back: { size: 1, color: 'rgba(0,0,0,0.04)' },
                        side: { size: 1, color: 'rgba(0,0,0,0.06)' }
                    }
                }
            },
             title: {
                text: 'Draggable box'
            },
            subtitle: {
                text: 'Click and drag the plot area to rotate in space'
            },
            yAxis: {
                min: 0,
                max: 10,
                title: null
            },
            xAxis: {
                min: 0,
                max: 10,
                gridLineWidth: 1
            },
            zAxis: {
                min: 0,
                max: 10,
                showFirstLabel: false
            },
            legend: {
                enabled: false
            },
            series: [{
                name: 'Reading',
                colorByPoint: true,
                data: [<?php 
                            $link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
                            mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');
                            $cadena= "";
                            $query = "Select LATITUDE, LONGITUDE, BRIGHTNESS from record order by ACQ_DATE desc limit 0,100;";
                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
                            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                            {            
                                $lat= intval($row["LATITUDE"]);
                                $lon= intval($row["LONGITUDE"]);
                                $bri= intval($row["BRIGHTNESS"]);                                
                                $cadena .= "[".$lat.",".$lon.",".$bri."],";                                
                            }
                            $cadena = trim($cadena,',');
                            mysql_free_result($result);     
                            mysql_close($link);
                            echo $cadena; ?>]
            }]
        });


        // Add mouse events for rotation
        $(chart.container).on('mousedown.hc touchstart.hc', function (eStart) {
            eStart = chart.pointer.normalize(eStart);

            var posX = eStart.pageX,
                posY = eStart.pageY,
                alpha = chart.options.chart.options3d.alpha,
                beta = chart.options.chart.options3d.beta,
                newAlpha,
                newBeta,
                sensitivity = 5; // lower is more sensitive

            $(document).on({
                'mousemove.hc touchdrag.hc': function (e) {
                    // Run beta
                    newBeta = beta + (posX - e.pageX) / sensitivity;
                    chart.options.chart.options3d.beta = newBeta;

                    // Run alpha
                    newAlpha = alpha + (e.pageY - posY) / sensitivity;
                    chart.options.chart.options3d.alpha = newAlpha;

                    chart.redraw(false);
                },
                'mouseup touchend': function () {
                    $(document).off('.hc');
                }
            });
        });    
    </script>

  </body>
</html>