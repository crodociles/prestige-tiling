<?php
	include 'page-head.php'
?>
	

<div id="bathroom-gallery" class="gallery-section-wrapper bathroom-gallery-section">

	<span class="bathroom-inner-title">Bathroom Gallery</span>
	
	<button class="btn btn-default gallery-close bathroom-gallery-close">Close Gallery</button>

	<div class="gallery-cover-img bathroom-cover">
		<br><Br><Br><Br><br>
		<span class="bathroom-cover-title">Bathroom Gallery</span><br>

		<button class="btn btn-info btn-lg gallery-open bathroom-gallery-open">View Gallery</button>

	</div>

	<div class="gallery-wrapper bathroom-gallery-wrapper">

		<script type="text/javascript">

			$(document).ready(function(){

				var count = 0;
				
				for(i = 1; i < 44; i++){

					var thumb = "img/prestige-tiling-img/bathroom/thumbs/t-prestige-bathroom-" + i + ".jpg";

					var full = "img/prestige-tiling-img/bathroom/prestige-bathroom-" + i + ".jpg";

					$(".bathroom-gallery-wrapper").append("<div class='gallery-thumb-img-wrapper'><a class='example-image-link' href='" + full + "' data-lightbox='example-1'><img class='gallery-thumb-img' src='" + thumb + "'></a></div>");

				};

			});
			
		</script>

	</div>

</div>

<br>

<div id="kitchen-gallery" class="gallery-section-wrapper kitchen-gallery-section">

	<span class="kitchen-inner-title">Kitchen Gallery</span>
	
	<button class="btn btn-default gallery-close kitchen-gallery-close">Close Gallery</button>

	<div class="gallery-cover-img kitchen-cover">
		<br><Br><Br><Br><br>
		<span class="kitchen-cover-title">Kitchen Gallery</span><br>

		<button class="btn btn-info btn-lg gallery-open kitchen-gallery-open">View Gallery</button>

	</div>

	<div class="gallery-wrapper kitchen-gallery-wrapper">

		<script type="text/javascript">

			$(document).ready(function(){

				var count = 0;
				
				for(i = 1; i < 30; i++){

					var thumb = "img/prestige-tiling-img/kitchen/thumbs/prestige-kitchens-" + i + ".jpg";

					var full = "img/prestige-tiling-img/kitchen/prestige-kitchens-" + i + ".jpg";

					$(".kitchen-gallery-wrapper").append("<div class='gallery-thumb-img-wrapper'><a class='example-image-link' href='" + full + "' data-lightbox='example-1'><img class='gallery-thumb-img' src='" + thumb + "'></a></div>");

				};

			});
			
		</script>

	</div>

</div>

<br>

<div id="flooring-gallery" class="gallery-section-wrapper flooring-gallery-section">

	<span class="flooring-inner-title">Flooring Gallery</span>
	
	<button class="btn btn-default gallery-close flooring-gallery-close">Close Gallery</button>

	<div class="gallery-cover-img flooring-cover">
		<br><Br><Br><Br><br>
		<span class="flooring-cover-title">Flooring Gallery</span><br>

		<button class="btn btn-info btn-lg gallery-open flooring-gallery-open">View Gallery</button>

	</div>

	<div class="gallery-wrapper flooring-gallery-wrapper">

		<script type="text/javascript">

			$(document).ready(function(){

				var count = 0;
				
				for(i = 1; i < 21; i++){

					var thumb = "img/prestige-tiling-img/floors/thumbs/prestige-floors-" + i + ".jpg";

					var full = "img/prestige-tiling-img/floors/prestige-floors-" + i + ".jpg";

					$(".flooring-gallery-wrapper").append("<div class='gallery-thumb-img-wrapper'><a class='example-image-link' href='" + full + "' data-lightbox='example-1'><img class='gallery-thumb-img' src='" + thumb + "'></a></div>");

				};

			});
			
		</script>

	</div>

</div>

<br>

<div id="misc-gallery" class="gallery-section-wrapper misc-gallery-section">

	<span class="misc-inner-title">Other Gallery</span>
	
	<button class="btn btn-default gallery-close misc-gallery-close">Close Gallery</button>

	<div class="gallery-cover-img misc-cover">
		<br><Br><Br><Br><br>
		<span class="misc-cover-title">Fireplace Gallery</span><br>

		<button class="btn btn-info btn-lg gallery-open misc-gallery-open">View Gallery</button>

	</div>

	<div class="gallery-wrapper misc-gallery-wrapper">

		<script type="text/javascript">

			$(document).ready(function(){

				var count = 0;
				
				for(i = 1; i < 6; i++){

					var thumb = "img/prestige-tiling-img/fireplaces/thumbs/prestige-fireplace-" + i + ".jpg";

					var full = "img/prestige-tiling-img/fireplaces/prestige-fireplace-" + i + ".jpg";

					$(".misc-gallery-wrapper").append("<div class='gallery-thumb-img-wrapper'><a class='example-image-link' href='" + full + "' data-lightbox='example-1'><img class='gallery-thumb-img' src='" + thumb + "'></a></div>");

				};

			});
			
		</script>

	</div>

</div><br><br>

<?php
include 'page-foot.php'
?>