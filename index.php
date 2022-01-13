<?php
   
    require 'database/connection.php';
    require 'database/functions.php';

    $pddb = connect();

    $db = show_table($pddb);
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <title>Bookstore</title>
    <link rel="stylesheet" href="table_style.css">

    <style>
        .form_style{
            margin-left: 399px;
            margin-right: 399px;
        }
        legend {
            background-color: darkblue;
            color: white;
            padding: 5px 10px;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

</head>

<body style="background-color:cornsilk">

    <?php include 'navbar.html'; ?>

    <table class="center" >
        <caption style="font-style: ctype_alpha;"><b> <i> List of books </i> </b></caption>
            <tr>
                <th> id </th>
                <th>Title </th>
                <th>Author </th>
                <th>Availablity </th>
                <th>Pages </th>
                <th>ISBN </th>
                <th> Delete? </th>
            </tr>
            <?php foreach ($db as $key => $obj) : ?>
                <tr>
                    <th> <?php echo $key; ?> </th>
                    <td> <?php echo $obj['title']; ?> </td>
                    <td> <?php echo $obj['author']; ?></td>
                    <td> <?php echo $obj['available'] ? 'YES' : 'NO'; ?></td>
                    <td> <?php echo $obj['isbn']; ?></td>
                    <td> <?php echo $obj['pages']; ?></td>
                    <td> 
                        <a href="<?php echo 'delete.php?' . 'id=' . $obj['id']; ?>" onclick="return confirm('Are you sure?')">
                            <button class="btn btn-danger btn-sm" style="background-color: red;">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

</body>

</html>