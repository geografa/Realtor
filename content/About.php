<div id="intro-holder">
	<div class="intro">
		<div class="blurb">
			<h2>Realtors.</h2>
		</div><!--END blurb-->		
	</div><!--END intro-->
</div><!--END intro-holder-->

<div id="wrapper">
	
	<div id="content">

		<div id="inner-sidebar" class="right">
				<h4>Karim & Leonie have been realtors since 2006 & 2003 respectively. We love life in Portland with our two beautiful sons and amazing community. We also love Portland’s fantastic homes and eclectic neighborhoods, and the never ending process of restoring our own turn of the century home.</h4><br />
				<h4>Leonie has lived in Oregon since 1990. Karim is a Portland native, and proud of it. Our families, however, come from far and wide. We’re very grateful to have friends and family all over the world to visit… and even more grateful to live somewhere as naturally stunning as Oregon. And we always enjoy coming home to Portland.</h4>

		</div><!--END inner-sidebar-->
		
			<div class="slideshow-container">
				
				<div class="slideshow">					
				
					<div class="nivoSlider left" id="slidernivo">
						<?php
						$dir = scandir("images/about");
						$result = count($dir);
						$i=3;
						while($i<=$result)
							{
								echo "<img src='images/about/$dir[$i]' />";
								$i++;
							}
						?>
						<!-- <img src="images/slides/slide1.1.jpg" /> -->
					</div><!--END slidernivo-->
									
				</div><!--END slideshow-->
				<div class="services-list-bottom" style="width: 720px"> <!-- This is a hack FIX THIS -->
				</div><!--END services-list-bottom-->
				<br />
			</div><!--END slideshow-container-->

	</div><!--END content-->
</div><!-- #wrapper -->
