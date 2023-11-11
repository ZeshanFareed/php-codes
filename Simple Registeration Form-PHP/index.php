<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <form action="insert.php" method="POST">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="fname">Father Name</label>
        <input type="text" class="form-control" id="fname" name="fname" required>
      </div>

      <div class="form-group">
        <label for="cnic">cnic</label>
        <input type="text" class="form-control" id="cnic" name="cnic" required>
      </div>

      <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      
      <button type="submit" class="btn btn-danger">Register</button>
    </form>
  </div>
</body>
</html>
