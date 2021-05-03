<?php include("header.php"); ?>
	<!--banner-starts-->
	<div class="banner">
		<section class="slider">
            <div class="flexslider">
                <ul class="slides">
					<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-text">
								<p>Traditional</p>
								<h3>Ancient Indian folk painting and art styles</h3>
							</div>
						</div>
					</div>
					</li>
					<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-text">
								<p>Oil Paintings</p>
								<h3>Discover the world of Indian Art & Collectibles</h3>
							</div>
						</div>
					</div>
					</li>
					<li>
					<div class="banner3">
						<div class="container">
							<div class="banner-text">
								<p>Contemporary Art</p>
								<h3>Giving free expression to imagination & artistic liberty</h3>
							</div>
						</div>
					</div>
					</li>
					<li>
					<div class="banner4">
						<div class="container">
							<div class="banner-text">
								<p>Modern Art</p>
								<h3>Shows the influence of Western styles</h3>
							</div>
						</div>
					</div>
					</li>
				</ul>
			</div>
		</section>
		
	</div>
	<!--banner-end-->
	<!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
	<!--starts-welcome-->
	<div class="welcome" id="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h2>Welcome</h2>
				<p>A premier online indian art gallery, Indianartideas, houses original contemporary art, traditional and modern art paintings, drawings, sketches, sculptures from famous indian artists and as well as talented upcoming Indian artists. A finest collection of acrylic painting, oil paintings and mixed media paintings aggregated in various categories including but not limited to abstract, landscape, figurative and still life paintings adorns the online art collection. An art collector has an option to choose from the beautiful collection and sort the same by artist names, art categories, art style, medium, surface and price. Go ahead browse artworks and enjoy the liberty of creating your personal art collection and buy art at the click of a mouse !!</p>
			</div>
			
		</div>
	</div>
	<?php include("footer.php"); ?>