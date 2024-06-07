<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img src="birds.webp" alt="Birds" width="500" height="600">
    </div>
    <div class="col-md-6">
      <form action="contact.php" method="post">
       <center><h1>CONTACT FORM</h1></center>
        <div>
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div><br>
        <div>
          <label for="fname">Father Name</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your fathername" required>
        </div><br>
        <div>
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address"  placeholder="Enter your address" required>
        </div><br>
        <div>
          <label for="phoneno">Phone No</label>
          <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="Enter your mobilenumber" required>
        </div><br>
        <div>
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>