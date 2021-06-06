<?php

/**
 * premium member class
 * Represents a premium member object with standard member info and interests
 * @author Peter Eang
 * @copyright 2021
 */

class PremiumMember extends Member
{
    private $_inDoorInterests = array();
    private $_outDoorInterests = array();

    /**
     * getIndDoorInterests() function
     * @return array User's In-door interests
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /**
     * setIndoorInterests() function
     * @param array $inDoorInterests User's In-door interests
     * @return void
     */
    public function setInDoorInterests($inDoorInterests)
    {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * getOutDoorInterests() function
     * @return array User's outdoor interests
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }

    /**
     * setOutDoorInterests() function
     * @param array $outDoorInterests
     * @return void
     */
    public function setOutDoorInterests($outDoorInterests)
    {
        $this->_outDoorInterests = $outDoorInterests;
    }


}
