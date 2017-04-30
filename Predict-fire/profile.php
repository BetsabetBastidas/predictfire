<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" type="image/x-icon" href="img/log.png">  

    <title>Profile | Predict Fire</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <script type="text/javascript">
    function post()
    {
        var satellite = document.getElementById('satellite').value;
        var region = document.getElementById('region').value;
        var time = document.getElementById('time').value;
        window.location = "Scraping.php?response_satellite=" +  satellite + "&response_region=" + region+ "&response_time=" + time;
    }

    function post_prediccion(satellite,region,time)
    {
        window.location = "PredictionWeather.php?response_satellite=" +  satellite + "&response_region=" + region+ "&response_time=" + time;
    }

    function post_prediccion_general()
    {
        var tipo = document.getElementById('tipo').value;
        var satellite = document.getElementById('satellite').value;
        var region = document.getElementById('region').value;
        var time = document.getElementById('time').value;

        if(tipo == "Fire")
        {
            post_prediccion(satellite,region,time);
        }
    }

  </script>

  <section id="container" style="margin-left: 130px">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="profile.php" class="logo">Predict Fire</a>
            <!--logo end-->            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
                            <?php
                                $link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
                                mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');
                                $cadena= "";
                                $query = "select fullnombre from temporal_login order by id desc limit 1;";
                                $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
                                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                                {            
                                    $id= utf8_encode(sprintf($row["fullnombre"]));
                                    $cadena = "<span class='username'>".$id."</span>";
                                }
                                mysql_free_result($result);     
                                mysql_close($link);
                                echo $cadena;
                            ?>                                                       
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="index.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->     
      
      <!--main content start-->
    <div>
      <section id="main-content">
          <section>            
              <!--overview start-->
            <div>
                <div>
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>                    
                </div>
            </div>
              
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-13">
                    <div class="info-box blue-bg">
                        <i class="fa fa-cloud-download"></i>
                        <?php
                            $link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
                            mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');
                            $cadena= "";
                            $query = "select count(ID) as num from record;";
                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
                            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                            {            
                                $id= sprintf("%s",$row["num"]);
                                $cadena = "<div class='count'>".$id."</div>";
                            }
                            mysql_free_result($result);     
                            mysql_close($link);
                            echo $cadena;
                        ?>
                        <div class="title">Records Downloaded</div>                       
                    </div><!--/.info-box-->         
                </div><!--/.col-->
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-13">
                    <div class="info-box brown-bg">
                        <i class="fa fa-compass"></i>
                        <?php
                            $link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
                            mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');
                            $cadena= "";
                            $query = "select count(ID) as num from region;";
                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
                            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                            {            
                                $id= sprintf("%s",$row["num"]);
                                $cadena = "<div class='count'>".$id."</div>";
                            }
                            mysql_free_result($result);     
                            mysql_close($link);
                            echo $cadena;
                        ?>
                        <div class="title">Number of Regions</div>                      
                    </div><!--/.info-box-->         
                </div><!--/.col-->                                 
            
        
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-13">
                    <div class="info-box dark-bg">
                        <i class="fa fa-eye"></i>
                        <?php
                            $link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
                            mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');
                            $cadena= "";
                            $query = "select count(id) as num from regaistro_login;";
                            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
                            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                            {            
                                $id= sprintf("%s",$row["num"]);
                                $cadena = "<div class='count'>".$id."</div>";
                            }
                            mysql_free_result($result);     
                            mysql_close($link);
                            echo $cadena;
                        ?>
                        <div class="title">Visits</div>                      
                    </div><!--/.info-box-->         
                </div><!--/.col-->
            </div><!--/.row-->

            <div class="row" style="margin-left: 1px">
                <div class="row">
                  <div class="col-lg-4">
                      <section class="panel">
                          <header class="panel-heading">Download Data</header>
                          <div class="panel-body">
                                  <form role="form" method="post" action="javascript:post()">
                                      <div class="form-group">
                                        <label>Satellite</label>
                                        <select id="satellite" class="form-control">
                                            <option selected value="MODIS_C6">MODIS</option>
                                            <option value = "VNP14IMGTDL_NRT">VIIRS</option>
                                        </select>
                                       </div>
                                      <div class="form-group">
                                        <label>Time</label>
                                        <select id="time" class="form-control">
                                            <option selected value="24h">24h</option>
                                            <option value = "48h">48h</option>
                                            <option value = "7d">7d</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                            <label>Region</label>
                                            <select id="region" class="form-control">
                                                <option selected value = "Global">World</option>
                                                <option value="Alska">Alaska</option>
                                                <option value="Australia_and_New_Zealand">Australia and New Zealand</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Central_America">Central America</option>
                                                <option value="Europe">Europe</option>
                                                <option value="Northern_and_Central_Africa">North and Central Africa</option>
                                                <option value="Russia_and_Asia">Russia and Asia</option>
                                                <option value="South_America">South America</option>
                                                <option value="South_Asia">South Asia</option>
                                                <option value="SouthEast_Asia">South East Asia</option>
                                                <option value="Southern_Africa">Southern Africa</option>
                                                <option value="USA_contiguous_and_Hawaii">USA (Conterminous) and Hawaii</option>
                                            </select>
                                        </div>
                                      <button class="btn btn-primary" type="submit">Download</button>   
                                  </form>
                                  </div>                                  
                      </section>
                    </div>
                    <div class="col-lg-5 col-md-3 col-sm-12 col-xs-13">
                        <section class="panel">
                            <header class="panel-heading">Scatter Plot</header>
                            <div id="charts_" style="text-align: center;height: 288px;width: 544px;">
                               <img src='Regresion_Logistica.php'>
                            </div>  
                        </section>
                    </div><!--/.col-->
                  </div>
              </div>           

           <div class="row">
            <div class="col-lg-9 col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>                            
                        </div>
                        <div class="panel-body-map">
                            <div id="map" style="height:380px;"></div>  
                        </div>
    
                    </div>
                </div>              
           </div>  
            
          
          <!-- Today status end -->
            
              
                
            <div class="row">
                
                <div class="col-lg-9 col-md-12">    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Latest Events</strong></h2>                            
                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                    <tr>
                                        <th>Region</th>
                                        <th>Date</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Brightness</th>
                                    </tr>
                                </thead>   
                                <tbody>
                                    <?php
                                        $link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
                                        mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');
                                        $cadena= "";
                                        $query = "Select reg.NOMBRE, rec.ACQ_DATE, rec.LATITUDE, rec.LONGITUDE, rec.BRIGHTNESS from region reg inner join record rec on reg.ID = rec.REGION order by rec.ACQ_DATE desc limit 0,20;";
                                        $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
                                        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                                        {            
                                            $cadena .= "<tr>";
                                            $id= ($row["NOMBRE"]);
                                            $dat= ($row["ACQ_DATE"]);
                                            $lat= ($row["LATITUDE"]);
                                            $lon= ($row["LONGITUDE"]);
                                            $bri= intval($row["BRIGHTNESS"]);
                                            $bri_cal = intval($bri / 5);
                                            $cadena .= "<td>".$id."</td><td>".$dat."</td><td>".$lat."</td><td>".$lon."</td>";
                                            $cadena .= "<td><div class='progress thin'><div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='".$bri_cal."' aria-valuemin='0' aria-valuemax='100' style='width: ".$bri_cal."%'></div><div class='progress-bar progress-bar-warning'";
                                            $cadena .= "role='progressbar' aria-valuenow='".(100-$bri_cal)."' aria-valuemin='0'  aria-valuemax='100' style='width: ".(100-$bri_cal)."%'></div></div><span class='sr-only'>".$bri_cal."%</span> </td>";
                                            $cadena .= "</tr>";
                                        }
                                        mysql_free_result($result);     
                                        mysql_close($link);
                                        echo $cadena;
                                    ?>
                                </tbody>
                            </table>
                        </div>
    
                    </div> 
                    </div>
                    </div>


                    <div class="row" style="margin-left: 1px">
                <div class="row">
                  <div class="col-lg-4">
                      <section class="panel">
                          <header class="panel-heading">Prediction Events Fire</header>
                          <div class="panel-body">
                                  <form role="form" method="post" action="javascript:post_prediccion_general()">
                                      <div class="form-group">
                                        <label>Option Prediction</label>
                                        <select id="tipo" class="form-control">
                                            <option selected value="Latitude_Longitude">Latitude y Longitude</option>
                                            <option value = "Fire">Fire</option>
                                        </select>
                                       </div>
                                      <div class="form-group">
                                        <label>Satellite</label>
                                        <select id="satellite" class="form-control">
                                            <option selected value="MODIS_C6">MODIS</option>
                                            <option value = "VNP14IMGTDL_NRT">VIIRS</option>
                                        </select>
                                       </div>
                                      <div class="form-group">
                                        <label>Time</label>
                                        <select id="time" class="form-control">
                                            <option selected value="24h">24h</option>
                                            <option value = "48h">48h</option>
                                            <option value = "7d">7d</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                            <label>Region</label>
                                            <select id="region" class="form-control">
                                                <option selected value = "Global">World</option>
                                                <option value="Alska">Alaska</option>
                                                <option value="Australia_and_New_Zealand">Australia and New Zealand</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Central_America">Central America</option>
                                                <option value="Europe">Europe</option>
                                                <option value="Northern_and_Central_Africa">North and Central Africa</option>
                                                <option value="Russia_and_Asia">Russia and Asia</option>
                                                <option value="South_America">South America</option>
                                                <option value="South_Asia">South Asia</option>
                                                <option value="SouthEast_Asia">South East Asia</option>
                                                <option value="Southern_Africa">Southern Africa</option>
                                                <option value="USA_contiguous_and_Hawaii">USA (Conterminous) and Hawaii</option>
                                            </select>
                                        </div>
                                      <button class="btn btn-primary" type="submit">Go</button>   
                                  </form>
                                  </div>                                  
                      </section>
                    </div>
                    <div class="col-lg-5 col-md-3 col-sm-12 col-xs-13">
                        <section class="panel">
                            <header class="panel-heading">Scatter Plot</header>
                            <div id="charts_" style="text-align: center;height: 355px;width: 544px;">
                               <img src='Regresion_Logistica_2.php'>
                            </div>  
                        </section>
                    </div><!--/.col-->
                  </div>
              </div>  

             <div class="row">
                <div class="col-lg-9 col-md-12">    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Latest Events</strong></h2>                            
                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                            </table>
                        </div>
                    </div>
                </div>
            </div>


                <!-- statics end -->
          </section>
      </section>
    </div>
      <!--main content end-->
  </section>

  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>  
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>    
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });
  </script>

  </body>
</html>