<?php
class Template
{
	var $title = 'Untitled';
	var $keywords = 'keywords';
	var $description = 'description';
	var $script = '';
	function setTitle($title)
	{
		$this->title = $title;
	}
	function setMetaKW($keywords)
	{
		$this->keywords = $keywords;
	}
	function setMetaDesc($description)
	{
		$this->description = $description;
	}
	function setScript($script)
	{
		$this->script = $script;
	}
	function open()
	{ ?>
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/bootstrap-css/bootstrap.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<title><?php echo $this->title; ?></title>
		</head>

		<body>
			<header class="header">
				<div class="logo d-flex justify-content-center pt-4 pb-4">
					<a href="index.php"><img src="https://www.bard.edu/bardmakesnoise/images/logo.jpg" alt="Bard Makes Noise" class="img-fluid"></a>
					<h1 style="display: none;">Bard Makes Noise</h1>
				</div>
				<div class="">
					<nav class="navbar navbar-expand-sm bg-dark fw-bold fs-4 d-flex justify-content-center">
						<!-- Links -->
						<ul class="navbar-nav">
							<li class="nav-item pe-3">
								<a class="nav-link" href="bands.php">Bands, Musicians, &amp; More</a>
							</li>
							<li class="nav-item pe-3">
								<a class="nav-link" href="showflyers.php">Show Flyers</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://forms.gle/uL3vKUD2Wpjujum57" target="_blank">Contact</a>
							</li>
						</ul>

					</nav>
				</div>
			</header>
			<main class="container bdy">
			<? }

		function close()
		{ ?>
			</main>
			<footer class="footer container-fluid">
				<div class="container pt-3">
					<p class="text-center">
						©<?php echo date('Y'); ?> Bard Archives • 1 Library Road, Annandale-on-Hudson, NY 12504 • 845.758.7148 • <a href="https://forms.gle/zMPDWXTcRUsEyX7r6" target="_blank">Contact</a>
					</p>
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<p class="text-secondary fs-7">
								<span class="fw-bold">Disclaimer:</span> The information on the Bard Makes Noise site is for general use only and we endeavor to keep the information as up-to-date and correct as possible. All content on this website is used with the permission of the creators. It does not necessarily reflect the views of Bard College.
							</p>
						</div>
						<div class="col-lg-2"></div>
					</div>
				</div>
			</footer>
		</body>

		</html>
<? }
	} ?>
