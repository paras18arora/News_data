<div class="wall-cards text">
	<h4>
	@foreach (explode(',', $rape['keywords']) as $user)
   <a href="#"><span class="label label-simple"><i class="fa fa-thumb-tack"></i> {{$user}}</span></a>
@endforeach
	</h4>
	<a href="#">
		<div class="col-md-12 card">
			<h4>{{$rape['city']}}</h4>
			<h3>{{$rape['title']}}</h3>
			
		</div>
	</a>
	<p class="text-muted">{{$rape['date']}}</p>
</div>