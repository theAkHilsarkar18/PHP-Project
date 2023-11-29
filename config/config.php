<?php

class Config
{
    
    private $HOST = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "rnw";

    public function connect()
    {
        $res = mysqli_connect(
            $this->HOST,
            $this->USERNAME,
            $this->PASSWORD,
            $this->DB_NAME,
        );
        return $res;
    }


}

?>