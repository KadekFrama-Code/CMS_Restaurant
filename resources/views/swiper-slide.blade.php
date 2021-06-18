@extends('layouts.admin.master')
 
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TEST 123</title>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.0/swiper-bundle.min.css">
  <style>
    html, body {
		background: #fff;
		padding: 0;
		margin: 0;
		height: 100%;
		width: 100%;
    }
    .swiper-container {
		height: 100%;
		width: 100%;
    }
	.swiper-zoom-container{
		height: 100%;
		width: 100%;
	}
    .swiper-slide {
	  height: 100%;
	  width: 100%;
	  overflow: hidden;
      text-align: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
	
	.swiper-slide img{
		height: 2000px;
		width: 1400px;
	}
	.swiper-pagination-bullet{
		width: 20px;
		height: 20px;
	}

  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">


    	@foreach($new_produks as $produk)

		<div class="swiper-slide">
			<div class="swiper-zoom-container">
				<img src="{{ $produk->photo }}"/>
			</div>
		</div>
		@endforeach


		<div class="swiper-slide">
			<div class="swiper-zoom-container" bac>
				<a href="https://www.facebook.com" target="_blank" style="position: absolute; top: 100px; left: 800px; "><h1 style="font-size: 4vw; color: white;">Facebook</h1></a>

				<iframe
				   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5575034162507!2d115.25313961478382!3d-8.638407293792397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f76c9cfbf27%3A0x730a22a11d8a0857!2sBali%20Creative%20Industry%20Center!5e0!3m2!1sen!2sid!4v1623899782007!5m2!1sen!2sid" width="600" height="450" style="position: absolute; top: 300px; left: 730px; border:0;" allowfullscreen="" loading="lazy"
				   width="1600"
				   height="900"
				   frameborder="0">

				</iframe>


				<img src="image/biru2.jpg"/>
			</div>
		</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  @endsection

  @section('scripts')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.0/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
		zoom: true,
		direction: 'vertical',
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		autoHeight: false,
		mousewheel: {
			releaseOnEdges: true,
		},
    });
	$(document).ready(function() {
		var mql = window.matchMedia("(orientation: portrait)");
		if(mql.matches) {
			window.location.replace("index.html");
		} else {  

		}
		mql.addListener(function(m) {
			if(m.matches) {
				window.location.replace("index.html");
			} else {

			}
		});
	});		
   </script>


 
	<script type="text/javascript">
	    $(document).ready(function(){
	 
	        // btn refresh
	        $('.btn-refresh').click(function(e){
	            e.preventDefault();
	            $('.preloader').fadeIn();
	            location.reload();
	        })
	 
	    })
	</script>
 
@endsection



</body>
</html>
