<!-- homepage that introduces the	website's	topic	and	introduces	three	sub-topics-->

<!doctype html>
<?php $thisPage="home"; ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Team 8 Website</title>
	<link rel="stylesheet" href="css/styles.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">

	<!--Probably use a php include for the hero/header-->

	<div class="nav-bar"><?php include("nav.php");?></div>
	<p>JavaScript-powered slideshow to preset relevant photos</p>
		<article>
			<h2>New York Rangers</h2>
			<p>The New York Rangers are an American professional ice hockey team based in New York City that competes in the National Hockey League (NHL). They are a member club of the league's Metropolitan Division in the Eastern Conference. The team plays its home games at Madison Square Garden, located in the borough of Manhattan. The Rangers are one of three NHL franchises in the New York metropolitan area, along with the New Jersey Devils and New York Islanders. The club is also one of the oldest teams in the NHL, having joined in 1926 as an expansion franchise. They are part of the group of teams referred to as the Original Six, along with the Boston Bruins, Chicago Blackhawks, Detroit Red Wings, Montreal Canadiens and Toronto Maple Leafs. The Rangers were the first NHL franchise in the United States to win the Stanley Cup,which they have done four times, most recently in 1993–94.</p>			
		</article>

	</div>
</body>

<div class="footer"><?php include("footer.php");?></div>

</html>