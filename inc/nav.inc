<nav class="navbar">
<div class="container-fluid">
<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">"
	&#9776;
</button>
<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
	<ul class="nav nav-pills">
		<li <?php if($thisPage=="home") { echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
		<li <?php if($thisPage=="page1") { echo 'class="active"'; } ?>><a href="roster.php">Roster</a></li>
		<li <?php if($thisPage=="page2") { echo 'class="active"'; } ?>><a href="schedule.php">Schedule</a></li>
		<li <?php if($thisPage=="page3") { echo 'class="active"'; } ?>><a href="staff.php">Coaching Staff</a></li>
	</ul>
	</div>
</div>
</nav>