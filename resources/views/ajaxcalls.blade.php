 <meta name="csrf-token1" content="{!! Session::token() !!}">
<script>
function getanalysis(murders,rapes,others)
{
	alert("hi");
	//var keyword=document.getElementById('keywords').value;
	 $.post('/getanalysis', {
        _token: $('meta[name=csrf-token1]').attr('content'),
        murders: murders,
        rapes: rapes,
        others: others
                                               
        }
      );
     
     
}
</script>