	<?php
include 'page-head.php';
?>

<div class="body-text">

<div class="row">

	<div class="col-md-6">
		<h2>Contact us</h2>

		<p>For a FREE quote or any other questions you can contact us by:</p>
		
		<div class="row">

			<div class="col-md-4 contact-icons">

				<div class="contact-wrapper">
				
				Email<br><a href="mailto:Simon_43@hotmail.co.uk"><i class="fa fa-4x fa-envelope-square"></a></i>
			
			</div>		
			</div>
			<div class="col-md-4 contact-icons">

				<div class="contact-wrapper phone-wrapper">

				Phone<br><i class="fa fa-4x fa-phone-square"></i>

				<span class="ph-num">07825 251639</span>
			
			</div>		
			</div>
			<div class="col-md-4 contact-icons">

				<div class="contact-wrapper">

				Facebook<br><a href="https://www.facebook.com/prestige.tiling.56"><i class="fa fa-4x fa-facebook-square"></a></i>
				</div>
			</div>
		
		</div>
	
	</div>

	<div class="col-md-6">
		
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
		</div>
	
</div>


</div> <!-- /body-text -->

<?php
include 'page-foot.php';
?>