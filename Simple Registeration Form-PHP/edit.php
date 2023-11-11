<?php

$conn = new mysqli('localhost', 'root', '', 'zeshi');


if ($conn->connect_error) {
  die('Database connection failed: ' . $conn->connect_error);
}


$id = $_GET['id'];


$sql = "SELECT * FROM regform WHERE id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows == 0) {
  header('Location: view.php');
  exit;
}


$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Record</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Edit Record</h1>

    <form action="update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
      </div>

      <div class="mb-3">
        <label for="fname">FatherName</label>
        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['FatherName']; ?>">
      </div>

      <div class="mb-3">
        <label for="cnic">CNIC</label>
        <input type="text" class="form-control" id="cnic" name="cnic" value="<?php echo $row['CNIC']; ?>">
      </div>
      <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['Password']; ?>">
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>

<?php

// Close the database connection
$conn->close();

?>
