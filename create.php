<?php
  
    if (isset($_GET['title'])) {

        $added = true;

        /// sql section

        require "database/connection.php";
        require 'database/functions.php';

        $pddb = connect();
        add($pddb, htmlspecialchars($_GET['title']), $_GET['author'],  $_GET['available'], 
                            $_GET['isbn'], $_GET['pages']);



        header('Location: index.php');
    }

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New</title>
</head>

<body class="create-body">

    <?php include 'navbar.html'; ?>

    <!-- add new book -->

    <div class="form-container">
        <form action="" method="GET">

            <fieldset>

                <legend style="color:lawngreen"> Enter book details </legend>
                <br> <br> 

                <div class="form-left form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div> <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for=>Author</label>
                        <input type="text" class="form-control" placeholder="Author" name="author" required>
                    </div>  <br>
                    <div class="form-group col-md-6">
                        <label>Avilability</label>
                        <select class="form-control" name="available" required>
                            <option value="true" Selected>True</option>
                            <option value="false">False</option>
                        </select>
                    </div> <br>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Pages</label>
                        <input type="number" class="form-control" placeholder="Pages" name="pages" required>
                    </div> <br>
                    <div class="form-group col-md-6">
                        <label>ISBN</label>
                        <input type="number" class="form-control" placeholder="ISBN" name="isbn" required>
                    </div>
                </div> <br>
                
                <button type="submit" class="form-sub btn btn-success" style="background-color :green;">Add</button>
            </fieldset>
        </form>

    </div>


</body>

</html>