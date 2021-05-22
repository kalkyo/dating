<?php

/*  data-layer.php
 *  Return data for the cupcake website
 *
 */

function getGender()
{
    return array('Male', 'Female', 'Other');
}

function getIndoor()
{
    return array('hideandseek' => 'Hide & Seek',
                 'napping' => 'Napping',
                 'shellgame' => 'Shell Game',
                 'puzzletoys' => 'Puzzle Toys');
}

function getOutdoor()
{
    return array('hiking' => 'Hiking',
        'swimming' => 'Swimming',
        'goingtothepark' => 'Going to the park',
        'walking' => 'Walking',
        'fetching' => 'Fetching',
        'obstaclecourse' => 'Obstacle Course');
}
