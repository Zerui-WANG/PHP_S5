<?php

    function getConnect()
    {
        try{
            $db = new PDO('mysql:host=localhost;dbname=project_dev_s5;charset=utf8','root','', 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e){
            die('Error : ' .$e->getMessage());
        }

        return $db;
    }