<?php
    
    function add($db, $title, $author, $available, $isbn, $pages){

        $qt = "INSERT INTO books (title, author, available, isbn, pages)
        VALUES (\"$title\", \"$author\", $available, $isbn, $pages);";
        
        $db->query($qt);
    }

    function show_table($db){

        $table = $db->query("SELECT * FROM `books` WHERE 1");
        return $table;
    }

    function drop($db, $id){
        $id = (int)$id;
        return $db->exec("DELETE FROM books WHERE id=$id;");
    }

?>