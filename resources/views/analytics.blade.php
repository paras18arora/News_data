<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/common.css') }}">
<style>
body
{
    overflow-x:hidden;
}

</style>
</head>

<body>

<?php


$crime=array();
$label=array();

$time=strtotime($startdate);


$startyear=date("Y",$time);
$d = date_parse_from_format("Y-m-d", $startdate);
$startmonth=$d["month"];
$d = date_parse_from_format("Y-m-d", $enddate);
$endmonth=$d["month"];

$time=strtotime($enddate);


$endyear=date("Y",$time);



    
for($i=$startyear;$i<=$endyear;$i++)
{

    for($j=1;$j<=12;$j++)
    {
        
        if($i==$startyear && $j<$startmonth)
            continue;
        else if($i==$endyear && $j>=$endmonth)
           break;
        else
        {
            $count=0;
            foreach ($total_records as $record) {


                $date1 = $record->newDate;
               $d = date_parse_from_format("Y-m-d", $date1);
               $month1=$d["month"];

          
               $dt = DateTime::createFromFormat("Y-m-d", $date1);
               $year1=$dt->format("Y");
         
             
                 $month1=(int)$month1;
                 $year1=(int)$year1;
                if($month1==$j && $year1==$i)
                {
                $count++;
                }
            }
           
             array_push($crime,$count); 
             $dte= $i."-".$j;
             array_push($label,$dte); 
            
        }
    }

}

$crime=implode(" ",$crime);
$label=implode(" ",$label);
foreach ($total_events as $events) {
    $time=strtotime($events->startdate);
    $startyear=date("Y",$time);
    $d = date_parse_from_format("Y-m-d",$events->startdate);
    $startmonth=$d["month"];

    $event_date=$startyear."-".$startmonth;
    
    if(strpos($label,$event_date) !== false){

        $pos=strpos($label,$event_date);
        
        $subs=substr($label,$pos,8);
        if (isset($subs[6]))
        {
        if($subs[6]==' ')
           $subs=substr($subs,0,6); 
      }
        $subs1=$subs."(".$events->event_name.")";
        
        $label=str_replace($subs,$subs1,$label);
        $pos1=0;
        for($i=$pos;$i<strlen($label);$i++)
        {
            if($label[$i]==' ')
            {
                $pos1=$i+1;
                break;
            }
        }
        
       
        $subs2=substr($label,$pos1,8);
          if (isset($subs2[6]))
        {
       if($subs2[6]==' ')
        $subs2=substr($subs2,0,6);
}
        $subs3=$subs2."(".$events->event_name.")";
       
        $label=str_replace($subs2,$subs3,$label);
    }
}



if($startdate1!="")
{
$crime1=array();
$label1=array();

$time1=strtotime($startdate1);


$startyear1=date("Y",$time1);
$d1 = date_parse_from_format("Y-m-d", $startdate1);
$startmonth1=$d1["month"];
$d1 = date_parse_from_format("Y-m-d", $enddate1);
$endmonth1=$d1["month"];

$time1=strtotime($enddate1);


$endyear1=date("Y",$time1);



    
for($i=$startyear1;$i<=$endyear1;$i++)
{

    for($j=1;$j<=12;$j++)
    {
        
        if($i==$startyear1 && $j<$startmonth1)
            continue;
        else if($i==$endyear1 && $j>=$endmonth1)
           break;
        else
        {
            $count1=0;
            foreach ($total_records1 as $record) {
                $date1 = $record->newDate;
                
               $d = date_parse_from_format("Y-m-d", $date1);
               $month1=$d["month"];
              

             
               $dt = DateTime::createFromFormat("Y-m-d", $date1);
               $year1=$dt->format("Y");
             
             
                 $month1=(int)$month1;
                 $year1=(int)$year1;
                
                if($month1==$j)
                {
                    
                $count1++;
                }
            }
           
             array_push($crime1,$count1); 
            $dte= $i."-".$j;
             array_push($label1,$dte); 
            
        }
    }
}

$crime1=implode(" ",$crime1);

$label1=implode(" ",$label1);
foreach ($total_events1 as $events) {
    $time=strtotime($events->startdate);
    $startyear=date("Y",$time);
    $d = date_parse_from_format("Y-m-d",$events->startdate);
    $startmonth=$d["month"];
    $event_date=$startyear."-".$startmonth;
     if(strpos($label1,$event_date) !== false){

        $pos=strpos($label1,$event_date);
        
        $subs=substr($label1,$pos,8);
         if (isset($subs[6]))
        {
        if($subs[6]==' ')
           $subs=substr($subs,0,6); 
      }
        $subs1=$subs."(".$events->event_name.")";
        
        $label1=str_replace($subs,$subs1,$label1);
        $pos1=0;
        for($i=$pos;$i<strlen($label1);$i++)
        {
            if($label1[$i]==' ')
            {
                $pos1=$i+1;
                break;
            }
        }
        
       
        $subs2=substr($label1,$pos1,8);
          if (isset($subs2[6]))
        {
       if($subs2[6]==' ')
        $subs2=substr($subs2,0,6);
}

        $subs3=$subs2."(".$events->event_name.")";
       
        $label1=str_replace($subs2,$subs3,$label1);
    }
   
    
}
}

else
{
   $crime1="";
   $label1="";
  
}
?>

<h2><center>Analysing {{$category}}</center></h2>
<canvas id="myChart" width="400" height="70"></canvas>
<canvas id="myChart1" width="400" height="70"></canvas>

<div class="row container-fluid">
<div id="analysis" class="container">
</div>
</div>
<div>
<form class="form-horizontal" method="post" action="{{ route('totalnews') }}">
<input type="hidden" name="_token" value="{{ Session::token() }}"> 

<center><button type="submit" class="btn btn-danger">show detailed news</button></center>
</form>
</div>
<script>
    
    var ctx = document.getElementById("myChart");
    var label="<?php echo $label; ?>";
    var crime="<?php echo $crime; ?>";
    var label1="<?php echo $label1; ?>";
    var crime1="<?php echo $crime1; ?>";
    var category="<?php echo $category; ?>";
    var graphtype="<?php echo $graphtype; ?>";
    if(graphtype=="line")
    {
    if(crime1)
    {

    var ctx1 = document.getElementById("myChart1");
    var labeles = label.split(" ");
    var crimes = crime.split(" ");
    var labeles1 = label1.split(" ");
    var crimes1 = crime1.split(" ");
     
        var crme=crimes.map(function(item) {
    return parseInt(item, 10);
});
        var crme1=crimes1.map(function(item) {
    return parseInt(item, 10);
});
        var sum = crme.reduce(add, 0);
        var sum1 = crme1.reduce(add, 0);
        var diff=sum-sum1;
        if(diff<0)
        {
            var analyse="increased";
            diff1=(-1)*diff;
        }
        else 
        {
            var analyse="decreased";
            diff1=diff;
        }
        function add(a, b) {
         return a + b;
         }
          document.getElementById("analysis").innerHTML="<h4>The total crime in graph 1 is "+sum+"<br>The total crime in graph 2 is "+sum1+"<br>The diff in crimes is "+diff1+"<br>Therefore in second graph crime rate is "+analyse+"</h4>";
          
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labeles,
        datasets: [{
            label: category+'-1',
            
            data: crimes,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
                
            ],
            borderColor: [
                'rgba(255,99,132,1)'
                
            ],
            borderWidth: 1
        }

        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    
                }
            }]
        }
    }
});
    var myChart1 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: labeles1,
        datasets: [{
            label: category+'-2',
            
            data: crimes1,
            backgroundColor: [
                'rgba(0, 99, 132, 0.2)'
                
            ],
            borderColor: [
                'rgba(0, 99, 132, 1)'
                
            ],
            borderWidth: 1
        }

        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    
                }
            }]
        }
    }
});
}
else
{
    var labeles = label.split(" ");
    var crimes = crime.split(" ");

    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labeles,
        datasets: [{
            label: category,
            
            data: crimes,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
                
            ],
            borderColor: [
                'rgba(255,99,132,1)'
                
            ],
            borderWidth: 1
        }

        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    
                }
            }]
        }
    }
});
}
}
if(graphtype=="bar")
    {
   
    if(crime1)
    {
    var ctx1 = document.getElementById("myChart1");
    var labeles = label.split(" ");
    var crimes = crime.split(" ");
    var labeles1 = label1.split(" ");
    var crimes1 = crime1.split(" ");
    

        var crme=crimes.map(function(item) {
    return parseInt(item, 10);
});
        var crme1=crimes1.map(function(item) {
    return parseInt(item, 10);
});
        var sum = crme.reduce(add, 0);
        var sum1 = crme1.reduce(add, 0);
        var diff=sum-sum1;
        if(diff<0)
        {
            var analyse="increased";
            diff1=(-1)*diff;
        }
        else 
        {
            var analyse="decreased";
            diff1=diff;
        }
        function add(a, b) {
         return a + b;
         }
          document.getElementById("analysis").innerHTML="<h4>The total crime in graph 1 is "+sum+"<br>The total crime in graph 2 is "+sum1+"<br>the diff in crimes is "+diff1+"<br>Therefore in second graph crime rate is "+analyse+"</h4>";
          
    var i;
    var color1=['rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'];
    var border1=['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)'];
    var colors=[];
    var color=[];
    var borders=[];
    var border=[];
    for(i=0;i<labeles1.length;i++)
    {
       colors.push(color1[i%5]);
       borders.push(border1[i%5]);
    }
    for(i=0;i<labeles.length;i++)
    {
       border.push(border1[i%5]);
       color.push(color1[i%5]);
    }
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labeles,
        datasets: [{
            label: category+'-1',
            
            data: crimes,
            backgroundColor: color,
            borderColor: 
                border,
            borderWidth: 1
        }

        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    
                }
            }]
        }
    }
});
    var myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: labeles1,
        datasets: [{
            label: category+'-2',
            
            data: crimes1,
            backgroundColor: colors,
            borderColor: borders,
            borderWidth: 1
        }

        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    
                }
            }]
        }
    }
});
}
else
{
    var labeles = label.split(" ");
    var crimes = crime.split(" ");
    var i;
    var borders=[];
    var colors=[];
    var color1=['rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'];
    var border1=['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)'];
    for(i=0;i<labeles.length;i++)
    {
       colors.push(color1[i%5]);
       borders.push(border1[i%5]);
    }
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labeles,
        datasets: [{
            label: category,
            
            data: crimes,
            backgroundColor: colors,
            borderColor: borders,
            borderWidth: 1
        }

        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    
                }
            }]
        }
    }
});
}
}
if(graphtype=="pie")
{
      if(crime1)
    {
    var ctx1 = document.getElementById("myChart1");
    var labeles = label.split(" ");
    var crimes = crime.split(" ");
    var labeles1 = label1.split(" ");
    var crimes1 = crime1.split(" ");
  

        var crme=crimes.map(function(item) {
    return parseInt(item, 10);
});
        var crme1=crimes1.map(function(item) {
    return parseInt(item, 10);
});
        var sum = crme.reduce(add, 0);
        var sum1 = crme1.reduce(add, 0);
        var diff=sum-sum1;
        if(diff<0)
        {
            var analyse="increased";
            diff1=(-1)*diff;
        }
        else 
        {
            var analyse="decreased";
            diff1=diff;
        }
        function add(a, b) {
         return a + b;
         }
          document.getElementById("analysis").innerHTML="<h4>The total crime in graph 1 is "+sum+"<br>The total crime in graph 2 is "+sum1+"<br>the diff in crimes is "+diff1+"<br>Therefore in second graph crime rate is "+analyse+"</h4>";
          
    var i;
    var color1=['rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'];
    var border1=['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)'];
    var colors=[];
    var color=[];
    var borders=[];
    var border=[];
    for(i=0;i<labeles1.length;i++)
    {
       colors.push(color1[i%5]);
       borders.push(border1[i%5]);
    }
    for(i=0;i<labeles.length;i++)
    {
       border.push(border1[i%5]);
       color.push(color1[i%5]);
    }
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labeles,
        datasets: [{
            label: category+'-1',
            
            data: crimes,
            backgroundColor: color,
            hoverBackgroundColor: 
                border
        }

        ]
    }
});
    var myChart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
        labels: labeles1,
        datasets: [{
            label: category+'-2',
            
            data: crimes1,
            backgroundColor: colors,
            hoverBackgroundColor: borders
           
        }

        ]
    }
    
});
}
else
{
    var labeles = label.split(" ");
    var crimes = crime.split(" ");
    var i;
    var borders=[];
    var colors=[];
    var color1=['rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'];
    var border1=['rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)'];
    for(i=0;i<labeles.length;i++)
    {
       colors.push(color1[i%5]);
       borders.push(border1[i%5]);
    }
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labeles,
        datasets: [{
            label: category,
            
            data: crimes,
            backgroundColor: colors,
            hoverBackgroundColor: borders
        }

        ]
    }
});
}
}
if(graphtype=="radar")
{
    if(crime1)
    {
    var ctx1 = document.getElementById("myChart1");
    var labeles = label.split(" ");
    var crimes = crime.split(" ");
    var labeles1 = label1.split(" ");
    var crimes1 = crime1.split(" ");
     
        
        var crme=crimes.map(function(item) {
    return parseInt(item, 10);
});
        var crme1=crimes1.map(function(item) {
    return parseInt(item, 10);
});
        var sum = crme.reduce(add, 0);
        var sum1 = crme1.reduce(add, 0);
        var diff=sum-sum1;
        if(diff<0)
        {
            var analyse="increased";
            diff1=(-1)*diff;
        }
        else 
        {
            var analyse="decreased";
            diff1=diff;
        }
        function add(a, b) {
         return a + b;
         }
          document.getElementById("analysis").innerHTML="<h4>The total crime in graph 1 is"+sum+"<br>The total crime in graph 2 is"+sum1+"<br>the diff in crimes is"+diff1+"<br>Therefore in second graph crime rate is "+analyse+"</h4>";
          document.getElementById("analysis").removeAttribute("class");
    var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: labeles,
        datasets: [{
            label: category+'-1',
            
            data: crimes,
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)"
        }

        ]
    }
});
    var myChart1 = new Chart(ctx1, {
    type: 'radar',
    data: {
        labels: labeles1,
        datasets: [{
            label: category+'-2',
            
            data: crimes1,
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)"
        }

        ]
    }
});
}
else
{
    var labeles = label.split(" ");
    var crimes = crime.split(" ");

    var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: labeles,
        datasets: [{
            label: category,
            
            data: crimes,
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)"
        }

        ]
    }
});
}
}
</script>


</body>
</html>