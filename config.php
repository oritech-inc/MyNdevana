<?php

class Appconfig
{

    public function db_connect($obj){
        if (!mysqli_connect($obj["host"], $obj["db"], $obj["user"], $obj["pass"])) {
            return false;
        } else {
            return true;
        }
    }
}

?>