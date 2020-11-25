<?php
include 'connect.php';
$i=1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Search Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body>
    <label>

    </label>
    <label>

        <h1>
            <button onclick="history.go(-1);" class="btn"><svg width="5em" height="2em" viewBox="0 0 16 16"
                    class="bi bi-skip-backward-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z" />
                    <path
                        d="M.904 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.692-1.01-1.233-.696L.904 7.304a.802.802 0 0 0 0 1.393z" />
                    <path
                        d="M8.404 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.693-1.01-1.233-.696L8.404 7.304a.802.802 0 0 0 0 1.393z" />
                </svg></i>
            </button>Book Search Results
        </h1>
        </br>
    </label>
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Price</th>
                </tr>
            </thead>
            <?php
    if (isset($_POST['submit'])) {
        $searchterm = $_POST['searchterm'];
        $searchtype = $_POST['searchtype'];
        
    
    $sql = "SELECT * FROM `catalogs` WHERE $searchtype LIKE '%$searchterm'";
    $result = $conn->query($sql);
    # code...

    while ($row = $result->fetch_assoc()) {
        $isbn   = $row['isbn'];
        $author = $row['author'];
        $title  = $row['title'];
        $price  = $row['price'];
            # code...
        echo"
        <tr>
        <td>".$i++."</td>
        <td>".$isbn."</td>
        <td>".$author."</td>
        <td>".$title."</td>
        <td>".$price."</td>
        
        <tr>";
        echo "</table>";
            # code...
        }     
    }
    mysqli_close($conn); 



    // TODO 1: Create short variable names.


    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.


    // TODO 4: Query the database.


    // TODO 5: Retrieve the results.


    // TODO 6: Display the results back to user.


    // TODO 7: Disconnecting from the database.


    ?>
    </div>
</body>

</html>