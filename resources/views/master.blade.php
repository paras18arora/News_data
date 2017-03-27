<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@yield('meta')
		<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-theme.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/common.css') }}">
		@stack('css')

	<link rel="stylesheet" href="{{ URL::asset('css/wall.css') }}">

	</head>
	<body>
<br>
<?php 
            
            $murders=array();
            $rapes=array();
            $others=array();
            foreach ($data as $key) {
                  if($key['category']=="murder")
                        array_push($murders,$key);
                  if($key['category']=="rape")
                        array_push($rapes,$key);
                  if($key['category']=="others")
                        array_push($others,$key);
            }
            $count1=0;
            $count2=0;
            $count3=0;
            $count4=0;
            $count5=0;
            $count6=0;
            $count7=0;
            $count8=0;
            $count9=0;
            $count10=0;
            $count11=0;
            $count12=0;
            foreach ($murders as $murder) {
                  if(strpos($murder['date'], 'Jan 2015') !== false)
                        $count1++;
                  if(strpos($murder['date'], 'Feb 2015') !== false)
                        $count2++;
                  if(strpos($murder['date'], 'Mar 2015') !== false)
                        $count3++;
                  if(strpos($murder['date'], 'Apr 2015') !== false)
                        $count4++;
                  if(strpos($murder['date'], 'May 2015') !== false)
                        $count5++;
                  if(strpos($murder['date'], 'Jun 2015') !== false)
                        $count6++;
                  if(strpos($murder['date'], 'Jul 2015') !== false)
                        $count7++;
                  if(strpos($murder['date'], 'Aug 2015') !== false)
                        $count8++;
                  if(strpos($murder['date'], 'Sep 2015') !== false)
                        $count9++;
                  if(strpos($murder['date'], 'Oct 2015') !== false)
                        $count10++;
                  if(strpos($murder['date'], 'Nov 2015') !== false)
                        $count11++;
                  if(strpos($murder['date'], 'Dec 2015') !== false)
                        $count12++;
            }
            $murdercount=array($count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,$count9,$count10,$count11,$count12);
             $count1=0;
            $count2=0;
            $count3=0;
            $count4=0;
            $count5=0;
            $count6=0;
            $count7=0;
            $count8=0;
            $count9=0;
            $count10=0;
            $count11=0;
            $count12=0;
            foreach ($rapes as $rape) {
                  if(strpos($rape['date'], 'Jan 2015') !== false)
                        $count1++;
                  if(strpos($rape['date'], 'Feb 2015') !== false)
                        $count2++;
                  if(strpos($rape['date'], 'Mar 2015') !== false)
                        $count3++;
                  if(strpos($rape['date'], 'Apr 2015') !== false)
                        $count4++;
                  if(strpos($rape['date'], 'May 2015') !== false)
                        $count5++;
                  if(strpos($rape['date'], 'Jun 2015') !== false)
                        $count6++;
                  if(strpos($rape['date'], 'Jul 2015') !== false)
                        $count7++;
                  if(strpos($rape['date'], 'Aug 2015') !== false)
                        $count8++;
                  if(strpos($rape['date'], 'Sep 2015') !== false)
                        $count9++;
                  if(strpos($rape['date'], 'Oct 2015') !== false)
                        $count10++;
                  if(strpos($rape['date'], 'Nov 2015') !== false)
                        $count11++;
                  if(strpos($rape['date'], 'Dec 2015') !== false)
                        $count12++;
            }
            $rapecount=array($count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,$count9,$count10,$count11,$count12);
            $count1=0;
            $count2=0;
            $count3=0;
            $count4=0;
            $count5=0;
            $count6=0;
            $count7=0;
            $count8=0;
            $count9=0;
            $count10=0;
            $count11=0;
            $count12=0;
            foreach ($others as $other) {
                  if(strpos($other['date'], 'Jan 2015') !== false)
                        $count1++;
                  if(strpos($other['date'], 'Feb 2015') !== false)
                        $count2++;
                  if(strpos($other['date'], 'Mar 2015') !== false)
                        $count3++;
                  if(strpos($other['date'], 'Apr 2015') !== false)
                        $count4++;
                  if(strpos($other['date'], 'May 2015') !== false)
                        $count5++;
                  if(strpos($other['date'], 'Jun 2015') !== false)
                        $count6++;
                  if(strpos($other['date'], 'Jul 2015') !== false)
                        $count7++;
                  if(strpos($other['date'], 'Aug 2015') !== false)
                        $count8++;
                  if(strpos($other['date'], 'Sep 2015') !== false)
                        $count9++;
                  if(strpos($other['date'], 'Oct 2015') !== false)
                        $count10++;
                  if(strpos($other['date'], 'Nov 2015') !== false)
                        $count11++;
                  if(strpos($other['date'], 'Dec 2015') !== false)
                        $count12++;
            }
            $othercount=array($count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,$count9,$count10,$count11,$count12);
           $murdercount=json_encode($murdercount);
           $rapecount= json_encode($rapecount);
           $othercount=json_encode($othercount);
          

            ?>
		
		<div class="col-md-12">
			<div class="main container">
				<ul class="nav nav-tabs nav-justified wall-tabs" role="tablist">
	    	<li role="presentation" class="active"><a href="#murder" aria-controls="video" role="tab" data-toggle="tab"><h4>Murder</h4></a></li>
	    	<li role="presentation"><a href="#rape"  aria-controls="rape" role="tab" data-toggle="tab"><h4>Rape</h4></a></li>
	    	<li role="presentation"><a href="#others" aria-controls="others" role="tab" data-toggle="tab"><h4>Others</h4></a></li>   	
	    	
	  	</ul>

	  	<!-- Tab panes -->
	  	<div class="tab-content">
	    	<div role="tabpanel" class="tab-pane active" id="murder">
				
					
					@foreach ($murders as $murder) 
						
						@include('murdercard')
					@endforeach
					
					
		           
				
				     		
								
	    	</div>
	    	<div role="tabpanel" class="tab-pane" id="rape">
				
					
					@foreach ($rapes as $rape) 
						
						@include('rapecard')
					@endforeach
					
					
				   		
					    		
	    	</div>
	    	<div role="tabpanel" class="tab-pane" id="others">
				
					@foreach ($others as $other) 
						
						@include('otherscard')
					@endforeach
					
					
				    		
					    		
	    	</div>	    	
	  	</div>
	</div>
	</div>
			</div>
		</div>
		<script src="{{ URL::asset('bootstrap/js/jquery-1.12.0.min.js') }}"></script>
		<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
		<script>
		
		var murdercount="<?php echo json_encode($murdercount) ?>";
        var othercount="<?php echo json_encode($othercount) ?>";
        var rapecount="<?php echo json_encode($rapecount) ?>";
		</script>
		
	</body>
</html>