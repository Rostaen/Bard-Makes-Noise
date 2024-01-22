<?php

/**
 * A function that prints a button with the given time period.
 *
 * @param int $period The decad bands were formed in
 */
function timePeriodButton($period)
{
    echo '<a href="#' . $period . '" class="btn btn-info" role="button">' . $period . 's</a>';
}

/**
 * A function that prints the entire <section> and calls the timePeriodButton.
 */
function printEraMenu()
{
    echo '
    <section id="top" class="d-flex justify-content-center mb-3">
	    <div class="btn-toolbar btn-group btn-group-lg">';
    for ($x = 1950; $x < 2010; $x += 10)
        timePeriodButton($x);
    echo '</div>
    </section>';
}

/**
 * Prints the given band card with the information passed through.
 *
 * @param string $url The webpage destination
 * @param string $img The end URI for the band's image
 * @param string $alt Alt information for the image
 * @param string $bandName The band's name
 */
function bandCard($url, $img, $alt, $bandName)
{
    echo '<div class="col-sm-3">
		<a href="' . $url . '">
			<div class="wrapper">
				<img src="https://www.bard.edu/bardmakesnoise/images/' . $img . '" alt="' . $alt . '" class="img-fluid">
			</div>
			<h3>' . $bandName . '</h3>
		</a>
	</div>';
}

/**
 * Prints the HTML elements for that Era and calls the bandCard to print the Band's info.
 *
 * @param array $bandData An array of string information to be printed with bandCard.
 * @param int $era The decade being printed for Tile and Hyperlinking info.
 */
function loopThroughEra($bandData, $era)
{
    echo '
	<div id="' . $era . '"></div>
	<ul class="list-group mb-3">
		<li class="list-group-item list-group-item-secondary fs-3 fw-bold lh-2">' . $era . 's</li>
	</ul>
	<section class="row mb-3">';
    for ($x = 0; $x < count($bandData); $x++)
        bandCard($bandData[$x][0], $bandData[$x][1], $bandData[$x][2], $bandData[$x][3]);
    echo '</section>';
}
