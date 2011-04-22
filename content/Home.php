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
					echo "<img src='images/slides/$dir[$i]' />";
					$i++;
				}
			?>
			<!-- <img src="images/slides/slide1.1.jpg" /> -->
		</div><!--END slidernivo-->
	
	</div><!--END slideshow-->
		
</div><!--END slideshow-container-->


	<div class="services-list-bottom">
	</div><!--END services-list-bottom-->
</div><!--END slideshow container-->     

<!-- end main content -->