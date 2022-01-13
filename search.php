<?php

    require 'database/connection.php';
    require 'database/functions.php';
    
    $pddb = connect();
    $db = show_table($pddb);


    $key1 = '';
    $data = '';
    $entries = array();

    if (isset($_POST['search'])) {
        $search_key = $_POST['search'];
        $option = 'title'; //$_POST['search_by'];


        foreach ($db as $key => $obj) :

            foreach ($obj as $key1 => $obj1) :
                if(!empty($search_key)){
                    if (strpos(strtoupper($obj1), strtoupper($search_key)) !== false) {
                        array_push($entries, $obj);
                        break; // add one entry for one list
                    }
                }
                else{
                    array_push($entries, $obj);
                    break;
                }
                
            endforeach;
        endforeach;
    }

?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>

<body>

    <?php include 'navbar.html';?>
    
    <h5 class="title-search text-success mt-2 mb-0">Search results for : <?php echo $search_key;?></h5>
    
    <div class="">
        <table class="table-main table table-striped table-sm">
            <thead class="table-head">
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Title</th>
                    <th scope="col" class="text-center">Author</th>
                    <th scope="col" class="text-center">Available</th>
                    <th scope="col" class="text-center">ISBN</th>
                    <th scope="col" class="text-center">Pages</th>
                </tr>
            </thead>
            <tbody class="">
                <?php foreach ($entries as $key => $obj) : ?>

                    <tr class="">

                        <th scope="row" class="text-center"><?php echo $key; ?></th>
                        <td class="text-center"> <?php echo $obj['title']; ?> </td>
                        <td class="text-center"><?php echo $obj['author']; ?></td>
                        <td class="text-center"><?php echo $obj['available'] ? 'YES' : 'NO'; ?></td>
                        <td class="text-center"><?php echo $obj['isbn']; ?></td>
                        <td class="text-center"><?php echo $obj['pages']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>