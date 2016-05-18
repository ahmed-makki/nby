<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Comments
{

    //$params
    public function fetchRateOfRecord($idOfRecord, $typeOfRecord = "photo")
    {
         //we need fetch the total rating of record
    }

    public function addRate($rateValue , $idOfRecord, $typeOfRecord = "photo")
    {
        //Add a new rating to the selected record
        
        //recalculcate the new rating of the record
        $this->calculateRatingOfRecord($idOfRecord, $typeOfRecord);
    }
    
    public function calculateRatingOfRecord($idOfRecord, $typeOfRecord = "photo")
    {
        
    }

}

/* End of file Rates.php */
