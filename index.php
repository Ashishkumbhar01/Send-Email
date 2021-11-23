<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="text/html" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Mail Sender - PHPMailer</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
  <h4 class="name">Mail Sender</h4>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Service</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
<div class="row">
<div class="mx-auto col-sm-12 col-md-8 col-lg-8">
<div class="container py-3">
<h4 class="text-center">Send Mail</h4>
</div>
<form action="http://localhost:8000/sendmail.php"  method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label>From</label>
    <input type="text" class="form-control" value="your@gmail.com" readonly aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>To</label>
    <input type="email" name="email"  class="form-control" required>
  </div>
  <div class="form-group">
    <label>Subject</label>
    <input type="text" name="subject" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Compose Email</label>
    <textarea class="form-control" type="text"  name="message" required></textarea>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text">Add</span>
  </div>
  <div class="custom-file">
  <input type="file" name="file[]" multiple="multiple" required class="custom-file-input">
  <label class="custom-file-label">Attachment</label>
  </div>
  </div>
  
  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<footer class="footer bg-success fixed-bottom">
<h6 class="text-center my-auto py-2 text-light">©All rights reserved.</h6>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
