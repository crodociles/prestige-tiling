
<?php
include 'page-head.php';
?>

	<div class="body-text">

		<section class="wrapper">
			
			<article class="block">
				
				<ul id="slider">

					<li><a href="#slide1"><img src="img/prestige-tiling-img/bathroom/prestige-bathroom-24.jpg"></a></li>
					<li><a href="#slide2"><img src="img/prestige-tiling-img/floors/prestige-floors-8.jpg"></a></li>
					<li><a href="#slide3"><img src="img/prestige-tiling-img/floors/prestige-floors-16.jpg"></a></li>
					<li><a href="#slide3"><img src="img/prestige-tiling-img/kitchen/prestige-kitchens-6.jpg"></a></li>
					<li><a href="#slide3"><img src="img/prestige-tiling-img/kitchen/prestige-kitchens-4.jpg"></a></li>
					<li><a href="#slide3"><img src="img/prestige-tiling-img/bathroom/prestige-bathroom-42.jpg"></a></li>

				</ul>
			
			</article>
		
		</section>		
	
		<br>

		<div class="row">
			
			<div class="col-md-7">

				<h1>Prestige Tiling</h1>

				<br>

				<p>	Quality Service and Installation! Excellent attention to detail!</p>
				<p> All aspects of wall and floor tiling completed to a very high standard.</p>
				<p>	We can fix and lay all forms of tiles including: all natural stone, marble, granite, slate, ceramic, porcelain, mosaics and many more.
				<p>	For a free quote you can email us at <a href="mailto:Simon_43@hotmail.co.uk">Simon_43@hotmail.co.uk</a> or call Simon on 07825251639.</p>
					Covering Lincolnshire and surrounding areas.
				</p>
			
			</div> <!-- /col -->

			<div class="col-md-5">

				<div class="google-map">

					<h2> Where to find us</h2>

					<div style='overflow:hidden;height:300px;width:300px;'>
						<div id='gmap_canvas' style='height:300px;width:300px;'>
					
						</div>
					</div>
					
					<script type='text/javascript'>
						function init_map(){
							var myOptions = {zoom:7,center:new google.maps.LatLng(53.588646,-0.6544129999999768),mapTypeId: google.maps.MapTypeId.ROADMAP};
							map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
							marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.588646,-0.6544129999999768)});
							infowindow = new google.maps.InfoWindow({content:'<strong>Prestige Tiling</strong><br>Scunthorpe<br>'});
							google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
						}
						google.maps.event.addDomListener(window, 'load', init_map);
					</script>

				</div> <!-- .google-map -->
			
			</div> <!-- /col -->

		</div> <!-- /row -->

		<br>

		<div class="row">

			<div class="col-md-3">

				<div class="service-div">

					<div id="service-img-1" class="service-img">

					</div>

					<h6>Kitchens</h6>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>

					<button class="btn btn-default"><a class="services-index-link" href="gallery.php#kitchen-gallery">See more</a></button>

				</div>

			</div>

			<div class="col-md-3">

				<div class="service-div">

					<div id="service-img-2" class="service-img">

					</div>

					<h6>Bathrooms</h6>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>

					<button class="btn btn-default"><a class="services-index-link" href="gallery.php#bathroom-gallery">See more</a></button>

				</div>

			</div>

			<div class="col-md-3">

				<div class="service-div">

					<div id="service-img-3" class="service-img">

					</div>

					<h6>Flooring</h6>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>

					<button class="btn btn-default"><a class="services-index-link" href="gallery.php#flooring-gallery">See more</a></button>

				</div>

			</div>

			<div class="col-md-3">

				<div class="service-div">

					<div id="service-img-4" class="service-img">

					</div>

					<h6>and more...</h6>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>

					<button class="btn btn-default"><a class="services-index-link" href="gallery.php#misc-gallery">See more</a></button>

				</div>

			</div>

		</div> <!-- /row -->

	</div> <!-- /body-text -->

<?php
include 'page-foot.php';
?>