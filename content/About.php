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
				<h3>As a Realtor working in Portland, I have created this site as a resource for buyers & sellers who want to be proactive and well informed about the current market. If you are interested in buying or selling, please <a href="index.php?page=Listings">sign up to receive a daily listing email</a>. I look forward to talking with you about houses.</h3>

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
					<br />
					<h5>Karim & Leonie are parents of two boys, SE Portland residents and world travelers. We are very lucky to have family to visit all over the world. Our travels have taken us to England, Scotland, Australia, France, Senegal...all to visit close family.</h5>
				</div><!--END services-list-bottom-->
				<br />
			</div><!--END slideshow-container-->

	</div><!--END content-->
</div><!-- #wrapper -->
