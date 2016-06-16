<!DOCTYPE html>
<html>
    <head>
    	<link href="{!! asset('assets/css/layout.css') !!}" media="all" rel="stylesheet" type="text/css" />
    	<link href="{!! asset('assets/js/unslider/dist/css/unslider.css') !!}" media="all" rel="stylesheet" type="text/css" />
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
    	<script type="text/javascript" src="assets/js/unslider/dist/js/unslider-min.js"></script>
    	<script type="text/javascript" src="assets/js/clock.js"></script>
        <title>Comerc</title>
        <script>
	        $(document).ready(function(){
	
	        	$('.slider').unslider({
						autoplay:true,
						delay:10000,
						arrows:false,
						keys:false,
						nav:false
	            	});
	
	    		clock();
	        	  
	        });
        </script>
    </head>
    <body>
    	<div class="slider">
    		<ul>
		 	@foreach ($feeds->channel->item as $feed)
    			<li>
    				<div class="slide">	
    				<h2>{{ $feed->category }}</h2>
    				<h2>{{ Carbon\Carbon::parse($feed->pubDate)->format('d/m/Y') }}</h2>
    				<h1>{{ $feed->title }}</h1>
    				<b>{{ $feed->description }}</b>
    				</div>
    			</li>
			@endforeach
			</ul>
		</div>
		<div class="footer">
			<div id="clock"></div>
    		<div id="cont_d75c01d8203129ec2e4fa9c5782a1f21">
    			<span id="h_d75c01d8203129ec2e4fa9c5782a1f21">
    				<a id="a_d75c01d8203129ec2e4fa9c5782a1f21" href="http://www.tempo.pt/sao-paulo.htm" target="_blank" rel="nofollow" style="color:#ffffff;font-family:1;font-size:14px;">
    				</a>
    			</span>
    			<script type="text/javascript" async src="http://www.tempo.pt/wid_loader/d75c01d8203129ec2e4fa9c5782a1f21">
    			</script>
    	  </div>
		</div>
    </body>
</html>
