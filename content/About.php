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
				<h3>Karim & Leonie are parents of 2 boys, SE Portland residents and world travelers... We are very lucky to have family to visit all over the world. We've recently traveled to England, Scotland, Australia, France, Senegal... all to visit close family.</h4>
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

			</div><!--END slideshow-container-->



	</div><!--END content-->
</div><!-- #wrapper -->
