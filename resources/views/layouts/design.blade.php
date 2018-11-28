<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="icon" href="{{asset('bnet/images/favicon.png')}}" type="image/x-icon"/>
    <link href="{{ asset('bnet/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('bnet/css/tool.css') }}">
    <link rel="stylesheet" href="{{ asset('bnet/css/layout.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bnet/css/components.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bnet/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bnet/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('bnet/css/export.css') }}">
    <link rel="stylesheet" href="{{ asset('js/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <style>
        .chart-content {
            width: 100%;
            padding-top: 400px;
            position: relative;
        }

        #diagram-line,
        #diagram-column {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>
  </head>
  <!-- END HEAD -->

  <body  class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper" id="main-right">
      @include('layouts.header')
      <!-- BEGIN HEADER & CONTENT DIVIDER -->
      <div class="clearfix"></div>
      <!-- END HEADER & CONTENT DIVIDER -->
      <!-- BEGIN CONTAINER -->
      <div class="page-container">
        <!-- BEGIN SIDEBAR -->
      @include('layouts.sidebar')
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
      @yield('content')
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
          <i class="icon-login"></i>
        </a>

        <!-- END QUICK SIDEBAR -->
      </div>
      <!-- END CONTAINER -->
      <!-- BEGIN FOOTER -->

      <!-- END FOOTER -->
    </div>
    <!--[if lt IE 9]>
      <script src="assets/global/plugins/respond.min.js"></script>
      <script src="assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('bnet/js/jquery-3.2.1.js') }}"></script>
    <!--js__bootstrap-->
    <script src="{{ asset('bnet/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bnet/js/amcharts.js') }}"></script>
    <script src="{{ asset('bnet/js/main.js') }}"></script>
    <script src="{{ asset('js/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/adminlte.min.js')}}"></script>
    <script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('js/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
        <script>
            $(".page-sidebar-menu .nav-item").click(function() {
                $(this).find(".sub-menu").slideToggle();
                $(this).siblings().find(".sub-menu").slideUp();
            });

            var chart = AmCharts.makeChart("diagram-column", {
                "type": "serial",
                "theme": "light",
                "dataProvider": [{
                    "country": "USA",
                    "visits": 2025
                }, {
                    "country": "China",
                    "visits": 1882
                }, {
                    "country": "Japan",
                    "visits": 1809
                }, {
                    "country": "Germany",
                    "visits": 1322
                }, {
                    "country": "UK",
                    "visits": 1122
                }, {
                    "country": "France",
                    "visits": 1114
                }, {
                    "country": "India",
                    "visits": 984
                }, {
                    "country": "Spain",
                    "visits": 711
                }, {
                    "country": "Netherlands",
                    "visits": 665
                }, {
                    "country": "Russia",
                    "visits": 580
                }, {
                    "country": "South Korea",
                    "visits": 443
                }, {
                    "country": "Canada",
                    "visits": 441
                }, {
                    "country": "Brazil",
                    "visits": 395
                }],
                "valueAxes": [{
                    "gridColor": "#FFFFFF",
                    "gridAlpha": 0.2,
                    "dashLength": 0
                }],
                "gridAboveGraphs": true,
                "startDuration": 1,
                "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "fillAlphas": 0.8,
                    "lineAlpha": 0.2,
                    "type": "column",
                    "valueField": "visits"
                }],
                "chartScrollbar": {},
                "chartCursor": {
                    "categoryBalloonEnabled": false,
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "categoryField": "country",
                "categoryAxis": {
                    "gridPosition": "start",
                    "gridAlpha": 0,
                    "tickPosition": "start",
                    "tickLength": 20
                },
            });

            var chart = AmCharts.makeChart("diagram-line", {
                "type": "serial",
                "theme": "light",
                "legend": {
                    "useGraphSettings": true
                },
                "dataProvider": [{
                    "year": 1930,
                    "italy": 5,
                    "germany": 5,
                    "uk": 3
                }, {
                    "year": 1934,
                    "italy": 4,
                    "germany": 2,
                    "uk": 6
                }, {
                    "year": 1938,
                    "italy": 2,
                    "germany": 3,
                    "uk": 1
                }, {
                    "year": 1950,
                    "italy": 3,
                    "germany": 4,
                    "uk": 1
                }, {
                    "year": 1954,
                    "italy": 5,
                    "germany": 1,
                    "uk": 2
                }, {
                    "year": 1958,
                    "italy": 3,
                    "germany": 2,
                    "uk": 1
                }, {
                    "year": 1962,
                    "italy": 1,
                    "germany": 2,
                    "uk": 3
                }, {
                    "year": 1966,
                    "italy": 2,
                    "germany": 1,
                    "uk": 5
                }, {
                    "year": 1970,
                    "italy": 3,
                    "germany": 5,
                    "uk": 2
                }, {
                    "year": 1974,
                    "italy": 4,
                    "germany": 3,
                    "uk": 6
                }, {
                    "year": 1978,
                    "italy": 1,
                    "germany": 2,
                    "uk": 4
                }],
                "valueAxes": [{
                    "integersOnly": true,
                    "maximum": 6,
                    "minimum": 1,
                    "reversed": false,
                    "axisAlpha": 0,
                    "dashLength": 5,
                    "gridCount": 10,
                    "position": "left",
                    "title": "Place taken"
                }],
                "startDuration": 0.5,

                "graphs": [{
                    "balloonText": "place taken by Italy in [[category]]: [[value]]",
                    "bullet": "round",
                    "hidden": true,
                    "title": "Italy",
                    "valueField": "italy",
                    "fillAlphas": 0,
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "Price",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                }, {
                    "balloonText": "place taken by Germany in [[category]]: [[value]]",
                    "bullet": "round",
                    "title": "Germany",
                    "valueField": "germany",
                    "fillAlphas": 0
                }, {
                    "balloonText": "place taken by UK in [[category]]: [[value]]",
                    "bullet": "round",
                    "title": "United Kingdom",
                    "valueField": "uk",
                    "fillAlphas": 0
                }],
                "chartScrollbar": {},
                "chartCursor": {
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "categoryField": "year",
                "categoryAxis": {
                    "gridPosition": "start",
                    "axisAlpha": 0,
                    "fillAlpha": 0.05,
                    "fillColor": "#000000",
                    "gridAlpha": 0,
                    "position": "bottom"
                },

            });

        </script>

  </body>
</html>
