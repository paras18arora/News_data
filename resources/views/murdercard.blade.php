<div class="wall-cards text">
	<h4>
	@foreach (explode(',', $murder['keywords']) as $user)
   <a href="#"><span class="label label-simple"><i class="fa fa-thumb-tack"></i> {{$user}}</span></a>
@endforeach
	</h4>
	<a href="#">
		<div class="col-md-12 card">
			<h4>{{$murder['city']}}</h4>
			<h3>{{$murder['title']}}</h3>
			
		</div>
	</a>
	
	<p class="text-muted">{{$murder['date']}}</p>
</div>