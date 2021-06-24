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
		position: absolute;
		top: 120px;
		left: 200px;
		height: 64px;
		width: 260px;
		border: #3CB371 3px solid;
		border-radius: 10px;
		color: blue
		background: #22a4cf;
		text-decoration: none;
		opacity: 1;
	}
	.btn_telegram{
		position: absolute;
		top: 120px;
		left: 495px;
		height: 64px;
		width: 260px;
		border: #4169E1 3px solid;
		border-radius: 10px;
		color: blue
		background: #22a4cf;
		text-decoration: none;
		opacity: 1;
	}
	.sosial_media{
		position: relative;
		top: 254px;
		left: 602px;
		height: 100px;
		width: 390px;
	}
	.sosmed-fb, .sosmed-wa, .sosmed-tiktok, .sosmed-ig{
		position: absolute;
		z-index: 2;
		height: 60px;
		width: 60px;
		background-size: cover;
		border-radius: 740%;
		top: 16px;
	}

	@media only screen and (max-width: 600px) {
	  	.google_map{
	  		width: 80%;
	  		height: 20%;
		    top: 380px !important;
		    left: 8px;
		    z-index: 2;
	  	}
	  	.text_content{
		  	position: relative;
		    z-index: 20;
		    top: 320px;
		    left: 12px;
		}
		.contact_us{
			position: relative;
			font-size: 16px;
			font-family: serif;
			bottom: 40px;
		}
		.alamat{
			position: relative;
			font-size: 12px;
			font-family: serif;
			bottom: 40px;
		}
		.btn_whatsapp{
			position: absolute;
			top: 46px;
			left: 50px;
			z-index: 2;
			height: 30px;
			width: 120px;

			border: #3CB371 1px solid;
			border-radius: 8px;
			color: blue
			background: #22a4cf;
			text-decoration: none;
			opacity: 1;
		}
		.icon_wa{
			position: absolute;
			top: 3px !important;
			left: 6px;
			width: 20%;
			height:74% !important;


		}
		.no_telp{
			position: absolute;
			top: 4px !important;
			left: 34px !important;
			font-size: 12px !important;
		}
		.btn_telegram{
			position: absolute;
			top: 46px;
			left: 180px;
			z-index: 2;
			height: 30px;
			width: 120px;

			border: #4169E1 1px solid;
			border-radius: 8px;
			color: blue
			background: #22a4cf;
			text-decoration: none;
			opacity: 1;
		}
		.icon_telegram{
			position: absolute;
			top: 3px !important;
			left: 14px;
			width: 20%;
			height:74% !important;
		}
		.username_telegram{
			position: absolute;
			top: 4px !important;
			left: 42px !important;
			font-size: 12px !important;
		}
		.sosial_media{
			position: relative;
			top: 400px;
			left: 40px;
			height: 120px;
			width: 292px;
		}
		.sosmed-fb{
			position: absolute;
			z-index: 2;
			height: 30px;
			width: 30px;
			left: 60px !important;
		}
		.sosmed-wa{
			position: absolute;
			z-index: 2;
			height: 30px;
			width: 30px;
			left: 110px !important;
		}
		.sosmed-tiktok{
			position: absolute;
			z-index: 2;
			height: 30px;
			width: 30px;
			left: 158px !important;
		}
		.sosmed-ig{
			position: absolute;
			z-index: 2;
			height: 30px;
			width: 30px;
			left: 206px !important;
		}
		.swiper-pagination-bullet{
			height: 10px;
			width: 10px;
		}
		
	}

	@media only screen 
		and (min-device-width: 768px)  {
		.btn_whatsapp {
		    position: absolute;
		    top: 120px;
		    left: 201px !important;
		    height: 64px;
		    width: 260px;
		    border: #3CB371 3px solid;
		    border-radius: 10px;
		    color: blue background: #22a4cf;
		    text-decoration: none;
		    opacity: 1;
		}
		.btn_telegram {
		    position: absolute;
		    top: 120px;
		    left: 499px !important;
		    height: 64px;
		    width: 260px;
		    border: #4169E1 3px solid;
		    border-radius: 10px;
		    color: blue background: #22a4cf;
		    text-decoration: none;
		    opacity: 1;
		}
		.sosial_media {
		    position: relative;
		    top: 254px;
		    left: 302px !important;
		    height: 100px;
		    width: 390px;
		}
	}


	@media only screen 
	  and (min-device-width: 768px) 
	  and (max-device-width: 1024px) 
	  and (orientation: landscape) 
	  and (-webkit-min-device-pixel-ratio: 1) {
	  	.swiper-zoom-container {
		    width: 100%;
		    height: 100%;
		    display: flex;
		    justify-content: center;
		    /* align-items: center; */
		    text-align: center;
		}
		.swiper-slide img {
		    height: 766px;
		    width: 1000px;
		}
		.google_map{
			width: 400px !important;
		    height: 340px !important;
		    top: 176px !important;
		    left: 8px;
		    z-index: 2;
		}
		.btn_whatsapp {
		    position: absolute;
		    top: 96px;
		    left: 260px !important;
		    height: 48px;
		    width: 220px;
		    border: #3CB371 3px solid;
		    border-radius: 10px;
		    color: blue background: #22a4cf;
		    text-decoration: none;
		    opacity: 1;
		}
		.btn_telegram {
		    position: absolute;
		    top: 96px;
		    left: 494px !important;
		    height: 48px;
		    width: 220px;
		    border: #4169E1 3px solid;
		    border-radius: 10px;
		    color: blue background: #22a4cf;
		    text-decoration: none;
		    opacity: 1;
		}
		.no_telp {
		    position: absolute;
		    top: 6px;
		    left: 19px !important;
		    height: 50px;
		    width: 220px;
		}
		.text_content {
		    position: relative;
		    top: 60px;
		    left: 11px;
		}
		.icon_wa {
		    position: absolute;
		    width: 14%;
		    height: 60%;
		    top: 9px !important;
		    right: 158px !important;
		}
		.username_telegram{
			font-size: 20px;
		    color: blue;
		    position: absolute;
		    text-decoration: none;
		    bottom: -8px !important;
		    left: 90px !important;
		}
		.icon_telegram{
			position: absolute;
		    width: 14%;
		    height: 68%;
		    top: 7px !important;
		    right: 144px !important;
		}
		.sosial_media {
		    position: relative;
		    top: 187px;
		    left: 302px !important;
		    height: 119px;
		    width: 400px;
		}
		.sosmed-fb, .sosmed-wa, .sosmed-tiktok, .sosmed-ig {
		    position: absolute;
		    z-index: 2;
		    height: 50px;
		    width: 50px;
		    background-size: cover;
		    border-radius: 740%;
		    top: 16px;
		}

	}


	@media only screen 
	  and (min-device-width: 375px) 
	  and (max-device-width: 812px) 
	  and (-webkit-min-device-pixel-ratio: 3)
	  and (orientation: landscape) {
	   .swiper-zoom-container {
		    width: 100%;
		    height: 100%;
		    display: flex;
		    justify-content: center;
		     align-items: center; 
		    text-align: center;
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
						<img class="background_img" src="image/MENU LIST 9.jpg"/>

						<div class="row custom_content">
							<div class="col-12 text-center">
								<div class="text_content">
									<h2 class="contact_us" color: black;">Contact Us</h1>
									<h5 class="alamat">Jln. Kampus Unud No. 120 B, Badung, Bali (80361)</h5>


										<a class="btn_whatsapp" href="#">
											<img class="icon_wa" src="image/wa.jpg" style="position: absolute; width: 14%; height:60%; top: 12px; right: 180px;">
											<p class="no_telp" style=" font-size: 20px; color: green;  position: absolute; text-decoration: none; bottom: -2px; left: 94px;">085792459736</p>
										</a>

										<a class="btn_telegram" href="#">
											<center>
												<img class="icon_telegram" src="image/telegram.jpg" style="position: absolute; width: 14%; height:60%; top: 12px; right: 174px;">
												<p class="username_telegram" style=" font-size: 20px; color: blue;  position: absolute; text-decoration: none; bottom: -2px; left: 94px;">Test12345</p>
											</center>
											
										</a>
									
								</div>

								<iframe
								   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5575034162507!2d115.25313961478382!3d-8.638407293792397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f76c9cfbf27%3A0x730a22a11d8a0857!2sBali%20Creative%20Industry%20Center!5e0!3m2!1sen!2sid!4v1623899782007!5m2!1sen!2sid"
								   width="600" height="450" style="position: relative; top: 214px; left: 10px;" class="google_map" allowfullscreen="" loading="lazy"
								   width="1400"
								   height="800"
								   frameborder="0">

								</iframe>

								<div class="sosial_media">
									<a class="sosmed-fb" href="#" style="background-image: url('image/fb.jpg'); left: 34px;">
										
									</a>
									<a class="sosmed-wa" href="#" style="background-image: url('image/wa.jpg'); left: 123px;">
										
									</a>
									<a class="sosmed-tiktok" href="#" style="background-image: url('image/tiktok.png'); left: 212px;">
										
									</a>
									<a class="sosmed-ig" href="#" style="background-image: url('image/ig.jpg'); left:300px;">
										
									</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>

		@foreach($menulist as $menu)

		<div class="swiper-slide">
			<div class="swiper-zoom-container">
				<img src="{{ $menu->photo }}"/>
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
