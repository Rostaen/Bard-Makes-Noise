<?php
require_once("template.php");
include_once("bandPageFunctions.php");
$page = new Template();
$page->setTitle('Suede Wicked | Bands of Bard | Bard Makes Noise');
$page->setMetaKW('');
$page->setMetaDesc('');

// print page header
$page->open();
responsiveImageCSS();
?>
<div class="row lt-gray">
	<section class="col-lg-8">
		<h1>Suede Wicked</h1>
		<p>
			A popular band from the late 80's, Suede Wicked was Lon Clark (guitar), David Martinez (vocals), Bill Bronson (bass) and Thomas Crofts (drums).
		</p>
		<p>
			Audio provided by Brennan Cavanaugh ('88) and Seth Buncher ('88).
		</p>
	</section>
	<aside class="col-lg-4 pb-3">
		<?php
		// Displaying music section
		$musicData = [
			["Bummin' About the Pasta", "https://drive.google.com/file/d/1lyi0hIqPJA8Ar0NMf0HtpE5WBf9y852W/preview?usp=sharing", "from Beat Time Nasty demos"],
			["Cold City", "https://drive.google.com/file/d/1b6K9pfprnsoXMjZkoAi8nI3nsul7EU9l/preview?usp=sharing", "from Beat Time Nasty demos"],
			["Cornhouse", "https://drive.google.com/file/d/1lK877D6b_BfzAvcK9HT4gT6ccJdRaE7k/preview?usp=sharing", "from Beat Time Nasty demos"],
			["Cornhouse", "https://drive.google.com/file/d/1-dFYBPMpuh4IaLAnr8DnyBZKN-fITTLz/preview?usp=sharing", "Live"],
			["Everything's Really Fucked Up", "https://drive.google.com/file/d/1h8eHqBokXryEwtEUqWKRIbRILZufiVZp/preview?usp=sharing", "from Beat Time Nasty demo"],
			["Evil Driving Song", "https://drive.google.com/file/d/18qCPUVly97i5wbTgweCTpqXx5pMC0zD7/preview?usp=sharing", "from Beat Time Nasty demo"],
			["Girls of Winter", "https://drive.google.com/file/d/1uoSDzNlcVAJlgTayle41b1iaMmUwJcmB/preview?usp=sharing", "Live in Albee Lounge 5/20/89"],
			["Happy Song", "https://drive.google.com/file/d/1P15mxc4Onutv2QE99TDUlhsVaA6JMePe/preview?usp=sharing", "Live at Rhinecliff Hotel 5/19/88"],
			["Hendrix Song", "https://drive.google.com/file/d/1_sxse8rdZ6nijonQGt284-G5xkVxpIhj/preview?usp=sharing", "Live"],
			["Muddy Feet", "https://drive.google.com/file/d/1gKg5u1sdQ4ZFDEZkacmgyRUj64W6PtJf/preview?usp=sharing", "Live at Rhinecliff Hotel 5/19/88"],
			["Step Child", "https://drive.google.com/file/d/1XP82R5XSrCNkGbO8zCXbbVRQe-0iYR9U/preview?usp=sharing", "Live"],
			["Stepchild", "https://drive.google.com/file/d/1DPFO0kmYmWu4tjHgD0NusNUZdtsXrvRl/preview?usp=sharing", "from Beat Time Nasty demo"],
		];
		displayMusic($musicData, 1);

		// Displaying Indicators, Images, and Controls
		$carouselData = [
			["suedewicked/sw1.jpg", "Suede Wicked in the recording studio"],
			["suedewicked/sw2.jpg", "Suede Wicked in the recording studio"],
			["suedewicked/sw3.jpg", "Suede Wicked in the recording studio"],
		];
		displayCarousel($carouselData);
		?>
	</aside>
</div>

<?php
// Displaying Modal Section
$modalData = [
	["Suede Wicked in the recording studio", "suedewicked/sw1.jpg", "Suede Wicked in the recording studio"],
	["Suede Wicked in the recording studio", "suedewicked/sw2.jpg", "Suede Wicked in the recording studio"],
	["Suede Wicked in the recording studio", "suedewicked/sw3.jpg", "Suede Wicked in the recording studio"],
];
displayModal($modalData);

$page->close();
?>
