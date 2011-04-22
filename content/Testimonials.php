<div id="intro-holder">

	<div class="intro">
	
		<div class="blurb">
			<h2>They’re home.</h2>
		</div><!--END blurb-->
		
	</div><!--END intro-->

</div><!--END intro-holder-->

<div id="wrapper">	
	<div id="content">
		<div id="sidebar" class="right">
				<?php
				$dir = scandir("images/testimonials");
				$result = count($dir);
				$i=2;
				while($i<=$result)
					{
						echo "<div class='img'><img src='images/testimonials/$dir[$i]' /></div>";
						$i++;
					}
				?>
				<!-- <img src="images/testimonials/blah.jpg" /> -->

		</div><!-- END sidebar -->
		<div id="inner-content">
			<p>We are so grateful for the referrals from past clients. We hope to earn your referrals as well. Here is a sampling of what the Best Clients In The World are saying about working with us.</p>
			<div class="border-divider"></div>			
			<div class="two-even">
				<h3>Andy & Lesley</h3>
				<h5>Sale ~ NE Portland	Purchase ~ Milwaukie</h5>
					<p>We were fortunate that a family member referred Karim to be one of five realtors we interviewed for this journey of selling our first home and buying our “dream home.” We finally found our dream home but attached was a difficult seller, that Karim handled wonderfully. He took great care of us through our transactions, making our journey a positive experience from beginning to end. THANK YOU KARIM!</p>
			</div><!--END two-even-->					

			<div class="two-even last">			
				<h3>Dan & Mirra</h3>
				<h5>Purchase ~ SE Portland</h5>
					<p>Karim is wonderful! We immediately felt comfortable with him as well as confident that we would find a house. Karim gave us insight about house structure & systems and the ins and outs of what we could expect if we bought the house because of his previous experience as a contractor. He never tried to "sell" us on a house and we knew he truly wanted us to find the perfect house. He not only organized everything but went above and beyond what was expected while keeping us informed through the entire process. - Very happy 1st time home buyers :)</p>
			</div><!--END two-even last-->


			<div class="border-divider"></div>

			<div class="two-even">
				<h3>Emily & Jamie</h3>	
				<h5>Purchase ~ N Portland</h5>
					<p>Having had a previous experience with another realtor, we were amazed at how different and how much better our experience with Karim was. He demystified the home-buying process for us, answering questions we didn’t even know we had and taking care of so many of the small and large steps involved, all of which reduced our anxiety considerably and made the whole endeavor very seamless. We fully trusted that Karim always had our best interest in mind.
					He advocated for us, offered us sound guidance, respected our decisions while also offering caution when necessary, referred us to other skilled professionals, and ultimately found us a fantastic house. We are so pleased to have worked with Karim, and we continue to recommend him to others.</p>
			</div><!--END two-even-->	

			<div class="two-even last">
				<h3>Joslin</h3>
				<h5>Sale ~ SE Portland</h5>
					<p>I found the entire process of working together with Karim and Leonie easy, synergistic, exciting and natural. From beginning to end we were partners and I was truly invigorated to sell my beloved home. We set out our goals to have the house sale ready within 30 days and to sell in a desired price range and close by the end of the following 30 days, and that is exactly what happened! I could not have imagined a more enjoyable journey and am so very grateful to have worked with two such positive, helpful and supportive people.</p>
			</div><!--END two-even last-->
		</div><!--END inner-content--> 
	</div><!--END content-->
</div><!-- #wrapper -->