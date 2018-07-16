@extends('layouts.template')

@section('content')


<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-md-8">
    	<div class="card">
            <div class="card-body">
                <h4 class="card-title">Прибыль за последние 6 месяцев</h4>
                <div>
                    <canvas id="chart2" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Новые водители</h4>
                <div>
                    <canvas id="chart1" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-4">
        <div class="card">
            <img class="" src="../assets/images/background/weatherbg.jpg" alt="Card image cap">
            <div class="card-img-overlay">
                <h3 class="card-title text-white m-b-0 dl">Санкт-Петербург</h3>
                <small class="card-text text-white font-light">18 июня</small>
            </div>
            <div class="card-body weather-small">
                <div class="row">
                    <div class="col-8 b-r align-self-center">
                        <div class="d-flex">
                            <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                            <div class="m-l-20">
                                <h1 class="font-light text-info m-b-0">26<sup>0</sup></h1>
                                <small>Дождливо</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <h1 class="font-light m-b-0">19<sup>0</sup></h1>
                        <small>Ночью</small>
                    </div>
                </div>
            </div>
        </div>
    	<div class="card">
            <div class="card-body">
                <h4 class="card-title">Послледние события</h4>
                <div class="message-box">
                    <div class="message-widget">
                        <a href="#">
                            <div class="user-img"> <span class="round">В</span> </div>
                            <div class="mail-contnet">
                                <h5>Новый водитель</h5> <span class="mail-desc"></span> <span class="time">9:08</span> </div>
                        </a>
                        <a href="#">
                            <div class="user-img"> <span class="round">М</span> </div>
                            <div class="mail-contnet">
                                <h5>Новый менеджер</h5> <span class="mail-desc"></span> <span class="time">21:08</span> </div>
                        </a>
                        <a href="#">
                            <div class="user-img"> <span class="round">А</span> </div>
                            <div class="mail-contnet">
                                <h5>Автомобиль сдан в аренду</h5> <span class="mail-desc"></span> <span class="time">19:38</span> </div>
                        </a>
                        <a href="#">
                            <div class="user-img"> <span class="round">Ш</span> </div>
                            <div class="mail-contnet">
                                <h5>Найден новый штраф</h5> <span class="mail-desc"></span> <span class="time">19:38</span> </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>



@endsection
@section('bottom_assets')
   <!-- Chart JS -->
   <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>
    <script>
        var ctx1 = document.getElementById("chart1").getContext("2d");
    var data1 = {
        labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль"],
        datasets: [
            {
                label: "My Second dataset",
                fillColor: "rgba(243,245,246,0.9)",
                strokeColor: "rgba(243,245,246,0.9)",
                pointColor: "rgba(243,245,246,0.9)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(243,245,246,0.9)",
                data: [16, 4, 55, 43, 3, 23, 1]
            }
            
        ],
        
    };
    Chart.types.Line.extend({
      name: "LineAlt",
      initialize: function () {
        Chart.types.Line.prototype.initialize.apply(this, arguments);

        var ctx = this.chart.ctx;
        var originalStroke = ctx.stroke;
        ctx1.stroke = function () {
          ctx1.save();
          ctx1.shadowColor = 'rgba(0, 0, 0, 0.4)';
          ctx1.shadowBlur = 10;
          ctx1.shadowOffsetX = 8;
          ctx1.shadowOffsetY = 8;
          originalStroke.apply(this, arguments)
          ctx1.restore();

        }
      }
    });
    var chart1 = new Chart(ctx1).LineAlt(data1, {
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.005)",
        scaleGridLineWidth : 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        bezierCurve : true,
        bezierCurveTension : 0.4,
        pointDot : true,
        pointDotRadius : 4,
        pointDotStrokeWidth : 2,
        pointHitDetectionRadius : 2,
        datasetStroke : true,
        tooltipCornerRadius: 2,
        datasetStrokeWidth : 0,
        datasetFill : false,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });


        var ctx2 = document.getElementById("chart2").getContext("2d");
        var data2 = {
            labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль"],
            datasets: [
                {
                    label: "Прибыль за последние пол года",
                    fillColor: "#009efb",
                    strokeColor: "#009efb",
                    highlightFill: "#009efb",
                    highlightStroke: "#009efb",
                    data: [1000000, 3000000, 8000000, 6100000, 260000, 750000, 40000]
                }
            ]
        };
        
        var chart2 = new Chart(ctx2).Bar(data2, {
            scaleBeginAtZero : true,
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            barShowStroke : true,
            barStrokeWidth : 0,
            tooltipCornerRadius: 2,
            barDatasetSpacing : 3,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
    </script>
        


@endsection