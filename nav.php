<ul>
	<li <?php if($thisPage=="home") { echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
	<li <?php if($thisPage=="page1") { echo 'class="active"'; } ?>><a href="subtopic1.php">Subtopic1</a></li>
	<li <?php if($thisPage=="page2") { echo 'class="active"'; } ?>><a href="subtopic2.php">Subtopic2</a></li>
	<li <?php if($thisPage=="page3") { echo 'class="active"'; } ?>><a href="subtopic3.php">Subtopic3</a></li>
	<li <?php if($thisPage=="colophon") { echo 'class="active"'; } ?>><a href="humans.txt">Colophon</a></li>
</ul>