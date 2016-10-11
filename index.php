<!-- homepage that introduces the	website's	topic	and	introduces	three	sub-topics-->

<!doctype html>
<?php $thisPage="home"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Team 8 Website</title>

	<?php include("inc/top.inc");?>


	<!--Probably use a php include for the hero/header-->

	<?php include("inc/nav.inc");?>

	<div class="slideshow-container">
	<div class ="mySlides fade">
		<figure>
			<img src="images/WelcometoNYR.jpg" width="100%" />
		</figure>
	</div>

	<div class="mySlides fade">
		<figure>
			<img src="images/NYRlogo.jpg" width="100%" />
		</figure>
	</div>

	<div class="mySlides fade">
		<figure>
			<img src="images/NewYorkRangersTeamPic.jpg" width="100%" />
		</figure>
	</div>

	<div class="mySlides fade">
		<figure>
			<img src="images/RangersSkyline.jpg" width="100%" />
		</figure>
	</div>

</div>
<br>

<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
</div>

<script src="js/slideshow.js"></script>

		<article>
			<h2>New York Rangers</h2>
			<p class="col-md-8">The New York Rangers are an American professional ice hockey team based in New York City that competes in the National Hockey League (NHL). They are a member club of the league's Metropolitan Division in the Eastern Conference.</p>			
		</article>
	</div> <!-- container -->
</body>

<?php include("inc/footer.inc");?>

</html>