<div id="intro-holder">
	<div class="intro">
		<div class="blurb">
			<h2>Realtors.</h2>
		</div><!--END blurb-->		
	</div><!--END intro-->
</div><!--END intro-holder-->

<div id="wrapper">
	<div id="content">	
		<div id="inner-content-full">	
			
			<div class="slideshow-container">
				<div class="slideshow">
					<div class="nivoSlider" id="slidernivo">
						<?php
						$dir = scandir("images/about");
						$result = count($dir);
						$i=2;
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

				<div class="services-list-bottom">
					<p>Karim & Leonie are parents of 2 boys, SE Portland residents and world travelers... We are very lucky to have family to visit all over the world. We've recently traveled to England, Scotland, Australia, France, Senegal... all to visit close family.</p>
				</div><!--END services-list-bottom-->
			
			
		</div><!--END inner-content-full-->
	</div><!--END content-->
</div><!-- #wrapper -->
