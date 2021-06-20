<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TEST 123</title>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.0/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
		height: 1000px;
		width: 1000px;
	}
	.swiper-pagination-bullet{
		width: 20px;
		height: 20px;
	}
	.swiper-zoom-container .background_footer>img{
		max-width: 100%;
	    max-height: 100%;
	    object-fit: contain;
	    position: relative;
		overflow: hidden;
	}
	.background_footer{
		position: relative;
		overflow: hidden;
	}
	.custom_content{
		position: absolute;
	    top: 0;
	    left: 0;
	    z-index: 10;
	    width: 100%;
	    height: 100%;
	    text-align: center;
	}
	.text_content{
		position: relative;
		top: 60px;
		left: 20px;
	}
	.btn_whatsapp{
		position: relative;
		top: 60px;
		left: 200px;
		height: 80px;
		width: 260px;
		border: green 10px solid;
		border-radius: 10px;
		color: blue
		background: #22a4cf;
		text-decoration: none;
		opacity: 6;


	}

	@media only screen and (max-width: 600px) {
  	.google_map{
  		width: 80%;
  		height: 28%;
	    top: 340px !important;
	    left: 8px;
  	}
  	.text_content{
	  	position: relative;
	    z-index: 20;
	    top: 320px;
	    left: 12px;
	  	}

}

  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">

    		<div class="swiper-slide">
				<div class="swiper-zoom-container" >
					<div class="background_footer">
						<img src="image/MENU LIST 9.jpg"/>

						<div class="row custom_content">
							<div class="col-12 text-center">
								<div class="text_content">
									<h1 style="font-size: 1.5vw; color: black;">Contack Us</h1>
									<h5>Jln. Kampus Unud No. 120 B, Badung, Bali (80361)</h5>


									<div class="btn_whatsapp">
										<a href="#">
										<img src="image/wa.jpg" style="position: relative; width: 20%; height:80%; top: 6px; right: 80px; ">
										<p style=" font-size: 20px;  position: relative; text-decoration: none; bottom: 34px; left: 40px;">085792459736</p>
									</a>
									</div>
									
								</div>

								<iframe
								   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5575034162507!2d115.25313961478382!3d-8.638407293792397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f76c9cfbf27%3A0x730a22a11d8a0857!2sBali%20Creative%20Industry%20Center!5e0!3m2!1sen!2sid!4v1623899782007!5m2!1sen!2sid"
								   width="600" height="450" style="position: relative; top: 160px; left: 10px;" class="google_map" allowfullscreen="" loading="lazy"
								   width="1400"
								   height="800"
								   frameborder="0">

								</iframe>
							</div>
						</div>
					</div>
					
				</div>
			</div>

    	@foreach($produks as $produk)

		<div class="swiper-slide">
			<div class="swiper-zoom-container">
				<img src="{{ $produk->photo }}"/>
			</div>
		</div>
		@endforeach


		
    </div>
    <div class="swiper-pagination"></div>
  </div>


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




</body>
</html>
