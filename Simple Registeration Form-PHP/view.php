<?php


$conn = new mysqli('localhost', 'root', '', 'zeshi');



if ($conn->connect_error) 
{
  die('Database connection failed: ' . $conn->connect_error);
}


$sql = "SELECT * FROM regform";

$result = $conn->query($sql);


if ($result->num_rows > 0) 
{
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container " >
        <h1>View Page</h1>
        <table  class="table table-border">
            <thead>
                <tr><th>name</th>
                    <th>FatherName</th>
                    <th>CNIC</th>
                    <th>Password</th>
                    <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['FatherName']; ?></td>
                    <td><?php echo $row['CNIC']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
               
            <?php } ?>

        </table>
    </div>
</body>
</html>
                <?php }
                else
                {
                    echo '<p>There are no records in the reg table.</p>';
                }
                $conn->close();

                
                ?>