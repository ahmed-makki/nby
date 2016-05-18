<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Comments
{

    //$params
    public function fetchComments($idOfRecord, $typeOfRecord = "photo")
    {
        //We need to get all the comments for a specific module
        
        //Rendering the data in to the commets widget should be through the client side
    }

    public function insertComment($name,$comment,$idOfRecord,$typeOfRecord = "photo")
    {
        //We need to validate the name and the comments entering the database 
        
        //If passed , insert the comment.
    }

}

/* End of file Comments.php */

