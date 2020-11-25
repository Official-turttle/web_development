<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Document</title>
</head>

<div class="container-fluid">
    <h2>Book List</h2>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ISBN</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Price</th>
                            </tr>
                        <tbody>
                            <?php
                                    include 'connect.php';
                                    $i = 1;
                                    
                                    $sql = "SELECT * FROM `catalogs`";

                                    $result = $conn -> query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        
                                    // $id          = $row['ID'];  
                                    $isbn       = $row['isbn'];
                                    $author     = $row["author"];
                                    $title      = $row['title'];
                                    $price      = $row['price'];
                                    

                                    

                                        echo "
                                        <tr>
                                        <td>        ".$i++."</td> 
                                        <td>        ".$isbn."</td>
                                        <td>        ".$author."</td>
                                        <td>        ".$title."</td>
                                        <td>    RM  ".$price."</td>";
                                        
                                        
                                        "</tr>";
                                         

                                    }
                                    echo "</table>";
                                    mysqli_close($conn);
                                 ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </body>

</html>