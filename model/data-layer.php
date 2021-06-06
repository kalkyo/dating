<?php

/*  data-layer.php
 *  Return data for the dating website
 *
 */

class DataLayer
{
    static function getGender()
    {
        return array('Male', 'Female', 'Other');
    }

    static function getSeeking()
    {
        return array('Male Dog', 'Female Dog', 'Other Dog');
    }

    static function getIndoor()
    {
        return array('hideandseek' => 'Hide & Seek',
            'napping' => 'Napping',
            'shellgame' => 'Shell Game',
            'puzzletoys' => 'Puzzle Toys');
    }

    static function getOutdoor()
    {
        return array('hiking' => 'Hiking',
            'swimming' => 'Swimming',
            'goingtothepark' => 'Going to the park',
            'walking' => 'Walking',
            'fetching' => 'Fetching',
            'obstaclecourse' => 'Obstacle Course');
    }
}

