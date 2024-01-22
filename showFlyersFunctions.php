<?php

/**
 * HTML elements to display a single show flyer.
 *
 * @param string $uri The ending URI for the image location
 * @param string $alt Alt inforamation for the image
 * @param int $imgNumber The number to associate with the modal pop-up
 */
function displayFlyer($uri, $alt, $imgNumber)
{
    echo '
		<div class="col-sm-3 pb-3">
			<img src="https://www.bard.edu/bardmakesnoise/images/showflyers/' . $uri . '" alt="' . $alt . '" class="img-fluid" data-toggle="modal" data-target="#lsImg' . $imgNumber . '" style="width: 100%;">
		</div>';
}

/**
 * A simple for loop to display all show flyers from the $flyerData element.
 *
 * @param array $flyerData An array of show flyer information
 */
function displayAllFlyers($flyerData)
{
    echo '<div class="row lt-gray">';
    for ($x = 0; $x < count($flyerData); $x++)
        displayFlyer($flyerData[$x][0], $flyerData[$x][1], $x + 1);
    echo '</div>';
};

/**
 * HTML elements and displaying a modal image pop-up when clicked on screen.
 *
 * @param int $number The number associated with the image in the carousel to pop-up when clicked.
 * @param string $title The image title.
 * @param string $url The ending URI for the image location for the pop-up.
 * @param string $alt Alt information for the image.
 */
function modalPopUp($number, $title, $url, $alt)
{
    echo '
    <div class="modal" id="lsImg' . $number . '">
        <div class="modal-dialog-mod">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">' . $title . '</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body d-flex justify-content-center">
                    <img src="https://www.bard.edu/bardmakesnoise/images/showflyers/' . $url . '" class="img-fluid" alt="' . $alt . '" data-toggle="modal" data-target="#lsImg' . $number . '">
                </div>
            </div>
        </div>
    </div>
    ';
}

/**
 * Displaying all modal pop-up links with a function call to modalPopUp.
 *
 * @param array $modalData An array of information for the modal pop-up.
 */
function displayModal($modalData)
{
    for ($x = 0; $x < count($modalData); $x++)
        modalPopUp($x + 1, $modalData[$x][1], $modalData[$x][0], $modalData[$x][1]);
}
