<?php
    require_once("template.php");
	
	$page = new Template();
	$page->setTitle('Home | Bard Makes Noise');
	$page->setMetaKW('');
	$page->setMetaDesc('');

	// print page header
	$page->open();
?>

	<div class="row">
		<div class="col-sm-8 lt-gray">
			<h1>Bard Makes Noise</h1>
			<p>This website is inspired by the creativity of Bard College's bands and musicians past and present. Do you remember bands like Boba Fett or Big Noise? Maybe Velcro Dildo rings a bell? Or 1973? Did you get the funk out with Saint Booty? Well you've found the right place! From rock to punk, jazz to metal, folk to funk, and new wave and post-punk to techno, Bard's diverse extracurricular music scene is represented here. Flashback with audio, video, photos, PDFs of student publications and more. Please feel free to add comments and make suggestions. But more importantly, if your band or your favorite Bard band is not featured -- CONTACT US -- let us know! Give us some audio, a description and a visual or two if you have them, and we'll include those bands or musicians. Our goal is to constantly be adding material, so hand it over if you've got it. Many thanks to all who have contributed already.</p>
		</div>
		<div class="col-sm-4">
			<div class="alert alert-danger">
			  <h2>News</h2>
			 <!--  <p>
			  	<a href="threebeasts.php">Three Beasts in Heat</a> has been updated. See what's new!
			  </p> -->
			  <p>
			  	Welcome to the new and improved Bard Makes Noise website!
			  </p>
			  <p>
			  	A new band has been added to the Bands page: <a href="steelydan.php">Donald Fagen &amp; Walter Becker [Steely Dan]</a>
			  </p>
			  <p>
			  	A new band has been added to the Bands page: <a href="lsd.php">Leon's Sanguine Delight</a>.
			  </p>
			</div>
		</div>
	</div>

<?php
	$page->close();
?>