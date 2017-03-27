<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/form-elements.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="/assets/css/jquery.datepick.css"> 
       <script type="text/javascript" src="/assets/js/jquery.plugin.js"></script> 
       <script type="text/javascript" src="/assets/js/jquery.datepick.js"></script>
       <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
	<title>mainpage</title>
</head>
<body>
 <nav class="navbar navbar-trans " role="navigation">
        <div class="container">
    <div class="navbar-header">

      <a class="navbar-brand" href="#">Data Analytics</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
        </div>
  </div>
</nav>
<div>
<div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Analyse the Crime</strong></h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Enter the dates for analysis</h3>
                                    
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form class="form-horizontal" method="post" action="{{ route('analysis') }}">
<label>graph 1</label>


<input type="hidden" name="_token" value="{{ Session::token() }}"> 
            <label>Startdate:</label>
            <input type="month" class="form-control" name="startdate" required>
            <label>Enddate:</label>
            <input type="month" class="form-control" name="enddate" reqiured>
           
           <hr>
           <label>graph 2(optional)</label><br>
            <label>Startdate:</label>
            <input type="month" class="form-control" name="startdate1">
            <label>Enddate:</label>
            <input type="month" class="form-control" name="enddate1">
            <br>
            <div class="form-group">
              <label for="sel1">Categories</label>
              <select class="form-control" name="Categories" id="sel1">
                <option value="rape">Rape</option>
                <option value="murder">Murder</option>
                <option value="Others">Others</option>
                <option value="All Crimes">All Crimes</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sel1">Type of Graph</label>
              <select class="form-control" name="Graphtype" id="sel2">
                <option value="bar">Bar Graph</option>
                <option value="line">Line Graph</option>
                <option value="pie">Pie Chart</option>
                <option value="radar">Radar Graph</option>
              </select>
            </div>
            <center><button type="submit" class="btn btn-danger">show analysis</button></center>
</form>
                            </div>
                        </div>
                    </div>
                    
                       
                                      
                    </div>
                </div>
            </div>
            
        </div>
 </div>

 <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->


</body>
</html>