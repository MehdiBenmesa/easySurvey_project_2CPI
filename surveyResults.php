<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Analyse</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
    <link href="css/googleapis.css" rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <div class="cd-logo"><a href="" onclick="window.history.go(-2);"><img src="img/logo.png" alt="Logo"></a></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding"class="selected">Ens <?php echo $_SESSION['name'];?></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#S"class="selected"> Analyse des données </a></li>
            <script>

            </script>

        </ul> <!-- cd-main-nav -->
    </nav>


    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>
<div>
    <div class="col-lg-10 question" id="question" style="display: none;">
        <div class="panel">
            <div class="panel-heading" id="text">
            </div>
            <section id="stat" style="display: none"></section>
            <section id="morris" style="display: none">
            </section>
            <section id="freeReponse" class="free"></section>
        </div>
    </div>
    <table id="table" style="display: none">
        <thead>
        <tr>
            <th>Reponses</th>
            <th>Effectifs</th>
            <th>Pourcentage</th>
        </tr>
        </thead>
        <tbody>
        <tr id="reponses" style="display: none">
            <td id="re">Tent</td>
            <td id="eff">1</td>
            <td id="cent"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th colspan="1">Total</th>
            <th id="total">$667.90</th>
        </tr>
        </tfoot>
    </table>
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="username"><?php echo $_SESSION['name'];?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="logout.php"><i class="icon-key"></i>Deconnexion</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</div>
<!--menu lateral Gauche
debut-->
<div class="container-fluid">
    <div class="row">
        <section class="col-lg-9" style="top: 60px" id="surveyResults">
            <div id="surveyInfo" class="center-block">
                <h3 id="surveyName">Nom De Sondage :</h3>
                <h4 id="module">Module Ou Service :</h4>
                <h4 id="fin">Date de La Fin :</h4>
                <h4 id="nbp">Nombre de Participants :</h4>
                <h4>Description:</h4>
                <p id="description"></p>

            </div>
        </section>
        <section id="profile_ens"  class="profile-nav alt green-border col-lg-3 col-sm-3 col-md-3" >
            <section class="panel" style="margin-top: 100px" >
                <div class="user-heading alt green-bg" style="">
                    <a href="#">
                        <img alt="" src="img/profile-avatar.jpg">
                    </a>
                    <h1>Mr <?php echo $_SESSION['name'];?></h1>
                    <p><?php echo $_SESSION['email'];?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="InfoProfile.php"> <i class="icon-calendar"></i> Profile </a></li>
                    <li><a href="logout.php">  Déconnexion </a></li>
                </ul>
            </section>
            <a href="#" class="alert-info" id="downloadLink">Exporter HTML</a>
            <a href="" class="alert-info" id="exportEXCEL">Exporter EXCEL</a>


        </section>


    </div>

</div>

</body>
<style>

</style>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/morris.js"></script>
<script src="js/raphael-min.js"></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/highcharts-export.js"></script>

<script src="js/export-svc.js"></script>




<script>
    $(document).ready(function(){
        d = 1;
        l = 1;
        Q = 1;
        s = 1;
        m = 1;
        t = 1;
        r = 1;
        var id = window.location.search.substr(4,window.location.search.length);
        $('#exportEXCEL').attr('href','excel.php?id='+id);
        $.post('getSurveyInfo.php',{id : id},function(data){
            data = JSON.parse(data);
            $('#surveyName').append(data['name']);
            $('#module').append(data['module']);
            $('#fin').append(data['fin'].substring(0,10));
            $('#description').html(data['description']);
            $('#nbp').append(data['participants']);
        });
        $.post('getSurveyData.php',{id : id}, function(data){
            data = JSON.parse(data);
            for(var i = 0 ;i < data.length; i++){
                switch (/*type*/data[i][1]){

                    case  'dich':
                        var clone = $('#question').clone();
                        clone.css('display','');
                        clone.attr('id',data[i][0]);
                        clone.find('#text').html(data[i][0]);
                        clone.find('#morris').css('display','block');
                        clone.find('#morris').attr('id','d'+d);
                        $('#surveyResults').append(clone);
                        var total = data[i][2][0][1]+data[i][2][1][1];
                        var table = $('#table').clone();
                        table.attr('id','t'+t);
                        t++;
                        table.css('display','table');
                        var reponse = $('#reponses').clone();
                        reponse.attr('id','r'+r);
                        r++;
                        reponse.css('display','table-row');
                        reponse.find('#re').html( data[i][2][0][0]);
                        reponse.find('#eff').html(data[i][2][0][1]);
                        reponse.find('#cent').html(Math.floor(data[i][2][0][1]/total*100)+"%");
                        table.find('tbody').append(reponse);

                        var reponse2 = $('#reponses').clone();
                        reponse2.attr('id','r'+r);
                        r++;
                        reponse2.css('display','table-row');
                        reponse2.find('#re').html( data[i][2][1][0]);
                        reponse2.find('#eff').html(data[i][2][1][1]);
                        reponse2.find('#cent').html(Math.floor(data[i][2][1][1]/total*100)+"%");
                        table.find('#total').html(total);
                        table.find('tbody').append(reponse2);
                        clone.find('#stat').css('display','block');
                        clone.find('#stat').html(table);
                        $('#d'+d).highcharts({
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: true
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            title: {
                                text: 'Q'+Q
                            },
                            plotOptions: {
                                pie: {
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                        style: {
                                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                        }
                                    }
                                }
                            },
                            series:[{
                                type: 'pie',
                                name: data[i][0],
                                data: [
                                    {name: data[i][2][0][0], y: data[i][2][0][1]},
                                    {name: data[i][2][1][0], y: data[i][2][1][1]}
                                ]
                            }]
                        });
                        d++;
                        Q++;

                        /*   Morris.Donut({
                               element : data[i][0]+'d',
                               data : [
                                   {label: data[i][2][0][0], value: data[i][2][0][1]},
                                   {label: data[i][2][1][0], value: data[i][2][1][1]}
                               ],
                               formatter: function (y) { return Math.floor(y/total*100) + "%" },
                               resize : true
                           });*/
                        break;

                    case 'level':
                        var clone = $('#question').clone();
                        clone.css('display','block');
                        clone.attr('id',data[i][0]);
                        clone.find('#text').html(data[i][0]);
                        var some = data[i][2][0][1]+ data[i][2][1][1]+ data[i][2][2][1]+ data[i][2][3][1]+ data[i][2][4][1];
                        clone.find('#morris').css('display','block');
                        clone.find('#morris').attr('id','l'+l);
                        $('#surveyResults').append(clone);
                        var table = $('#table').clone();
                        table.attr('id','t'+t);
                        t++;
                        table.css('display','table');
                        var reponse = $('#reponses').clone();
                        reponse.attr('id','r'+r);
                        r++;
                        reponse.css('display','table-row');
                        reponse.find('#re').html( data[i][2][0][0]);
                        reponse.find('#eff').html(data[i][2][0][1]);
                        reponse.find('#cent').html(Math.floor(data[i][2][0][1]/some*100)+"%");
                        table.find('tbody').append(reponse);

                        var reponse2 = $('#reponses').clone();
                        reponse2.attr('id','r'+r);
                        r++;
                        reponse2.css('display','table-row');
                        reponse2.find('#re').html( data[i][2][1][0]);
                        reponse2.find('#eff').html(data[i][2][1][1]);
                        reponse2.find('#cent').html(Math.floor(data[i][2][1][1]/some*100)+"%");
                        table.find('#total').html(total);
                        table.find('tbody').append(reponse2);

                        var reponse3 = $('#reponses').clone();
                        reponse3.attr('id','r'+r);
                        r++;
                        reponse3.css('display','table-row');
                        reponse3.find('#re').html( data[i][2][2][0]);
                        reponse3.find('#eff').html(data[i][2][2][1]);
                        reponse3.find('#cent').html(Math.floor(data[i][2][2][1]/some*100)+"%");
                        table.find('#total').html(total);
                        table.find('tbody').append(reponse3);

                        var reponse4 = $('#reponses').clone();
                        reponse4.attr('id','r'+r);
                        r++;
                        reponse4.css('display','table-row');
                        reponse4.find('#re').html( data[i][2][3][0]);
                        reponse4.find('#eff').html(data[i][2][3][1]);
                        reponse4.find('#cent').html(Math.floor(data[i][2][3][1]/some*100)+"%");
                        table.find('#total').html(total);
                        table.find('tbody').append(reponse4);

                        var reponse5 = $('#reponses').clone();
                        reponse5.attr('id','r'+r);
                        r++;
                        reponse5.css('display','table-row');
                        reponse5.find('#re').html( data[i][2][4][0]);
                        reponse5.find('#eff').html(data[i][2][4][1]);
                        reponse5.find('#cent').html(Math.floor(data[i][2][4][1]/some*100)+"%");
                        table.find('#total').html(total);
                        table.find('tbody').append(reponse5);
                        clone.find('#stat').css('display','block');
                        clone.find('#stat').html(table);
                        var total = some;

                        $('#l'+l).highcharts({
                            chart: {
                                type: 'bar'
                            },
                            colors: ['#4572A9'],
                            xAxis: {
                                categories: [data[i][2][0][0], data[i][2][1][0], data[i][2][2][0], data[i][2][3][0], data[i][2][4][0]]
                            },
                            yAxis: {
                                min: 0,
                                title:{
                                    text:data[i][0]
                                }
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'normal'
                                },
                                bar :{
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                        }
                                    }
                                }

                            },
                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.x + ':</b><br/>'+Math.floor( this.y *100 /total)+'%';
                                }
                            },
                            title: {
                                text: 'Q'+Q
                            },
                            series: [{
                                data: [
                                    {name: data[i][2][0][0], y: data[i][2][0][1]},
                                    {name: data[i][2][1][0], y: data[i][2][1][1]},
                                    {name: data[i][2][2][0], y: data[i][2][2][1]},
                                    {name: data[i][2][3][0], y: data[i][2][3][1]},
                                    {name: data[i][2][4][0], y: data[i][2][4][1]}
                                ]
                            }]
                        });
                        l++;
                        Q++;
                     /*   Morris.Bar({
                            element : data[i][0]+'l',
                            data : [
                                {x: data[i][2][0][0], y: data[i][2][0][1]},
                                {x: data[i][2][1][0], y: data[i][2][1][1]},
                                {x: data[i][2][2][0], y: data[i][2][2][1]},
                                {x: data[i][2][3][0], y: data[i][2][3][1]},
                                {x: data[i][2][4][0], y: data[i][2][4][1]}
                            ],
                            xkey: 'x',
                            ykeys: 'y',
                            labels: ['Frequence'],
                            resize: true,
                            stacked : true,
                            barColors: function (row, series, type) {
                                if (type === 'bar') {
                                    var green = Math.ceil(255 * row.y / this.ymax);
                                    return 'rgb(100, '+green + ',120)';
                                }
                                else {
                                    return '#000';
                                }
                            }
                        });*/
                        break;
                    case 'free':
                        var clone = $('#question').clone();
                        clone.css('display','block');
                        clone.attr('id',data[i][0]);
                        clone.find('#text').html(data[i][0]);
                        for(var j = 0; j < data[i][3].length; j++ ){
                            clone.find('#freeReponse').append("<p class='free'>"+data[i][3][j]+"</p>");
                        }
                        $('#surveyResults').append(clone);
                        break;

                    case 'simple':
                        var clone = $('#question').clone();
                        clone.css('display','block');
                        clone.attr('id',data[i][0]);
                        clone.find('#text').html(data[i][0]);
                        clone.find('#morris').css('display','block');
                        clone.find('#morris').attr('id','s'+s);

                        var table = $('#table').clone();
                        table.attr('id','t'+t);
                        t++;
                        table.css('display','table');
                        clone.find('#stat').css('display','block');
                        clone.find('#stat').html(table);

                        if(data[i][3].length > 1) {
                            clone.find('#freeReponse').html('<h3>Autres:</h3>');
                            for (var j = 0; j < data[i][3].length; j++) {
                                clone.find('#freeReponse').append("<p class='free'>" + data[i][3][j] + "</p>");
                            }
                        }
                        $('#surveyResults').append(clone);
                        var donnee = [];
                        var cat = [];
                        var total1 = 0;
                        for(var j = 0 ; j < data[i][2].length; j++){

                                donnee.push( {name:data[i][2][j][0],y :data[i][2][j][1]});

                                cat.push(data[i][2][j][0]);
                                total1 += parseInt(data[i][2][j][1]);

                        }
                        for(var j = 0 ; j < data[i][2].length; j++){
                            var reponse = $('#reponses').clone();
                            reponse.attr('id','r'+r);
                            r++;
                            reponse.css('display','table-row');
                            reponse.find('#re').html( data[i][2][j][0]);
                            reponse.find('#eff').html(data[i][2][j][1]);
                            reponse.find('#cent').html(Math.floor(data[i][2][j][1]/total1*100)+"%");
                            table.find('#total').html(total1);
                            table.find('tbody').append(reponse);

                        }

                        $('#s'+s).highcharts({
                            chart: {
                                type: 'column'
                            },
                            xAxis: {
                                categories: cat
                            },
                            yAxis: {
                                min: 0,
                                title:{
                                    text:'effectifs'
                                }
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'normal'
                                },
                                culumn :{
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        }
                                    }
                                }

                            },
                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.x + ':</b><br/>'+ Math.floor(this.y * 100 / total1  )+'%';
                                }
                            },
                            title: {
                                text: 'Q'+Q
                            },
                            series: [{
                                name : data[i][0],
                                data: donnee
                            }]
                        });
                        s++;
                        Q++;
                        /*  Morris.Bar({
                              element : data[i][0]+'s',
                              data : donnee,
                              xkey: 'x',
                              ykeys: 'y',
                              labels: ['Frequence'],
                              resize: true,
                              stacked : true,
                              barColors: function (row, series, type) {
                                  if (type === 'bar') {
                                      var green = Math.ceil(255 * row.y / this.ymax);
                                      return 'rgb(100, '+green + ',120)';
                                  }
                                  else {
                                      return '#000';
                                  }
                              }
                          });*/
                        break;
                    case 'multiple':
                        var clone = $('#question').clone();
                        clone.css('display','block');
                        clone.attr('id',data[i][0]);
                        clone.find('#text').html(data[i][0]);
                        clone.find('#morris').css('display','block');
                        clone.find('#morris').attr('id','m'+m);
                        if(data[i][3].length) {
                            clone.find('#freeReponse').html('<h3>Autres:</h3>');
                            for (var j = 0; j < data[i][3].length; j++) {
                                clone.find('#freeReponse').append("<p class='free'>" + data[i][3][j] + "</p>");
                            }
                        }
                        var table = $('#table').clone();
                        table.attr('id','t'+t);
                        t++;
                        table.css('display','table');
                        clone.find('#stat').css('display','block');
                        clone.find('#stat').html(table);
                        $('#surveyResults').append(clone);
                        var donnee = [];
                        var cat = [];
                        var some1 = 0;
                        for(var j = 0 ; j < data[i][2].length; j++){
                            donnee.push( {name:data[i][2][j][0],y :data[i][2][j][1]});
                            cat.push(data[i][2][j][0]);
                            some1 += parseInt(data[i][2][j][1]);
                        }
                        for(var j = 0 ; j < data[i][2].length; j++){
                            var reponse = $('#reponses').clone();
                            reponse.attr('id','r'+r);
                            r++;
                            reponse.css('display','table-row');
                            reponse.find('#re').html( data[i][2][j][0]);
                            reponse.find('#eff').html(data[i][2][j][1]);
                            reponse.find('#cent').html(Math.floor(data[i][2][j][1]/some1*100)+"%");
                            table.find('#total').html(some1);
                            table.find('tbody').append(reponse);
                        }
                        $('#m'+m).highcharts({
                            chart: {
                                type: 'column'
                            },
                            xAxis: {
                                categories: cat
                            },
                            yAxis: {
                                min: 0,
                                title:{
                                    text:'effectifs'
                                }
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'normal'
                                },
                                culumn :{
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'blue'
                                        }
                                    }
                                }

                            },
                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.x + ':</b><br/>'+ Math.floor(this.y / some1 * 100)+'%';
                                }
                            },
                            title: {
                                text: 'Q'+Q
                            },
                            series: [{
                                name : data[i][0],
                                data: donnee
                            }]
                        });
                        m++;
                        Q++;
                      /*  Morris.Bar({
                            element : data[i][0]+'m',
                            data : donnee,
                            xkey: 'x',
                            ykeys: 'y',
                            labels: ['Frequence'],
                            resize: true,
                            hoverCallback: function(index, options, content) {
                                return(content);
                            },
                            barColors: function (row, series, type) {
                                if (type === 'bar') {
                                    var green = Math.ceil(255 * row.y / this.ymax);
                                    return 'rgb(100, '+green + ',120)';
                                }
                                else {
                                    return '#000';
                                }
                            }
                        });*/
                        break;
                }
            }
        });
        function downloadInnerHtml(filename, elId, mimeType) {
            var elHtml = document.getElementById(elId).innerHTML;
            var link = document.createElement('a');
            mimeType = mimeType || 'text/plain';

            link.setAttribute('download', filename);
            link.setAttribute('href', 'data:' + mimeType  +  ';charset=utf-8,' + encodeURIComponent(elHtml));
            link.click();
        }

        var fileName =  'resultat.html';
        $('#downloadLink').click(function(){
            downloadInnerHtml(fileName, 'surveyResults','text/html');
        });

    });
</script>
<style>
    #surveyResults{
        top: 120px;
        display: block;
        
    }
    .free{
        margin: 10px;
        font-size: 16px;

    }
    table {
        font-family: "Helvetica Neue", Helvetica, sans-serif
    }

    caption {
        text-align: left;
        color: silver;
        font-weight: bold;
        text-transform: uppercase;
        padding: 5px;
    }

    thead {
        background: SteelBlue;
        color: white;
    }

    th,
    td {
        padding: 5px 10px;
    }

    tbody tr:nth-child(even) {
        background: WhiteSmoke;
    }

    tbody tr td:nth-child(2) {
        text-align:center;
    }

    tbody tr td:nth-child(3),
    tbody tr td:nth-child(4) {
        text-align: right;
        font-family: monospace;
    }

    tfoot {
        background: SeaGreen;
        color: white;
        text-align: right;
    }

    tfoot tr th:last-child {
        font-family: monospace;
    }
    header {
        position: relative;

    }
    #profile_ens{
        padding-top: 100px;
    }

    .container-fluid{
        background: white;

    }
    }
    .panel{

    }

    #milieu_profil_ens{
        background: #F8F8EA;
        margin-top: 0px;
    }

    .profile-nav{

        position: fixed;
        top: 0px;
        right: 0;
        bottom: 0px;
        background: beige;
        margin: 0px;

    }
   .alt.green-bg {
        background: rgba(112, 135, 163, 1);
        min-height: 250px;
    }
    #surveyInfo{
        border:1px solid #8FB39F;
        padding: 20px;
        margin: 10px;
        background:beige;
    }


</style>
</html>