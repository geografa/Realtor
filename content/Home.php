<div id="intro-holder">
	<div class="intro">
		<div class="blurb">			
			<h2>Home at last.</h2>
		</div><!--END blurb-->
	</div><!--END intro-->
</div><!--END intro-holder-->	


<div class="slideshow-container">
	<div class="slideshow">
		<div class="nivoSlider" id="slidernivo">
			<?php
			$dir = scandir("images/slides");
			$result = count($dir);
			$i=3;
			while($i<=$result)
				{
					echo "<a href='index.php?page=Testimonials'><img src='images/slides/$dir[$i]' /></a>";
					$i++;
				}
			?>
			<!-- <img src="images/slides/slide1.1.jpg" /> -->
		</div><!--END slidernivo-->
	
	</div><!--END slideshow-->
	<div class="services-list-bottom">
	</div><!--END services-list-bottom-->
	<a href="index.php?page=Listings">
		<div id="signup"></div>
	</a>
</div><!--END slideshow-container-->

<!-- end main content -->