<?php

    //$dbConfig = config::getInstance()->get('db');
    function connect(){
        $db = new PDO(
            "mysql:host=sql103.epizy.com; dbname=PDO_bookstore",
            "epiz_30799275",
            "9dOnLSBYN2o4A"
        );
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        if(!$db){
            echo 'Database not connected!';
        }
        return $db;
    }

?>