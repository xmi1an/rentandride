<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.php">Rent&nbsp;& &nbsp;Ride&nbsp;</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="member-car-rent.php" class="nav-link">Earn with us</a></li>
				<li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				<?php if (isset($_SESSION['uid'])) : ?><li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							My Account
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="profile.php">Profile</a></li>
							<li>
							<li><a class="dropdown-item" href="mycars.php">My Cars</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="logout.php">Logout</a></li>
						</ul>
					</li>
				<?php else : ?>
					<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="member-car-rent.php" class="nav-link">Earn By Your car</a></li>
			</ul>
		</div>
	</div>
<?php endif ?>
</nav>