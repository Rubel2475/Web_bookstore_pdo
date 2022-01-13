<?php

    //$dbConfig = config::getInstance()->get('db');
    function connect(){
        $db = new PDO(
            "mysql:host=sql6.freesqldatabase.com; dbname=sql6465431",
            "sql6465431",
            "SihwcRyWHa"
        );
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        if(!$db){
            echo 'Database not connected!';
        }
        return $db;
    }

?>